@extends('templates.template')
@section('title', 'Pharmacie')
@section("page2","Details du produit")
@section("parent")
<li>
    <a href="{{ route('pharmacie') }}">Pharmacie</a>
</li>
@endsection
@section('autreStyle')
<link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/jquery.datetimepicker.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/parsley/parsley.css') }}">

@endsection
@section('content')
@include('parties.banner')
@livewire("detail-produit")
@endsection
@section('autreScript')
<script src="{{ asset('assets/js/select2.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.datetimepicker.full.min.js') }}"></script>
<script src="{{ asset('assets/parsley/js/parsley.js') }}"></script>
<script src="{{ asset('assets/parsley/i18n/fr.js') }}"></script>

<script type="text/javascript">
   
</script>
@endsection