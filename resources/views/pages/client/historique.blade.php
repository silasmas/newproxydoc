@extends('templates.templateCl')
@section('title', 'dashboard')
@section('autreStyle')
    <link href="{{ asset('js/sweetalert/sweetalert.css') }}" rel="stylesheet">
@endsection

@section('content')
<main class="main-content">
    @livewire("cl-historique")
   </main>
@endsection

@section('autreScript')


@endsection
