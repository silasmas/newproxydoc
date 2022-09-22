@extends('templates.template')

@section('title', 'Panier')
@section('page', 'Mon Panier')
@section('autreStyle')
<link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/jquery.datetimepicker.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/parsley/parsley.css') }}">

@endsection
@section('content')
@include('parties.banner')

@livewire("monpaniers")

@endsection

