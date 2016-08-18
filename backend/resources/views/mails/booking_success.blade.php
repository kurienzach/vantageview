<p>Dear {{ $booking->cust_name }},</p>
<p>Your booking of flat in {{ $booking->project()->first()->name }} by Provident Housing is successfull. Please find the booking details</p>
<p>Project Name : {{ $booking->project()->first()->name }}</p>
<p>Flat No : {{ $booking->flat_id }}</p>
<p>Amount Paid : {{ $booking->amount }}</p>