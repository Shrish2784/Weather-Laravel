@extends('base')

@section('title')
    Weather
@endsection

@section('content')
    <div>
        <form action="/getWeather" method="get" id="cityForm">
            <input type="text" name="city" id="cityInput">
        </form>
    </div>
@endsection

@section('script')
    <script src="<?php echo asset("js/main.js") ?>"></script>
@endsection
