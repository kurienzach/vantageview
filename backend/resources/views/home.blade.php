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


    <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/form') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <label class="col-md-4 control-label">Flat ID</label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn1 btn-primary">
                    Edit
                </button>
            </div>
        </div>
    </form>

    </div>
</div>
@stop

