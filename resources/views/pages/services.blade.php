@extends('templates.template')
@section("title","Nos services")
@section("page","Service")

@section('content')
@include("parties.banner")
<!-- debut Section des services -->
@include("parties.service")
<!-- Fin section service -->

@endsection