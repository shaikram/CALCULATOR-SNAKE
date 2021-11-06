@extends('layout.app')
@section('title')
Calculator App
@endsection
@section('links')
  @include('inc/links')
  <link rel="stylesheet" href={{ asset("css/calcu/m.style.css") }} type="text/css">
  <link rel="stylesheet" href={{ asset("css/calcu/i.style.css") }} type="text/css">
  <link rel="stylesheet" href={{ asset("css/calcu/d.style.css") }} type="text/css">
@endsection
@section('content')
  @include('inc/calcu')
@endsection
@section('scripts')
  @include('inc/script')
  <script type="text/javascript" src="{{ asset("lib/calcu.js") }}"></script>
@endsection
