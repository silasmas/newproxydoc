
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }} | @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="MedicApp">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/logo/logo1.png') }}">
    @yield('autreStyle')
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/client/css/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/client/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/client/css/jquery.typeahead.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/client/css/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/client/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/client/css/Chart.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/client/css/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/client/css/leaflet.css') }}">
    <link href="{{ asset('js/sweetalert/sweetalert.css') }}" rel="stylesheet">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/style.css') }}">
    @livewireStyles()
    
  </head>


  <body class="vertical-layout boxed">
  <div class="app-loader main-loader">
    <div class="loader-box">
      <div class="bounceball"></div>
      <div class="text">Proxydoc<span>app</span></div>
    </div>
  </div>
  <!-- .main-loader -->
  <div class="page-box">
    <div class="app-container">
