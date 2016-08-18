@extends('base')

@section('head')
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
@stop

@section('header')
    @include('header', ['page_id' => 2])
@stop

@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">

    <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/save') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <label class="col-md-4 control-label">Name</label>
            <div class="col-md-6">
                @if (!isset($flat_id)) 
                    <input type="text" class="form-control" name="flat_id" value="{{ old('name') }}">
                @else
                    <input type="text" class="form-control" name="flat_id" value="{{ $flat_id }}">
                @endif
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Availability</label>
            <div class="col-md-6">
                <select id="select-avail" name="availability" class="form-control">
                    <option select value="Available">Available</option>
                    <option select value="Sold">Sold</option>
                    <option select value="Not Opened">Not Opened</option>
                    <option select value="Mgmt">Mgmt</option>
                    <option select value="Blocked">Blocked</option>
                    <option select value="Mock Up Apt">Mock Up Apt</option>
                @if (isset($availability))
                <script>
                    document.getElementById('select-avail').value = "{{ $availability }}";
                </script>
                @endif
                </select>
            </div>
        </div>


        <div class="booking-details">
            <div class="form-group">
                <label class="col-md-4 control-label">Booked by</label>
                <div class="col-md-6">
                    @if (!isset($booked_user_name)) 
                        <input type="text" class="form-control" name="booked_user_name" value="{{ old('booked_user_name') }}">
                    @else
                        <input type="text" class="form-control" name="booked_user_name" value="{{ $booked_user_name }}">
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Booked email</label>
                <div class="col-md-6">
                    @if (!isset($booked_user_mail)) 
                        <input type="text" class="form-control" name="booked_user_mail" value="{{ old('booked_user_mail') }}">
                    @else
                        <input type="text" class="form-control" name="booked_user_mail" value="{{ $booked_user_mail }}">
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Booked mobile</label>
                <div class="col-md-6">
                    @if (!isset($booked_user_mobile)) 
                        <input type="text" class="form-control" name="booked_user_mobile" value="{{ old('booked_user_mobile') }}">
                    @else
                        <input type="text" class="form-control" name="booked_user_mobile" value="{{ $booked_user_mobile }}">
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Booked Address</label>
                <div class="col-md-6">
                    @if (!isset($booked_user_address)) 
                        <input type="text" class="form-control" name="booked_user_address" value="{{ old('booked_user_address') }}">
                    @else
                        <input type="text" class="form-control" name="booked_user_address" value="{{ $booked_user_address }}">
                    @endif
                </div>
            </div>
        </div>

        <script>
        if ($('#select-avail').val() == "Sold") {
            $('.booking-details').show();
        }
        else{
            $('.booking-details').hide();
        }

        $('#select-avail').change(function() {
            if ($(this).val() == "Sold") {
                $('.booking-details').show();
                $('.booking-details').find("input").prop('required', true);
            }
            else{
                $('.booking-details').hide();
                $('.booking-details').find("input").val('');
                $('.booking-details').find("input").prop('required', false);
            }
        })
        </script>

        <div class="form-group">
            <label class="col-md-4 control-label">Type</label>
            <div class="col-md-6">
                @if (!isset($type)) 
                    <input type="text" class="form-control" name="type" value="{{ old('type') }}">
                @else
                    <input type="text" class="form-control" name="type" value="{{ $type }}">
                @endif
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Basic Rate</label>
            <div class="col-md-6">
                @if (!isset($basic_rate)) 
                    <input type="text" class="form-control" name="basic_rate" value="{{ old('basic_rate') }}">
                @else
                    <input type="text" class="form-control" name="basic_rate" value="{{ $basic_rate }}">
                @endif
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Area</label>
            <div class="col-md-6">
                @if (!isset($area)) 
                    <input type="text" class="form-control" name="area" value="{{ old('area') }}">
                @else
                    <input type="text" class="form-control" name="area" value="{{ $area }}">
                @endif
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Category</label>
            <div class="col-md-6">
                @if (!isset($category)) 
                    <input type="text" class="form-control" name="category" value="{{ old('category') }}">
                @else
                    <input type="text" class="form-control" name="category" value="{{ $category }}">
                @endif
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Agreement Value</label>
            <div class="col-md-6">
                @if (!isset($agreement_value)) 
                    <input type="text" class="form-control" name="agreement_value" value="{{ old('agreement_value') }}">
                @else
                    <input type="text" class="form-control" name="agreement_value" value="{{ $agreement_value }}">
                @endif
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Other Charges</label>
            <div class="col-md-6">
                @if (!isset($other_charges)) 
                    <input type="text" class="form-control" name="other_charges" value="{{ old('other_charges') }}">
                @else
                    <input type="text" class="form-control" name="other_charges" value="{{ $other_charges }}">
                @endif
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Total</label>
            <div class="col-md-6">
                @if (!isset($grand_total)) 
                    <input type="text" class="form-control" name="grand_total" value="{{ old('grand_total') }}">
                @else
                    <input type="text" class="form-control" name="grand_total" value="{{ $grand_total }}">
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn1 btn-primary">
                    Save
                </button>
            </div>
        </div>
    </form>

    </div>
</div>
@stop

