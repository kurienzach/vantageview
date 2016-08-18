<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use \App;
use App\Flat;
use App\Tower;
use App\Booking;
use Carbon\Carbon;
use Mail;
use Validator;

class PaymentController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */

    private function sendSmS($phoneno, $amount, $flat_id, $project){
        $sp_url     = "";
        $response   = "";
        $smsTxt = "We have received your payment of Rs. ".$amount.". One of our Relationship managers will get in touch with you shortly. Alternatively, you can reach us at 080 4455 5555";
        $sp_url = "http://trans.smscuppa.com/sendsms.jsp?user=purvnkra&password=purvnkra&mobiles=". $phoneno ."&sms=". urlencode($smsTxt) ."&senderid=PURVAA&version=3";
        
        if($sp_url != ""){
            //echo $sp_url;
            try {
                $ch     = curl_init();
                curl_setopt($ch, CURLOPT_URL, $sp_url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,10);
                curl_setopt($ch,CURLOPT_TIMEOUT,10);
                //curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
                //curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                //curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                //curl_setopt($ch, CURLOPT_NOSIGNAL, 1);

                set_time_limit(90);
                $response = curl_exec($ch);
                curl_close($ch);
                /*$response = file_get_contents($sp_url);*/
            }
            catch (Exception $e){
                return; 
            }
        }
        return $response;
    }

    public function page(Request $request)
    {
        // Find the details about the flat if a flat argument is passed
        if ($request->has('flat_id') && $request->has('ProjectID')) {
            $flat = Flat::where('project_id', $request->get('ProjectID'))->where('flat_id', $request->get('flat_id'))->first();
            if (empty($flat))
                abort(404);
            
            $request['type'] = $flat->type;
            $request['amount'] = 27000;
            $request['ProjectName'] = $flat->project()->first()->name;            
            $request['ProjectLogo'] = $flat->project()->first()->logo_url;            
        }

        return view('payment.payment', $request->all());
    }

    public function gateway(Request $request)
    {
        //return $request->all();
        if (!$request->has('msg')) {
            return view('payment.gateway', ['msg' => 'An error occured during the payment process']);
        }

        list($dummy, $recordid, $payref1, $payref2, $amount, $dummy, $dummy, $dummy, $dummy, $dummy, $dummy, $dummy, $dummy, $dummy, $paystatuscode, $dummy, $dummy, $dummy, $dummy, $dummy, $recordidval, $name, $projectName, $dummy, $dummy,$payhashstr)=explode('|', $request->get('msg'));

        // Verify the response checksum before using the data
        $response_msg = explode('|', $request->get('msg'));
        $hash = $response_msg[sizeof( $response_msg ) - 1];

        $commonkey = "zegOdAeHXRNG";
        $checksum = strtoupper(hash_hmac('sha256', implode('|', array_slice($response_msg, 0, sizeof($response_msg) - 1)) , $commonkey, false)); 

        // The computed hash and the hash obtained does not match
        if ($hash != $checksum)
            return view('payment.gateway', ['msg' => 'An error occured during the payment process']);

        $booking = Booking::where('booking_id', substr($recordid, 3, strlen($recordid)-3))->first();

        // Payment success
        if ($paystatuscode == '0300') {

            // Update bookings table to mark booking as success
            $booking->statuscode = $paystatuscode;
            $booking->statuscode = $paystatuscode;
            $booking->txnreferenceno = $payref1;
            $booking->bankreferenceno = $payref2;
            $booking->paymentstatus="Success";

            // Update flats table
            $flat = Flat::where('project_id', $booking->project_id)->where('flat_id', $booking->flat_id)->first();
            $flat->booked_id = $booking->id;
            $flat->booked_user_name = $booking->cust_name;
            $flat->booked_user_mail = $booking->cust_mail;
            $flat->booked_user_mobile = $booking->cust_mobile;
            $flat->booked_user_address = $booking->cust_address . ',' . $booking->city . ',' . $booking->country . ',' . $booking->pincode;
            $flat->agreement_value = $booking->amount;
            $flat->availability = "Sold";

            $booking->save();
            $flat->save();

            $this->sendSmS($booking->cust_mobile, $booking->amount, $booking->flat_id, $flat->project()->first()->name);

            // Send email to customer
            Mail::send('mails.booking_success', ['booking' => $booking], function($m) use ($booking){
                $m->to($booking->cust_mail, $booking->cust_name);
                $m->subject('Provident housing Flat Successfully booked');
            });
            // Send email to admin
            Mail::send('mails.new_booking', ['booking' => $booking], function($m) use ($booking){
                $m->to('vantageview@providenthousing.com', 'Vantage View');
                $m->subject('New Booking in Project ' . $booking->project()->first()->name);
            });
            
            return view('payment.gateway' ,[
                'msg' => 'Payment successful, your flat has been booked',
                'bookingid' => $booking->booking_id,
                'txnid' => $booking->txnreferenceno
            ]);
        }
        // Payment failure
        else {
            return view('payment.gateway', ['msg' => 'An error occured during the payment process']);
        }
        
    }

    public function gatewaytest() {
        return view('payment.gateway', ['msg' => 'An error occured during the payment process']);
    }

    private function create_billdesk_msg($uniqueID, $name, $projectName, $amount) {

        $returnURL = 'http://providenthousing.com/vantageview/payment/gateway';
        $billdeskData = 'PURAVANPRJ|'.'EOI'.$uniqueID.'|NA|' .$amount . '.00|NA|NA|NA|INR|NA|R|puravanprj|NA|NA|F|NA|NA|NA|NA|'.$uniqueID.'|'.$name.'|'.$projectName.'|'.$returnURL;
        $commonkey = "zegOdAeHXRNG";
        $checksum = hash_hmac('sha256',$billdeskData, $commonkey, false); 
        $checksum = strtoupper($checksum);
        $data = $billdeskData.'|'.$checksum;

        return $data; 
    }

    public function process(Request $request)
    {
        //return $request->all();
        if (!$request->has('AgreedTerms')) {
            return redirect()->back()->withInput()->withErrors(['msg' => 'Please accept the terms and conditions']); 
        }


        // Validations
        $validator = Validator::make(
            $request->all(),
            array(
                'ProjectID' => 'required',
                'TowerNo' => 'required',
                'FlatNo' => 'required',
                'UnitType' => 'required',
                //'RelManager' => 'required',
                'Amount' => 'required',
                'CustName' => 'required',
                'CustPan' => 'required',
                'cust_mail' => 'required|email',
                'cust_mobile' => 'required',
                'CustAddress' => 'required',
                'CustCity' => 'required',
                //'CustPincode' => 'required',
                'CustState' => 'required',
                'CustCountry' => 'required',
                //'CustCoApplicant' => 'required'
            ) 
        );
        

        // Check if flat is already booked
        $request['flat_id'] = $request->get('TowerNo') . '-' . $request->get('FlatNo');
        $flat = Flat::where('project_id', $request->get('ProjectID'))->where('flat_id', $request->get('flat_id'))->first();
        if (!isset($flat)) {
	    return 'hi';
            return redirect()->back()->withInput()->withErrors(['msg' => 'Invalid Flat ID']); 
        }
        if ($flat->availability != "Available") {
	    return 'hi1';
            return redirect()->back()->withInput()->withErrors(['msg' => 'Invalid Flat ID']); 
        }

        $booking = new Booking();

        // Project details
        $booking->project_id=$request->get('ProjectID');
        $booking->flat_id = $request->get('flat_id');
        $booking->rel_manager = $request->get('RelManager');
        $booking->heard_src = $request->get('CustSource');

        // Fill in customer details
        $booking->cust_name = $request->get('cust_name');
        $booking->cust_mail = $request->get('cust_mail');
        $booking->cust_mobile = $request->get('cust_mobile');
        $booking->cust_address = $request->get('cust_address');
        $booking->city = $request->get('city');
        $booking->country = $request->get('country');
        $booking->pincode = $request->get('pincode');
        $booking->panno = $request->get('panno');
        $booking->state = $request->get('state');
        $booking->coapplicant = $request->get('coapplicant');


        $booking->save();

        $booking->booking_id=strtoupper($flat->project()->first()->code_name) . Carbon::now('Asia/Kolkata')->format('HisdmY') . $booking->id;
        $booking->paymentstatus="Pending";
        $booking->amount=27000.00;

        $booking->save();


        $msg = $this->create_billdesk_msg($booking->booking_id, $booking->cust_name, strtoupper($flat->project()->first()->code_name), 2);

        return view('payment.process', ['msg' => $msg, 'ProjectLogo' => $flat->project()->first()->logo_url]);

        // $this->sendSmS(8095298035);

        // $booking->save();
    }

    
}
