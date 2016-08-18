@extends('base')

@section('head')
<link rel="stylesheet" href="{{ asset('css/remodal.css') }}">
<link rel="stylesheet" href="{{ asset('css/remodal-default-theme.css') }}">
<link href="//cdn.datatables.net/1.10.6/css/jquery.dataTables.css" rel="stylesheet">
<script src="//cdn.datatables.net/1.10.6/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('js/remodal.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $.fn.dataTable.ext.search.push(
            function( settings, data, dataIndex ) {
                var tower = $('.tower-select').val();

                var flat_id = data[0].substr(0,2); // current row flat_id
                switch (tower) {
                    case "0":
                        return true;
                    default:
                        if (flat_id == tower)
                            return true;
                        break;
                }

                return false;
            }
        );


        var dtable = $('#flats_table').DataTable({
            "bProcessing": true,
            "bSort": false,
            "bPaginate": false,
            "dom": '<"toolbar">frtip',
            'bAutoWidth': false , 
            "oLanguage": { "sSearch": "" , "sSearchPlaceholder": "Search"},
            'aoColumns' : [
                { 'sWidth': '65px' },
                { 'sWidth': '110px' },
                { 'sWidth': '90px' },
                { 'sWidth': '80px' },
                { 'sWidth': '90px' },
                { 'sWidth': '125px' },
                { 'sWidth': '100px' },
                { 'sWidth': 'auto' },
                { 'sWidth': '200px' }
            ]
        });
        //$("#flats_table tbody").on( 'click', 'tr', function() {
            //window.document.location = $(this).data("href");
        //});

        $("div.toolbar").html('Show <select class="tower-select"><option value="0">All</option><option value="1A">Tower 1A</option><option value="1B">Tower 1B</option><option value="1C">Tower 1C</option><option value="2A">Tower 2A</option><option value="2B">Tower 2B</option><option value="2C">Tower 2C</option></select>');

        dtable.draw();

        $('.tower-select').change(function() {
            dtable.draw();
        })
    });
</script>
@stop

@section('header')
    @include('header', ['page_id' => 1])
@stop

@section('content')

    @if (empty($flats))
        <p>No Flats Added yet</p>
    @else
        <table id="flats_table" class="flats_table">
            <thead>
            <tr>
                <th>Flat ID</th>
                <th>Availability</th> 
                <th>Floor No</th>
                <th>Area</th> 
                <th>Type</th> 
                <th>Category</th> 
                <th>Basic Rate</th> 
                <th>Total</th> 
                <th>Booked By</th> 
            </tr>
            </thead>
            <tbody>
            @foreach ($flats as $flat)
                <tr class="clickable-row" data-href="{{ url('/admin/flat/' . $flat->flat_id) }}">
                    <td><a href="{{ url('/admin/flat/'.$flat->flat_id) }}">{{ $flat->flat_id }}</a></td>
                    <td>{{ $flat->availability }}</td>
                    <td>{{ substr($flat->flat_id, strpos($flat->flat_id, '-') + 1, -2) }}</td>
                    <td>{{ $flat->area }}sqft</td>
                    <td>{{ $flat->type }}</td>
                    <td>{{ $flat->category }}</td>
                    <td>INR {{ intval($flat->basic_rate) }}</td>
                    <td>INR {{ intval($flat->grand_total) }}</td>
                    @if (empty($flat->booking()))
                    <td><a class="user-details" href="#modal" data-flat="{{ $flat->flat_id }}" data-name="{{ $flat->booked_user_name }}" data-mail="{{ $flat->booked_user_mail }}" data-mobile="{{ $flat->booked_user_mobile }}" data-address="{{ $flat->booked_user_address }}" data-relmanager="" data-heardsource="" data-panno="" data-bookedon="" data-coapplicant="" data-amount="">{{ $flat->booked_user_name }}</a></td>
                    @else
                    <?php $booking = $flat->booking()->first() ?>
                    <td><a class="user-details" href="#modal" data-flat="{{ $flat->flat_id }}" data-name="{{ $flat->booked_user_name }}" data-mail="{{ $flat->booked_user_mail }}" data-mobile="{{ $flat->booked_user_mobile }}" data-address="{{ $flat->booked_user_address }}" data-relmanager="{{ $booking->rel_manager }}" data-heardsource=" {{ $booking->heard_src }}" data-panno=" {{ $booking->panno }}" data-bookedon="{{ $booking->created_at }}" data-coapplicant="{{ $booking->coapplicant }}" data-amount="{{ $booking->amount }}">{{ $flat->booked_user_name }}</a></td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif

@stop

@section('scripts')
<div class="remodal" data-remodal-id="modal">
  <h1></h1>
  <div class="user-details clearfix">
    <div class="clearfix">
        <div class="ulabel">Name :</div>
        <div class="udata"><p class="name"><span></span></p></div>
    </div>
    <div class="clearfix">
        <div class="ulabel">Flat :</div>
        <div class="udata"><p class="flat"><span></span></p></div>
    </div>
    <div class="clearfix">
        <div class="ulabel">Mobile :</div>
        <div class="udata"><p class="mobile"><span></span></p></div>
    </div>
    <div class="clearfix">
        <div class="ulabel">Email :</div>
        <div class="udata"><p class="mail"><span></span></p></div>
    </div>
    <div class="clearfix">
        <div class="ulabel">Address :</div>
        <div class="udata"><p class="addr"><span></span></p></div>
    </div>
    <div class="clearfix">
        <div class="ulabel">PAN No :</div>
        <div class="udata"><p class="pan"><span></span></p></div>
    </div>
    <div class="clearfix">
        <div class="ulabel">Relationship Manager :</div>
        <div class="udata"><p class="relmng"><span></span></p></div>
    </div>
    <div class="clearfix">
        <div class="ulabel">Heard From :</div>
        <div class="udata"><p class="hrd"><span></span></p></div>
    </div>
    <div class="clearfix">
        <div class="ulabel">CoApplicant Name :</div>
        <div class="udata"><p class="coappl"><span></span></p></div>
    </div>
    <div class="clearfix">
        <div class="ulabel">Booked On :</div>
        <div class="udata"><p class="bookedon"><span></span></p></div>
    </div>
    <div class="clearfix">
        <div class="ulabel">Booking Amount :</div>
        <div class="udata"><p class="amt"><span></span></p></div>
    </div>
  </div>
  <br>
  <div>
  <button data-remodal-action="confirm" class="btn btn1">OK</button>
  </div>
</div>

<script>
    $(document).ready(function() {
        $('.user-details').click(function() {
            $('.remodal h1').html("Details of " +$(this).data('name'));
            $('.remodal .name span').html($(this).data('name'));
            $('.remodal .flat span').html($(this).data('flat'));
            $('.remodal .mobile span').html($(this).data('mobile'));
            $('.remodal .mail span').html($(this).data('mail'));
            $('.remodal .addr span').html($(this).data('address'));
            $('.remodal .pan span').html($(this).data('panno'));
            $('.remodal .relmng span').html($(this).data('relmanager'));
            $('.remodal .hrd span').html($(this).data('heardsource'));
            $('.remodal .coappl span').html($(this).data('coapplicant'));
            $('.remodal .bookedon span').html($(this).data('bookedon'));
            $('.remodal .amt span').html($(this).data('amount'));
        });
    });
</script>
@stop
