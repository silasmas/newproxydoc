@extends('templates.templateCl')
@section('title', 'dashboard')
@section('autreStyle')
  <link rel="stylesheet" href="{{ asset('assets/client/css/styleLoader.css') }}">
@endsection

@section('content')
<main class="main-content">
   @livewire("cl-pharmacie")
  </main>

@endsection

@section('autreScript')
   
   
@endsection
