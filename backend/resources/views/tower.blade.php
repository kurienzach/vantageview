@extends('base')

@section('header')
    @include('header', ['page_id' => 3])
@stop

<?php use Carbon\Carbon; ?>

@section('content')
    <div class="tower-holder clearfix">
        @foreach ($towers as $tower)
        <div class="tower-status">
            <h4>Tower {{ $tower->tower_id }}</h4>
            <div class="progress-bar">
                <div class="completed" style="width: {{ $tower->completed }}%"></div>
            </div>
            <form method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="id" value="{{ $tower->id }}">
                <textarea name="status">{{ $tower->status }}</textarea>
                <input type="text" name="completed" value="{{ $tower->completed }}">
                <button type="submit" class="btn btn1">Update</button>
            </form>
        </div>
        @endforeach
    </div>
@stop
