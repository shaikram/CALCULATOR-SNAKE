@extends('layout.app')
@section('title')
Weather App
@endsection
@section('links')
  @include('inc/links')
  <link rel="stylesheet" href={{ asset("css/weather/m.style.css") }} type="text/css">
  <link rel="stylesheet" href={{ asset("css/weather/i.style.css") }} type="text/css">
  <link rel="stylesheet" href={{ asset("css/weather/d.style.css") }} type="text/css">
@endsection
@section('content')
  @include('inc/weather')
@endsection
@section('scripts')
  @include('inc/script')
  <script type="text/javascript" src="{{ asset("lib/weather.js") }}"></script>
@endsection
