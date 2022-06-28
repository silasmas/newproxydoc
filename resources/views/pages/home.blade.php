@extends('templates.template')
@section('title', 'Accueil')
@section('autreStyle')
    <link href="{{ asset('js/sweetalert/sweetalert.css') }}" rel="stylesheet">
@endsection

@section('content')
    <!-- Slider Area Start Here -->
    <div class="slider-area slider-layout2 bg-light-primary100 slider-top-margin2">
        <div class="bend niceties preview-1">
            <div id="ensign-nivoslider-1" class="slides">
                <img src="{{ asset('assets/img/slider/slide1-1.jpg') }}" alt="slider" title="#slider-direction-1" />
                <img src="{{ asset('assets/img/slider/slide1-2.jpg') }}" alt="slider" title="#slider-direction-2" />
                <img src="{{ asset('assets/img/slider/slide1-3.jpg') }}" alt="slider" title="#slider-direction-3" />
            </div>
            {{-- <div id="slider-direction-1" class="t-cn slider-direction">
                <div class="slider-content s-tb slide-1">
                    <div class="container">
                        <div class="text-box">
                            <div class="slider-big-text">We are providing total<span> healthcare solutions.</span></div>
                            <p class="slider-paragraph">Mimply dummy text of the printing and type settin age
                                ipsum dolor sit amet, consecte tur adipiscing pitaeir ding total healthcare
                                solutions.
                            </p>
                            <div class="slider-btn-area">
                                <a href="#" class="item-btn">READ MORE<i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div id="slider-direction-1" class="t-cn slider-direction">
                <div class="slider-content s-tb slide-1">
                    <div class="text-left title-container s-tb-c">
                        <div class="container">
                            <div class="text-box">
                                <div class="slider-big-text">We are providing total<span> healthcare solutions.</span></div>
                                <p class="slider-paragraph">Mimply dummy text of the printing and type settin age
                                    ipsum dolor sit amet, consecte tur adipiscing pitaeir ding total healthcare
                                    solutions.
                                </p>
                                <div class="slider-btn-area">
                                    <a href="#" class="item-btn">READ MORE<i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="slider-direction-2" class="t-cn slider-direction">
                <div class="slider-content s-tb slide-2">
                    <div class="text-left title-container s-tb-c">
                        <div class="container">
                            <div class="text-box">
                                <div class="slider-big-text">We are providing total<span> healthcare solutions.</span></div>
                                <p class="slider-paragraph">Mimply dummy text of the printing and type settin age
                                    ipsum dolor sit amet, consecte tur adipiscing pitaeir ding total healthcare
                                    solutions.
                                </p>
                                <div class="slider-btn-area">
                                    <a href="#" class="item-btn">READ MORE<i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="slider-direction-3" class="t-cn slider-direction">
                <div class="slider-content s-tb slide-3">
                    <div class="text-left title-container s-tb-c">
                        <div class="container">
                            <div class="text-box">
                                <div class="slider-big-text">We are providing total<span> healthcare solutions.</span></div>
                                <p class="slider-paragraph">Mimply dummy text of the printing and type settin age
                                    ipsum dolor sit amet, consecte tur adipiscing pitaeir ding total healthcare
                                    solutions.
                                </p>
                                <div class="slider-btn-area">
                                    <a href="#" class="item-btn">READ MORE<i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Area End Here -->
    <section class="call-to-action-wrap-layout3">
        <div class="container">
            <div class="row">
                @forelse ($abonnement as $ab)
                @foreach ($ab as $a)
                <div class="col-lg-3 col-12">
                    <div class="call-to-action-box-layout3">
                        <div class="single-item">
                            <a href="{{ route('createAbonnement',['id'=>$a->id])}}">
                                {{ $a->monaie=="USD"?"$":"FC" }}{{  $a->prix }}
                                {{ $a->nom }}
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
                @empty
                    
                @endforelse
                {{-- <div class="col-lg-3 col-12">
                    <div class="call-to-action-box-layout3">
                        <div class="single-item">
                            <a href="appointment.html">Find Locations</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="call-to-action-box-layout3">
                        <div class="single-item">
                            <a href="appointment.html"> Request Appoinment</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="call-to-action-box-layout3">
                        <div class="single-item">
                            <a href="appointment.html"> Request Appoinment</a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    <!-- About Area Start Here -->
    {{-- <section class="about-wrap-layout1" data-bg-image="{{ asset('assets/img/slider/figure7.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="about-box-layout1 order-xl-2 col-xl-5 col-12">
                    <div class="item-content">
                        <h2 class="item-title">Bienvenue chez {{ config('app.name') }}.</h2>
                        <div class="sub-title">
                            Connecter pour une meilleure santé 
                        </div>
                        <p>
                            L’entreprise ProxyDoc s’assigne comme objectif de rendre 
                            les services médicaux à la population au travers des moyens 
                            de nouvelles technologies de l’information et de communication (NTIC).
                        </p>
                        <img src="{{ asset('assets/img/slider/sign1.png') }}" alt="sign" class="img-fluid">
                    </div>
                </div>
                <div class="about-box-layout2 order-xl-3 col-xl-4 col-lg-7 col-12">
                    <ul>
                        <li><a href='' onclick="info('rdv')"><i class="far fa-calendar-alt"></i>Prendre un rendez-vous</a>
                        </li>
                        <li><a href='' onclick="info('pdoc')"><i class="far fa-user"></i>Parlez au docteur</a></li>
                        <li><a href='' onclick="info('contact')"><i class="fas fa-map-marker-alt"></i>Nous contacter</a>
                        </li>
                        <li><a href='' onclick="info('urgence')"><i class="fas fa-phone"></i>Service d'urgence</a></li>
                    </ul>
                </div>
                <div class="about-box-layout2 order-xl-1 col-xl-3 col-lg-5 col-12">
                    <div class="item-img">
                        <img src="{{ asset('assets/img/slider/about1.png') }}" alt="about" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- About Area End Here -->

    <section class="about-wrap-layout2">
        <div class="container">
            <div class="row">
                <div class="about-box-layout6 col-lg-6">
                    <h1 class="item-title">Bienvenue chez
                        <span>{{ config('app.name') }}</span>.</h1>
                    <div class="sub-title">
                        Connecter pour une meilleure santé 
                    </div>
                        <p>
                            L’entreprise ProxyDoc s’assigne comme objectif de rendre 
                            les services médicaux à la population au travers des moyens 
                            de nouvelles technologies de l’information et de communication (NTIC).
                        </p>
                    {{-- <img src="img/about/sign1.png" alt="sign" class="img-fluid"> --}}
                </div>
                <div class="about-box-layout7 col-lg-6">
                    <div class="item-video">
                        <img src="{{ asset('assets/img/about3.png') }}" alt="about">
                        <a class="play-btn popup-youtube" href="http://www.youtube.com/watch?v=1iIZeIy7TqM">
                            <i class="flaticon-play-button"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- debut Section des services -->
    @include('parties.service')
    <!-- Fin section service -->

    <!-- Featured Area Start Here -->
    {{-- <section class="features-wrap-layout1">
        <div class="features-box-layout1 d-lg-flex bg-primary100">
            <div class="item-inner-wrapper">
                <div class="item-content d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="item-content-inner content-light">
                                    <h2 class="item-title">Choose the best for your health</h2>
                                    <p>Dwisi enim ad minim veniam, quis laore nostrud exerci tation ulm hedi corper
                                        turet suscipit lobortis.</p>
                                    <ul class="list-item">
                                        <li>Free Consultation</li>
                                        <li>Quality Doctors</li>
                                        <li>Professional Experts</li>
                                        <li>Affordable Price</li>
                                        <li>24/7 Opened</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item-inner-wrapper">
                <img src="{{ asset('assets/img/slider/figure8.jpg') }}" style="height: 600px;" class="img-responsive"
                    alt="figure">
            </div>
        </div>
        <div class="features-box-layout1 d-lg-flex flex-lg-row-reverse">
            <div class="item-inner-wrapper">
                <div class="item-content d-flex align-items-center">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-6 col-sm-12 col-12">
                                <div class="item-content-inner inner-title-dark">
                                    <h2 class="item-title">We are the trusted experts things simple</h2>
                                    <p>Dwisi enim ad minim veniam, quis laore nostrud exerci tation area ulm hedi
                                        corper turet suscipit lobortis nisl ut aliquip erat volutpat autem vel eum
                                        iriure dolor in hendrerit in vulputate.
                                    </p>
                                    <div class="skill-layout1">
                                        <div class="progress">
                                            <div class="lead">Efficency</div>
                                            <div style="width: 80%; visibility: visible; animation-duration: 1.5s; animation-delay: 0.4s;"
                                                data-progress="95%"
                                                class="progress-bar progress-bar-striped wow fadeInLeft animated">
                                                <span>80%</span>
                                            </div>
                                        </div>
                                        <div class="progress">
                                            <div class="lead">Experience</div>
                                            <div style="width: 95%; visibility: visible; animation-duration: 1.5s; animation-delay: 0.6s;"
                                                data-progress="85%"
                                                class="progress-bar progress-bar-striped wow fadeInLeft animated">
                                                <span>95%</span>
                                            </div>
                                        </div>
                                        <div class="progress">
                                            <div class="lead">Experience</div>
                                            <div style="width: 75%; visibility: visible; animation-duration: 1.5s; animation-delay: 0.8s;"
                                                data-progress="99%"
                                                class="progress-bar progress-bar-striped wow fadeInLeft animated">
                                                <span>75%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item-inner-wrapper">
                <img src="{{ asset('assets/img/slider/team.jpg') }}" class="img-responsive" alt="figure">
            </div>
        </div>
    </section> --}}
    <!-- Featured Area End Here -->
    <!-- Brand Area Start Here -->
    <section class="brand-wrap-layout1 bg-primary100">
        <div class="container">
            <div class="row">
                <div class="brand-box-layout1 col-xl-7 col-lg-6 col-md-12 col-12">
                    <h2 class="item-title">We Are Certified Award Winning Hospital.</h2>
                </div>
                <div class="brand-box-layout2 col-xl-5 col-lg-6 col-md-12 col-12">
                    <img src="{{ asset('assets/img/slider/brand-bg1.png') }}" alt="brand"
                        class="img-fluid d-none d-lg-block">
                    <ul>
                        <li>
                            <img src="{{ asset('assets/img/slider/brand1.png') }}" alt="brand" class="img-fluid">
                        </li>
                        <li>
                            <img src="{{ asset('assets/img/slider/brand2.png') }}" alt="brand" class="img-fluid">
                        </li>
                        <li>
                            <img src="{{ asset('assets/img/slider/brand3.png') }}" alt="brand" class="img-fluid">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Brand Area End Here -->
    <!-- Team Area Start Here -->
    <section class="team-wrap-layout1 bg-light-secondary100">
        <img class="left-img img-fluid" src="{{ asset('assets/img/slider/figure4.png') }}" alt="figure">
        <img class="right-img img-fluid" src="{{ asset('assets/img/slider/figure5.png') }}" alt="figure">
        <div class="container">
            <div class="text-left section-heading heading-dark heading-layout1">
                <h2>Specialist Doctors</h2>
                <p>Experienced Doctor</p>
                <div id="owl-nav2" class="owl-nav-layout1">
                    <span class="rt-prev">
                        <i class="fas fa-chevron-left"></i>
                    </span>
                    <span class="rt-next">
                        <i class="fas fa-chevron-right"></i>
                    </span>
                </div>
            </div>
            <div class="rc-carousel nav-control-layout2" data-loop="true" data-items="4" data-margin="30"
                data-autoplay="false" data-autoplay-timeout="5000" data-custom-nav="#owl-nav2" data-smart-speed="2000"
                data-dots="false" data-nav="false" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true"
                data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="false" data-r-x-medium-dots="false"
                data-r-small="2" data-r-small-nav="false" data-r-small-dots="false" data-r-medium="3"
                data-r-medium-nav="false" data-r-medium-dots="false" data-r-large="3" data-r-large-nav="false"
                data-r-large-dots="false" data-r-extra-large="4" data-r-extra-large-nav="false"
                data-r-extra-large-dots="false">
                <div class="team-box-layout2">
                    <div class="item-img">
                        <img src="{{ asset('assets/img/slider/dr1.jpg') }}" alt="Team1"
                            class="img-fluid rounded-circle">
                        <ul class="item-icon">
                            <li>
                                <a href="single-doctor.html">
                                    <i class="fas fa-plus"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="item-content">
                        <h3 class="item-title">
                            <a href="single-doctor.html">Dr. Zinia Zara</a>
                        </h3>
                        <p>Gynaecology</p>
                    </div>
                    <div class="item-schedule">
                        <ul>
                            <li>Mon - Tues
                                <span>08.00 :17.00</span>
                            </li>
                            <li>Fri - Sat
                                <span>09.00 :12.00</span>
                            </li>
                            <li>Sun - Mon
                                <span>08.00 :17.00</span>
                            </li>
                        </ul>
                        <a href="single-doctor.html" class="item-btn">MAKE AN APPOINTMENT</a>
                    </div>
                </div>
                <div class="team-box-layout2">
                    <div class="item-img">
                        <img src="{{ asset('assets/img/slider/dr2.png') }}" alt="Team1"
                            class="img-fluid rounded-circle">
                        <ul class="item-icon">
                            <li>
                                <a href="single-doctor.html">
                                    <i class="fas fa-plus"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="item-content">
                        <h3 class="item-title">
                            <a href="single-doctor.html">Dr. Nadim Kamal</a>
                        </h3>
                        <p>Orthopaedics</p>
                    </div>
                    <div class="item-schedule">
                        <ul>
                            <li>Mon - Tues
                                <span>08.00 :17.00</span>
                            </li>
                            <li>Fri - Sat
                                <span>09.00 :12.00</span>
                            </li>
                            <li>Sun - Mon
                                <span>08.00 :17.00</span>
                            </li>
                        </ul>
                        <a href="single-doctor.html" class="item-btn">MAKE AN APPOINTMENT</a>
                    </div>
                </div>
                <div class="team-box-layout2">
                    <div class="item-img">
                        <img src="{{ asset('assets/img/slider/dr3.png') }}" alt="Team1"
                            class="img-fluid rounded-circle">
                        <ul class="item-icon">
                            <li>
                                <a href="single-doctor.html">
                                    <i class="fas fa-plus"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="item-content">
                        <h3 class="item-title">
                            <a href="single-doctor.html">Dr. Rihana Roy</a>
                        </h3>
                        <p>Lense Expert</p>
                    </div>
                    <div class="item-schedule">
                        <ul>
                            <li>Mon - Tues
                                <span>08.00 :17.00</span>
                            </li>
                            <li>Fri - Sat
                                <span>09.00 :12.00</span>
                            </li>
                            <li>Sun - Mon
                                <span>08.00 :17.00</span>
                            </li>
                        </ul>
                        <a href="single-doctor.html" class="item-btn">MAKE AN APPOINTMENT</a>
                    </div>
                </div>
                <div class="team-box-layout2">
                    <div class="item-img">
                        <img src="{{ asset('assets/img/slider/team36.png') }}" alt="Team1"
                            class="img-fluid rounded-circle">
                        <ul class="item-icon">
                            <li>
                                <a href="single-doctor.html">
                                    <i class="fas fa-plus"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="item-content">
                        <h3 class="item-title">
                            <a href="single-doctor.html">Dr. Steven Roy</a>
                        </h3>
                        <p>Cardiology</p>
                    </div>
                    <div class="item-schedule">
                        <ul>
                            <li>Mon - Tues
                                <span>08.00 :17.00</span>
                            </li>
                            <li>Fri - Sat
                                <span>09.00 :12.00</span>
                            </li>
                            <li>Sun - Mon
                                <span>08.00 :17.00</span>
                            </li>
                        </ul>
                        <a href="single-doctor.html" class="item-btn">MAKE AN APPOINTMENT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Area End Here -->
    <!-- Schedule Area Start Here -->
    {{-- <section class="class-schedule1">
        <div class="container">
            <div class="text-center section-heading heading-dark heading-layout1">
                <h2>Specialist Doctors</h2>
                <p>Experienced Doctor</p>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="class-schedule-wrap1">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="schedule-time-heading">Time</div>
                                        </th>
                                        <td>
                                            <div class="schedule-day-heading">Monday</div>
                                        </td>
                                        <td>
                                            <div class="schedule-day-heading">Tuesday</div>
                                        </td>
                                        <td>
                                            <div class="schedule-day-heading">Wednesday</div>
                                        </td>
                                        <td>
                                            <div class="schedule-day-heading">Thursday</div>
                                        </td>
                                        <td>
                                            <div class="schedule-day-heading">Friday</div>
                                        </td>
                                        <td>
                                            <div class="schedule-day-heading">Saturday</div>
                                        </td>
                                        <td>
                                            <div class="schedule-day-heading">Sunday</div>
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <div class="schedule-time-wrapper">08.00am</div>
                                        </th>
                                        <td>
                                            <div class="schedule-item-wrapper">
                                                <div class="media">
                                                    <div class="item-img">
                                                        <img src="img/team/team7.png" alt="team"
                                                            class="img-fluid rounded-circle">
                                                    </div>
                                                    <div class="media-body">
                                                        <h3 class="title">Steven Smith</h3>
                                                        <div class="item-ctg">Contact Lens</div>
                                                        <a href="single-details.html"
                                                            class="item-btn btn-fill size-xs radius-4">View
                                                            Profile</a>
                                                    </div>
                                                </div>
                                                <div class="item-ctg">Contact Lens</div>
                                                <div class="item-time">08.00am - 09.00am</div>
                                                <div class="item-team">Dr.Mike Hussy</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="schedule-item-wrapper">
                                                <div class="media">
                                                    <div class="item-img">
                                                        <img src="img/team/team7.png" alt="team"
                                                            class="img-fluid rounded-circle">
                                                    </div>
                                                    <div class="media-body">
                                                        <h3 class="title">Steven Smith</h3>
                                                        <div class="item-ctg">Contact Lens</div>
                                                        <a href="single-details.html"
                                                            class="item-btn btn-fill size-xs radius-4">View
                                                            Profile</a>
                                                    </div>
                                                </div>
                                                <div class="item-ctg">Contact Lens</div>
                                                <div class="item-time">08.00am - 09.00am</div>
                                                <div class="item-team">Dr.Mike Hussy</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="schedule-item-wrapper">

                                            </div>
                                        </td>
                                        <td>
                                            <div class="schedule-item-wrapper">
                                                <div class="media">
                                                    <div class="item-img">
                                                        <img src="img/team/team7.png" alt="team"
                                                            class="img-fluid rounded-circle">
                                                    </div>
                                                    <div class="media-body">
                                                        <h3 class="title">Steven Smith</h3>
                                                        <div class="item-ctg">Contact Lens</div>
                                                        <a href="single-details.html"
                                                            class="item-btn btn-fill size-xs radius-4">View
                                                            Profile</a>
                                                    </div>
                                                </div>
                                                <div class="item-ctg">Contact Lens</div>
                                                <div class="item-time">08.00am - 09.00am</div>
                                                <div class="item-team">Dr.Mike Hussy</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="schedule-item-wrapper">
                                                <div class="media">
                                                    <div class="item-img">
                                                        <img src="img/team/team7.png" alt="team"
                                                            class="img-fluid rounded-circle">
                                                    </div>
                                                    <div class="media-body">
                                                        <h3 class="title">Steven Smith</h3>
                                                        <div class="item-ctg">Contact Lens</div>
                                                        <a href="single-details.html"
                                                            class="item-btn btn-fill size-xs radius-4">View
                                                            Profile</a>
                                                    </div>
                                                </div>
                                                <div class="item-ctg">Contact Lens</div>
                                                <div class="item-time">08.00am - 09.00am</div>
                                                <div class="item-team">Dr.Mike Hussy</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="schedule-item-wrapper">

                                            </div>
                                        </td>
                                        <td>
                                            <div class="schedule-item-wrapper">

                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="schedule-time-wrapper">10.00am</div>
                                        </th>
                                        <td>
                                            <div class="schedule-item-wrapper">
                                                <div class="media">
                                                    <div class="item-img">
                                                        <img src="img/team/team7.png" alt="team"
                                                            class="img-fluid rounded-circle">
                                                    </div>
                                                    <div class="media-body">
                                                        <h3 class="title">Steven Smith</h3>
                                                        <div class="item-ctg">Contact Lens</div>
                                                        <a href="single-details.html"
                                                            class="item-btn btn-fill size-xs radius-4">View
                                                            Profile</a>
                                                    </div>
                                                </div>
                                                <div class="item-ctg">Contact Lens</div>
                                                <div class="item-time">08.00am - 09.00am</div>
                                                <div class="item-team">Dr.Mike Hussy</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="schedule-item-wrapper">

                                            </div>
                                        </td>
                                        <td>

                                        </td>
                                        <td>
                                            <div class="schedule-item-wrapper">
                                                <div class="media">
                                                    <div class="item-img">
                                                        <img src="img/team/team7.png" alt="team"
                                                            class="img-fluid rounded-circle">
                                                    </div>
                                                    <div class="media-body">
                                                        <h3 class="title">Steven Smith</h3>
                                                        <div class="item-ctg">Contact Lens</div>
                                                        <a href="single-details.html"
                                                            class="item-btn btn-fill size-xs radius-4">View
                                                            Profile</a>
                                                    </div>
                                                </div>
                                                <div class="item-ctg">Contact Lens</div>
                                                <div class="item-time">08.00am - 09.00am</div>
                                                <div class="item-team">Dr.Mike Hussy</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="schedule-item-wrapper">

                                            </div>
                                        </td>
                                        <td>
                                            <div class="schedule-item-wrapper">

                                            </div>
                                        </td>
                                        <td>
                                            <div class="schedule-item-wrapper">
                                                <div class="media">
                                                    <div class="item-img">
                                                        <img src="img/team/team7.png" alt="team"
                                                            class="img-fluid rounded-circle">
                                                    </div>
                                                    <div class="media-body">
                                                        <h3 class="title">Steven Smith</h3>
                                                        <div class="item-ctg">Contact Lens</div>
                                                        <a href="single-details.html"
                                                            class="item-btn btn-fill size-xs radius-4">View
                                                            Profile</a>
                                                    </div>
                                                </div>
                                                <div class="item-ctg">Contact Lens</div>
                                                <div class="item-time">08.00am - 09.00am</div>
                                                <div class="item-team">Dr.Mike Hussy</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="schedule-time-wrapper">12.00pm</div>
                                        </th>
                                        <td>
                                            <div class="schedule-item-wrapper">

                                            </div>
                                        </td>
                                        <td>
                                            <div class="schedule-item-wrapper">
                                                <div class="media">
                                                    <div class="item-img">
                                                        <img src="img/team/team7.png" alt="team"
                                                            class="img-fluid rounded-circle">
                                                    </div>
                                                    <div class="media-body">
                                                        <h3 class="title">Steven Smith</h3>
                                                        <div class="item-ctg">Contact Lens</div>
                                                        <a href="single-details.html"
                                                            class="item-btn btn-fill size-xs radius-4">View
                                                            Profile</a>
                                                    </div>
                                                </div>
                                                <div class="item-ctg">Contact Lens</div>
                                                <div class="item-time">08.00am - 09.00am</div>
                                                <div class="item-team">Dr.Mike Hussy</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="schedule-item-wrapper">

                                            </div>
                                        </td>
                                        <td>
                                            <div class="schedule-item-wrapper">
                                                <div class="media">
                                                    <div class="item-img">
                                                        <img src="img/team/team7.png" alt="team"
                                                            class="img-fluid rounded-circle">
                                                    </div>
                                                    <div class="media-body">
                                                        <h3 class="title">Steven Smith</h3>
                                                        <div class="item-ctg">Contact Lens</div>
                                                        <a href="single-details.html"
                                                            class="item-btn btn-fill size-xs radius-4">View
                                                            Profile</a>
                                                    </div>
                                                </div>
                                                <div class="item-ctg">Contact Lens</div>
                                                <div class="item-time">08.00am - 09.00am</div>
                                                <div class="item-team">Dr.Mike Hussy</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="schedule-item-wrapper">
                                                <div class="media">
                                                    <div class="item-img">
                                                        <img src="img/team/team7.png" alt="team"
                                                            class="img-fluid rounded-circle">
                                                    </div>
                                                    <div class="media-body">
                                                        <h3 class="title">Steven Smith</h3>
                                                        <div class="item-ctg">Contact Lens</div>
                                                        <a href="single-details.html"
                                                            class="item-btn btn-fill size-xs radius-4">View
                                                            Profile</a>
                                                    </div>
                                                </div>
                                                <div class="item-ctg">Contact Lens</div>
                                                <div class="item-time">08.00am - 09.00am</div>
                                                <div class="item-team">Dr.Mike Hussy</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="schedule-item-wrapper">
                                                <div class="media">
                                                    <div class="item-img">
                                                        <img src="img/team/team7.png" alt="team"
                                                            class="img-fluid rounded-circle">
                                                    </div>
                                                    <div class="media-body">
                                                        <h3 class="title">Steven Smith</h3>
                                                        <div class="item-ctg">Contact Lens</div>
                                                        <a href="single-details.html"
                                                            class="item-btn btn-fill size-xs radius-4">View
                                                            Profile</a>
                                                    </div>
                                                </div>
                                                <div class="item-ctg">Contact Lens</div>
                                                <div class="item-time">08.00am - 09.00am</div>
                                                <div class="item-team">Dr.Mike Hussy</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="schedule-item-wrapper">

                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="schedule-time-wrapper">02.00pm</div>
                                        </th>
                                        <td>
                                            <div class="schedule-item-wrapper">

                                            </div>
                                        </td>
                                        <td>
                                            <div class="schedule-item-wrapper">

                                            </div>
                                        </td>
                                        <td>
                                            <div class="schedule-item-wrapper">
                                                <div class="media">
                                                    <div class="item-img">
                                                        <img src="img/team/team7.png" alt="team"
                                                            class="img-fluid rounded-circle">
                                                    </div>
                                                    <div class="media-body">
                                                        <h3 class="title">Steven Smith</h3>
                                                        <div class="item-ctg">Contact Lens</div>
                                                        <a href="single-details.html"
                                                            class="item-btn btn-fill size-xs radius-4">View
                                                            Profile</a>
                                                    </div>
                                                </div>
                                                <div class="item-ctg">Contact Lens</div>
                                                <div class="item-time">08.00am - 09.00am</div>
                                                <div class="item-team">Dr.Mike Hussy</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="schedule-item-wrapper">
                                                <div class="media">
                                                    <div class="item-img">
                                                        <img src="img/team/team7.png" alt="team"
                                                            class="img-fluid rounded-circle">
                                                    </div>
                                                    <div class="media-body">
                                                        <h3 class="title">Steven Smith</h3>
                                                        <div class="item-ctg">Contact Lens</div>
                                                        <a href="single-details.html"
                                                            class="item-btn btn-fill size-xs radius-4">View
                                                            Profile</a>
                                                    </div>
                                                </div>
                                                <div class="item-ctg">Contact Lens</div>
                                                <div class="item-time">08.00am - 09.00am</div>
                                                <div class="item-team">Dr.Mike Hussy</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="schedule-item-wrapper">

                                            </div>
                                        </td>
                                        <td>
                                            <div class="schedule-item-wrapper">

                                            </div>
                                        </td>
                                        <td>
                                            <div class="schedule-item-wrapper">
                                                <div class="media">
                                                    <div class="item-img">
                                                        <img src="img/team/team7.png" alt="team"
                                                            class="img-fluid rounded-circle">
                                                    </div>
                                                    <div class="media-body">
                                                        <h3 class="title">Steven Smith</h3>
                                                        <div class="item-ctg">Contact Lens</div>
                                                        <a href="single-details.html"
                                                            class="item-btn btn-fill size-xs radius-4">View
                                                            Profile</a>
                                                    </div>
                                                </div>
                                                <div class="item-ctg">Contact Lens</div>
                                                <div class="item-time">08.00am - 09.00am</div>
                                                <div class="item-team">Dr.Mike Hussy</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="schedule-time-wrapper">04.00pm</div>
                                        </th>
                                        <td>
                                            <div class="schedule-item-wrapper">

                                            </div>
                                        </td>
                                        <td>
                                            <div class="schedule-item-wrapper">

                                            </div>
                                        </td>
                                        <td>
                                            <div class="schedule-item-wrapper">
                                                <div class="media">
                                                    <div class="item-img">
                                                        <img src="img/team/team7.png" alt="team"
                                                            class="img-fluid rounded-circle">
                                                    </div>
                                                    <div class="media-body">
                                                        <h3 class="title">Steven Smith</h3>
                                                        <div class="item-ctg">Contact Lens</div>
                                                        <a href="single-details.html"
                                                            class="item-btn btn-fill size-xs radius-4">View
                                                            Profile</a>
                                                    </div>
                                                </div>
                                                <div class="item-ctg">Contact Lens</div>
                                                <div class="item-time">08.00am - 09.00am</div>
                                                <div class="item-team">Dr.Mike Hussy</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="schedule-item-wrapper">
                                                <div class="media">
                                                    <div class="item-img">
                                                        <img src="img/team/team7.png" alt="team"
                                                            class="img-fluid rounded-circle">
                                                    </div>
                                                    <div class="media-body">
                                                        <h3 class="title">Steven Smith</h3>
                                                        <div class="item-ctg">Contact Lens</div>
                                                        <a href="single-details.html"
                                                            class="item-btn btn-fill size-xs radius-4">View
                                                            Profile</a>
                                                    </div>
                                                </div>
                                                <div class="item-ctg">Contact Lens</div>
                                                <div class="item-time">08.00am - 09.00am</div>
                                                <div class="item-team">Dr.Mike Hussy</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="schedule-item-wrapper">

                                            </div>
                                        </td>
                                        <td>
                                            <div class="schedule-item-wrapper">

                                            </div>
                                        </td>
                                        <td>
                                            <div class="schedule-item-wrapper">
                                                <div class="media">
                                                    <div class="item-img">
                                                        <img src="img/team/team7.png" alt="team"
                                                            class="img-fluid rounded-circle">
                                                    </div>
                                                    <div class="media-body">
                                                        <h3 class="title">Steven Smith</h3>
                                                        <div class="item-ctg">Contact Lens</div>
                                                        <a href="single-details.html"
                                                            class="item-btn btn-fill size-xs radius-4">View
                                                            Profile</a>
                                                    </div>
                                                </div>
                                                <div class="item-ctg">Contact Lens</div>
                                                <div class="item-time">08.00am - 09.00am</div>
                                                <div class="item-team">Dr.Mike Hussy</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="schedule-time-wrapper">06.00pm</div>
                                        </th>
                                        <td>
                                            <div class="schedule-item-wrapper">
                                                <div class="media">
                                                    <div class="item-img">
                                                        <img src="img/team/team7.png" alt="team"
                                                            class="img-fluid rounded-circle">
                                                    </div>
                                                    <div class="media-body">
                                                        <h3 class="title">Steven Smith</h3>
                                                        <div class="item-ctg">Contact Lens</div>
                                                        <a href="single-details.html"
                                                            class="item-btn btn-fill size-xs radius-4">View
                                                            Profile</a>
                                                    </div>
                                                </div>
                                                <div class="item-ctg">Contact Lens</div>
                                                <div class="item-time">08.00am - 09.00am</div>
                                                <div class="item-team">Dr.Mike Hussy</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="schedule-item-wrapper">

                                            </div>
                                        </td>
                                        <td>
                                            <div class="schedule-item-wrapper">
                                                <div class="media">
                                                    <div class="item-img">
                                                        <img src="img/team/team7.png" alt="team"
                                                            class="img-fluid rounded-circle">
                                                    </div>
                                                    <div class="media-body">
                                                        <h3 class="title">Steven Smith</h3>
                                                        <div class="item-ctg">Contact Lens</div>
                                                        <a href="single-details.html"
                                                            class="item-btn btn-fill size-xs radius-4">View
                                                            Profile</a>
                                                    </div>
                                                </div>
                                                <div class="item-ctg">Contact Lens</div>
                                                <div class="item-time">08.00am - 09.00am</div>
                                                <div class="item-team">Dr.Mike Hussy</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="schedule-item-wrapper">

                                            </div>
                                        </td>
                                        <td>
                                            <div class="schedule-item-wrapper">
                                                <div class="media">
                                                    <div class="item-img">
                                                        <img src="img/team/team7.png" alt="team"
                                                            class="img-fluid rounded-circle">
                                                    </div>
                                                    <div class="media-body">
                                                        <h3 class="title">Steven Smith</h3>
                                                        <div class="item-ctg">Contact Lens</div>
                                                        <a href="single-details.html"
                                                            class="item-btn btn-fill size-xs radius-4">View
                                                            Profile</a>
                                                    </div>
                                                </div>
                                                <div class="item-ctg">Contact Lens</div>
                                                <div class="item-time">08.00am - 09.00am</div>
                                                <div class="item-team">Dr.Mike Hussy</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="schedule-item-wrapper">

                                            </div>
                                        </td>
                                        <td>
                                            <div class="schedule-item-wrapper">

                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Schedule Area End Here -->
    <!-- Banner Area Start Here -->
    <section class="banner-wrap-layout1 parallaxie" data-bg-image="{{ asset('assets/img/slider/slide4-3.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-8 col-md-10 col-12">
                    <div class="banner-box-layout1">
                        <h3 class="item-title">Pour les cas d'urgence </h3>
                        <h4 class="phone-number">ProxyGency</h4>
                        <p>
                            Construire un environnement
                            sain qui soutient le développement de la communauté.
                            Votre gestionnaire de cas personnel veillera à ce que vous receviez
                            les meilleurs soins possibles.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End Here -->
    @include('parties.abonnements')
    <!-- Call to Action Area Start Here -->
    {{-- <section class="call-to-action-wrap-layout4">
        <div class="item-img">
            <img src="{{ asset('assets/img/slider/figure7.png') }}" alt="figure" class="img-fluid">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-8 col-md-8 col-12">
                    <div class="call-to-action-box-layout4">
                        <h2 class="item-title">
                            Nous fournissons le plus haut niveau de soins et de services de satisfaction à nos patients.
                        </h2>
                        <div class="call-to-action-phone">
                            <a href="tel:+243 827839232><i class=" fas fa-phone"></i>+243 827839232</a>
                        </div>
                        <div class="call-to-action-btn">
                            <a href="#" onclick="info('contact')" class="item-btn">Nous contacter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Call to Action End Here -->
@endsection

@section('autreScript')
    <script src="{{ asset('js/sweetalert/sweetalert.min.js') }}"></script>
    <script type="text/javascript">
        function info(val) {
            event.preventDefault()
            switch (val) {
                case "rdv":
                    message('pour avoir un rendez-vous',
                        "Verifiez que vous êtes abonnez à ce service dans le menu (Mon compte->Mes abonnements) et prenez votre rendez-vous"
                        )
            break;
            case "pdoc":
            message('et discutez avec nos medecins',
                "Verifiez que vous êtes abonnez à ce service dans le menu (Mon compte->Mes abonnements) et parlez à un medecin"
                )
            break;
            case "contact":
            message(
                "Notre service client est disponible sur whatssapp en bas à droit du site",
                "Notre service client est disponible sur whatssapp en bas à droit du site")
            break;
            case "urgence":
            message('et soyez sécouru d\'urgence',
                "Verifiez que vous êtes abonnez à ce service dans le menu (Mon compte->Mes abonnements) et appelez nous au numéro d'urgence"
                )
            break;

        }
        }

        function message(text, txte) {
            var txt = " Abonnez à nos services et béneficierez de ce service, sinon connectez vous ";

            @auth
            swal({
                title: txte,
                icon: 'info'
            })
            @endauth
            @guest
            swal({
                title: txt+text,
                icon: 'info'
            })
            @endguest
        }
    </script>
@endsection
