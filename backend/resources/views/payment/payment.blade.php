@extends('payment.base')

@section('head')
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/colorbox.css') }}" rel="stylesheet">
@stop

@section('header')
    @include('payment.header', ['page_id' => 2])
@stop

@section('content')

<div class="online_booking_form_container">
    <div class="full_width_content">

        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js" type="text/javascript"></script>
        <script src="{{ url('js/jquery.validate.unobtrusive.min.js')}}" type="text/javascript"></script>

        <div class="online_booking_form_container">
            <div class="booking_head">
                <h2>Book your dream home Online <span class="flat_amt"></span></h2>
            </div>
            <form action="{{ url('/payment/process')}}" class="frmOnline" method="post" novalidate="novalidate">
                <div class="frm_container">

                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <h2 class="frm_heading"> Project Information</h2>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                    <div class="frm_fields">
                    	<div class="fl_left padr10">
                            <span class="span_required">*</span>
                            <input class="input_style" id="ProjectID" name="ProjectID" type="hidden" value="{{ $ProjectID or '' }}">
                            <input class="input_style" id="ProjectName" name="ProjectName" placeholder="Project Name" type="text" value="{{ $ProjectName or '' }}" required readonly>
                        </div>
                        
                        <!-- <div class="fl_left">
                    <span class="span_required">*</span>
                    <select name="ProjectUnityType" id="ProjectUnityType" class="filed_select" data-val-required="*"
                        data-val="true">
                        <option value="">Select Unit Type</option>
                        <option value="2BHK">2BHK</option>
                        <option value="3BHK">3BHK</option>
                        <option value="2BHK/3BHK">2BHK/3BHK</option>
                    </select>
                </div>-->

                        <div class="fl_left">
                            <span class="span_required">*</span>
                            <input class="input_style" id="UnitType" maxlength="20" name="UnitType" placeholder="Unit Type" type="text" value="{{ $type or '' }}" required readonly>
                            <!-- <select name="ProjectUnityType" id="ProjectUnityType" class="filed_select unitdrop " data-val-required="*" data-val="true">
                        <option value="">Select Unit Type</option>                       
                    </select> -->
                        </div>
                        <div style="clear: both;">
                        </div>
                    </div>
                    <div class="frm_fields">
                        <div class="fl_left padr10">
                            <input class="input_style" id="TowerNo" maxlength="7" name="TowerNo" placeholder="Tower No." type="text" value="{{ isset($flat_id) ? explode('-', $flat_id)[0]:'' }}" required readonly>
                        </div>
                        <div class="fl_left">
                            <input class="input_style" id="FlatNo" maxlength="7" name="FlatNo" placeholder="Flat No." type="text" value="{{ isset($flat_id) ? explode('-', $flat_id)[1]:'' }}" required readonly>
                        </div>
                        <div style="clear: both;">
                        </div>
                    </div>
                    <div class="frm_fields">
                        <div class="fl_left padr10">
                            <!--span class="span_required">*</span-->
                            <input class="input_style" id="RelManager" maxlength="100" name="RelManager" placeholder="Relationship Manager" type="text" value="{{ old('RelManager') }}">
                        </div>
                        <div class="fl_left">
                            <span class="span_required">*</span>
                            <input class="input_style" id="Amount" maxlength="15" name="Amount" placeholder="Payment Amount" type="text" value="Rs. {{ $amount or '' }}" required readonly>
                            <!--select name="ProjectPayment" id="ProjectPayment" class="filed_select" data-val-required="*" data-val="true">
                                <option value="">Payment Amount</option>
                                <option value="27720">BIG 72 - Rs 27720</option>

                                <option value="27000.00">Regular - Rs 27000</option>
                            </select-->
                        </div>
                        <div class="fl_left" style="display:none;">
                            <input class="input_style disp_none" id="RelManagerNo" name="RelManagerNo" placeholder="Mobile No. Of Relationship Manager" type="text" value="">
                        </div>
                        <div style="clear: both;">
                        </div>

                    </div>
                    <div class="frm_fields">
                        <div class="fl_left padr10">
                            <select name="CustSource" id="CustSource" class="filed_select" data-val-required="*" data-val="true">
                                <option value="">You heard about us from</option>
                                <option value="Sales Team">Sales Team</option>
                                <option value="Advertising">Advertising</option>
                                <option value="Real Estate Agent">Real Estate Agent</option>
                            </select>
                            @if(old('CustSource'))
                                <script>
                                    $('#CustSource').val("{{ old('CustSource')}}");
                                </script>
                            @endif
                        </div>
                        <div class="fl_left">
                            <div class="broker_name" style="display:none;">
                                <input class="input_style" id="SourceDetails" maxlength="150" name="SourceDetails" placeholder="Real Estate Agent Organization" type="text" value="">
                            </div>
                        </div>
                        <div style="clear: both;">
                        </div>
                    </div>
                    <div style="clear: both; height: 10px; background: #fff; position: relative; left: -20px;
                width: 740px;">
                    </div>
                    <div style="clear: both; height: 15px;">
                    </div>
                    <h2 class="frm_heading">
                Personal Information</h2>
                    <div class="frm_fields padbt10">
                        <div class="fl_left padr10">
                            <span class="span_required">*</span>
                            <input class="input_style" data-val="true" data-val-required="Name required" id="CustName" maxlength="100" name="cust_name" placeholder="Name" type="text" value="{{ $cust_name or '' }}">
                        </div>
                        <div class="fl_left">
                            <span class="span_required">*</span>
                            <input class="input_style" data-val="true" data-val-regex="Please enter correct PAN" data-val-regex-pattern="[A-Za-z]{3}[Pp]{1}[A-Za-z]{1}\d{4}[A-Za-z]{1}" data-val-required="PAN required" id="CustPan" name="panno" placeholder="PAN (IN CAPITAL LETTERS)" type="text" value="{{ old('panno') }}">
                        </div>
                        <div style="clear: both;">
                        </div>
                    </div>
                    <div class="frm_fields padbt10">
                        <div class="fl_left padr10">
                            <span class="span_required">*</span>
                            <input class="input_style" data-val="true" data-val-required="The Email field is required." id="cust_mail" maxlength="100" name="cust_mail" placeholder="Email" type="text" value="{{ $cust_mail or '' }}">
                        </div>
                        <div class="fl_left">
                            <span class="span_required">*</span>
                            <input class="input_style" data-val="true" data-val-required="Phone Number required" id="cust_mobile" maxlength="15" name="cust_mobile" placeholder="Phone No." type="text" value="{{ $cust_mobile or '' }}">
                        </div>
                        <div style="clear: both;">
                        </div>
                    </div>
                    <div class="frm_fields padbt10">
                        <div class="fl_left padr10">
                            <span class="span_required">*</span>
                            <textarea class="textarea_style" cols="20" data-val="true" data-val-required="Address required" id="CustAddress" maxlength=200 name="cust_address" placeholder="Address" rows="2">{{ old('cust_address') }}</textarea>
                        </div>
                        <div class="fl_left">
                            <span class="span_required">*</span>
                            <input class="input_style" data-val="true" data-val-required="City required" id="CustCity" maxlength="50" name="city" placeholder="City" type="text" value="{{ old('city') }}">
                        </div>
                        <div style="clear: both;">
                        </div>
                    </div>
                    <div class="frm_fields padbt10">
                        <div class="fl_left padr10">
                            <!--span class="span_required">*</span-->
                            <input class="input_style" data-val="true" id="CustPincode" maxlength="20" name="pincode" placeholder="Pincode" type="text" value="{{ old('pincode') }}">
                        </div>
                        <div class="fl_left">
                            <span class="span_required">*</span>
                            <input class="input_style" data-val="true" data-val-required="State required" id="CustState" maxlength="50" name="state" placeholder="State" type="text" value="{{ old('state') }}">
                        </div>
                        <div style="clear: both;">
                        </div>
                    </div>
                    <div class="frm_fields padbt10">
                        <div class="fl_left padr10">
                            <span class="span_required">*</span>
                            <input class="input_style" data-val="true" data-val-required="Country required" id="CustCountry" maxlength="50" name="country" placeholder="Country" type="text" value="{{ old('country') }}">
                        </div>
                        <div class="fl_left">
                            <!--span class="span_required">*</span-->
                            <input class="input_style" data-val="true" id="CustCoApplicant" maxlength="100" name="coapplicant" placeholder="Co-Applicant's Name" type="text" value="{{ old('coapplicant') }}">
                        </div>
                        <div style="clear: both;">
                        </div>
                    </div>
                    <div style="clear: both; height: 15px;">
                    </div>
                </div>

                <div class="agreement_container frm_fields" style="margin-top: 20px;">
                    <label class="lblAgreement">
                        <input data-val="true" data-val-required="The Terms&amp;amp;Conditions field is required." id="AgreedTerms" name="AgreedTerms" type="checkbox" value="true">
                        <input name="AgreedTerms" type="hidden" value="false"> I agree to <a href="#">Terms &amp; Conditions</a>
                    </label>
                </div>
                <div style="margin-bottom: 10px;">



                    <p style="font-family: arial; font-size: 11px; line-height: 12px; color: #2e3591; margin-bottom: 10px;">
                        Customers are permitted to pay only the BIG72 booking amount of Rs 27720 for Puravankara and Provident towards the purchase of a unit / apartment through this online payment gateway, for which no transaction processing charges will be levied by Puravankara. For any payments other than the booking amount of Rs 27720 and Rs 27000 for regular payments made through this online payment gateway, a processing fee of 2.0% of the transaction amount shall be levied by Puravankara/Provident on the customer.
                    </p>
                    <p style="font-family: arial; font-size: 11px; line-height: 12px; color: #2e3591;">
                        Customer are permitted to cancel their booking of a unit / apartment without any penal charges, provided their cancellation request is made prior to the signing / execution of a physical application form / relevant agreements. All refund in such cases will be processed only through the online refund process.
                    </p>
                    <br>

                    <p style="font-family: arial; font-size: 11px; line-height: 12px; color: #2e3591;">
                        Customers who don’t regularise their booking by completing necessary formalities, will be refunded their reservation amount of Rs. 27,720 in the first week of September 2015 or on receipt of refund request whichever is earlier. All reservations where the necessary booking formalities aren’t completed by July 31st, will be deemed as not interested and result in release of blocked units with the recall of "The Big 72 hrs Home Fest" price offer
                    </p>

                </div>
                <div class="action_container">
                    <input type="submit" class="btn_onlinebook" id="btnOnlineBooking" name="btnOnlineBooking" value="Proceed To Payment">
                </div>
            </form>
    </div>
</div>

<script src="{{ url('js/jquery.colorbox-min.js') }}" type="text/javascript"></script>
<script type="text/javascript">
    var projectId = "";
    jQuery(document).ready(function () {


        jQuery('.frmOnline').submit(function (event) {
            if (!jQuery('#AgreedTerms').is(':checked')) {
                event.preventDefault();
                jQuery.colorbox({
                    html: '<p class="ConverterText">You have to submit all the necessary details and accept Terms and Conditions</p>'
                });
            }
        });

        //jQuery("#CustSource").change(function () {
            //var srcVal = jQuery(this).val();
            //if (jQuery.trim(srcVal) != "Advertising" && jQuery.trim(srcVal) != "Sales Team") {
                //jQuery(".broker_name").show();
            //} else {
                //jQuery(".broker_name").hide();
            //}
        //});

        //jQuery("#ProjectID").change(function () {
            //var prjId = jQuery(this).val();
            //loadProjectUnit(prjId);
        //});

        //jQuery("#ProjectPayment").change(function () {
            //var prjAmt = jQuery(this).val();
            //var amtTxt = "at Rs." + prjAmt;
            //jQuery(".flat_amt").html(amtTxt);
        //});

        function loadProjectUnit(projectId) {

            if (projectId == "66") {
               // jQuery(ProjectUnityType).attr('disabled', true);
               // jQuery('[class*="unitdrop"]').fadeTo(0, 0.5);
                var cont_html = "<option value='NA'>NA</option>";
                jQuery("#ProjectUnityType").html(cont_html);
            } else {

                jQuery(ProjectUnityType).attr('disabled', false);
                jQuery('[class*="unitdrop"]').fadeTo(0.5, 1);
                jQuery.ajax({
                    type: "POST",
                    url: '/Home/LoadProjectUnits',
                    data: { projectID: projectId },
                    success: function (response) {
                        var cont_html = "<option value=''>Select Unit Type</option>";
                        for (var i = 0; i < response.length; i++) {
                            var UType = jQuery.trim(response[i]);
                            cont_html += "<option value='" + UType + "'>" + UType + "</option>";
                        }
                        jQuery("#ProjectUnityType").html(cont_html);
                    },
                    error: function (xhr, textStatus, errorThrown) {
                        alert('Error!  Status = ' + xhr.status);
                    }
                });
            }
        }


    });
</script>

<style type="text/css">
.online_booking_form_container
{
    margin: auto;
    margin-top:10px;
    width: 740px;
}
.booking_head
{
    background:url("img/Content_panel_bg.jpg") repeat;
    text-align:center;
}
.booking_head h2
{
    margin:0px;
    padding:13px 0px;
    font-family: Arial,Helvetica,sans-serif;
    font-size: 17px;
    font-weight: normal;
    color:#fff;
}

.frm_container
{
    margin-top:30px;
    padding:0px 20px;
    background:#FBFBFC;
}
.frm_heading
{
    margin:0px;
    padding:10px 0px;
    font-family: Arial,Helvetica,sans-serif;
    font-size: 15px;
    font-weight: bold;
    color:#676767;
    text-transform:uppercase;
}
.frm_fields
{
    padding:0 0 20px;
    clear:both;
}

.filed_select{
    width:341px;
    padding:7px;
    border:1px solid #AAADB2;
    font-family: Arial,Helvetica,sans-serif;
}
.input_style{
    width:341px;
    padding:7px;
    border:1px solid #AAADB2;
    font-family: Arial,Helvetica,sans-serif;
}
.textarea_style
{
    width:341px;
    padding:7px;
    border:1px solid #AAADB2;
    resize:none;
    height:120px;
    font-size: 13px;
    font-family: Arial,Helvetica,sans-serif;
}
.fl_left{
    float:left;
}
.padr10{
    padding-right:15px;
}
.padbt10{
    padding-bottom:10px;
}
.span_required{
    color: red;
    display: block;
    text-align: right;
    font-size:14px;
}
.lblAgreement
{
    color:#2E3590;
    font-size:16px;
    font-family: Arial,Helvetica,sans-serif;
}
.lblAgreement a
{
    color:#2E3590;
}
.btn_onlinebook
{
    color:#fff;
    text-transform:uppercase;
    background:#2A3666;
    padding:15px 0px;
    text-align:center;
    font-size:16px;
    font-weight:normal;
    width:100%;
    font-family: Arial,Helvetica,sans-serif;
    -webkit-border-radius: 6px; 

  /* Firefox 1-3.6 */
  -moz-border-radius: 6px; 
  
  /* Opera 10.5, IE 9, Safari 5, Chrome, Firefox 4, iOS 4, Android 2.1+ */
  border-radius: 6px; 
}
.full_width_content{
    height:auto !important;
}
</style>   


</div>
</div>


@stop

@section('scripts')
    <script>
        $('.checkbox').click(function () {
            console.log(this.checked);
        });
    </script>
@stop
