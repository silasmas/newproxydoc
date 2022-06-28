@extends('templates.template',['titre'=>"Home dev"])
@section("title","Nos docteurs")
@section("page","Médecins")
@section('content')
@include("parties.banner")
<!-- All Doctors Start Here -->
<section class="team-wrap-layout2 bg-light-accent100">
    <div class="container">
        <div class="text-center section-heading heading-dark heading-layout4">
            <h2>Trouver un médecin</h2>
            <p>Notre outil de recherche de médecin vous aide à choisir parmi nos diverses
                pool de spécialistes de la santé.</p>
        </div>
        <div class="isotope-wrap">
            <div class="text-center">
                <div class="isotope-classes-tab isotop-btn">
                    <a href="#" class="current nav-item" data-filter="*">All</a>
                    <a href="#" class="nav-item" data-filter=".dental">Dental</a>
                    <a href="#" class="nav-item" data-filter=".gynaecology">Gynaecology</a>
                    <a href="#" class="nav-item" data-filter=".eye">Eye</a>
                    <a href="#" class="nav-item" data-filter=".cardiology">Cardiology</a>
                    <a href="#" class="nav-item" data-filter=".orthopaedics">Orthopaedics</a>
                    <a href="#" class="nav-item" data-filter=".gastroenterology">Gastroenterology</a>
                    <a href="#" class="nav-item" data-filter=".neurology">Neurology</a>
                    <a href="#" class="nav-item" data-filter=".medicine">Medicine</a>
                </div>
            </div>
            <div class="row featuredContainer" id="no-equal-gallery">
                <div class="no-equal-item col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 gastroenterology neurology">
                    <div class="team-box-layout2">
                        <div class="item-img">
                            <img src="{{ asset('assets/img/slider/team8.png') }}" alt="Team1" class="img-fluid rounded-circle">
                            <ul class="item-icon">
                                <li><a href="{{ route('detailDocteur') }}"><i class="fas fa-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="item-content">
                            <h3 class="item-title"><a href="{{ route('detailDocteur') }}">Dr. Zinia Zara</a></h3>
                            <p>Gynaecology</p>
                        </div>
                        <div class="item-schedule">
                            <ul>
                                <li>Mon - Tues<span>08.00 :17.00</span></li>
                                <li>Fri - Sat<span>09.00 :12.00</span></li>
                                <li>Sun - Mon<span>08.00 :17.00</span></li>
                            </ul>
                            <a href="{{ route('detailDocteur') }}" class="item-btn">Entrer en contact</a>
                        </div>
                    </div>
                </div>
                <div class="no-equal-item col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 dental cardiology">
                    <div class="team-box-layout2">
                        <div class="item-img">
                            <img src="{{ asset('assets/img/slider/team9.png') }}" alt="Team1" class="img-fluid rounded-circle">
                            <ul class="item-icon">
                                <li><a href="{{ route('detailDocteur') }}"><i class="fas fa-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="item-content">
                            <h3 class="item-title"><a href="{{ route('detailDocteur') }}">Dr. Nadim Kamal</a></h3>
                            <p>Orthopaedics</p>
                        </div>
                        <div class="item-schedule">
                            <ul>
                                <li>Mon - Tues<span>08.00 :17.00</span></li>
                                <li>Fri - Sat<span>09.00 :12.00</span></li>
                                <li>Sun - Mon<span>08.00 :17.00</span></li>
                            </ul>
                            <a href="{{ route('detailDocteur') }}" class="item-btn">Entrer en contact</a>
                        </div>
                    </div>
                </div>
                <div class="no-equal-item col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 gastroenterology medicine">
                    <div class="team-box-layout2">
                        <div class="item-img">
                            <img src="{{ asset('assets/img/slider/team11.png') }}" alt="Team1" class="img-fluid rounded-circle">
                            <ul class="item-icon">
                                <li><a href="{{ route('detailDocteur') }}"><i class="fas fa-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="item-content">
                            <h3 class="item-title"><a href="{{ route('detailDocteur') }}">Dr. Rihana Roy</a></h3>
                            <p>Lense Expert</p>
                        </div>
                        <div class="item-schedule">
                            <ul>
                                <li>Mon - Tues<span>08.00 :17.00</span></li>
                                <li>Fri - Sat<span>09.00 :12.00</span></li>
                                <li>Sun - Mon<span>08.00 :17.00</span></li>
                            </ul>
                            <a href="{{ route('detailDocteur') }}" class="item-btn">Entrer en contact</a>
                        </div>
                    </div>
                </div>
                <div class="no-equal-item col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 dental orthopaedics medicine">
                    <div class="team-box-layout2">
                        <div class="item-img">
                            <img src="{{ asset('assets/img/slider/team12.png') }}" alt="Team1" class="img-fluid rounded-circle">
                            <ul class="item-icon">
                                <li><a href="{{ route('detailDocteur') }}"><i class="fas fa-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="item-content">
                            <h3 class="item-title"><a href="{{ route('detailDocteur') }}">Dr. Steven Roy</a></h3>
                            <p>Cardiology</p>
                        </div>
                        <div class="item-schedule">
                            <ul>
                                <li>Mon - Tues<span>08.00 :17.00</span></li>
                                <li>Fri - Sat<span>09.00 :12.00</span></li>
                                <li>Sun - Mon<span>08.00 :17.00</span></li>
                            </ul>
                            <a href="{{ route('detailDocteur') }}" class="item-btn">Entrer en contact</a>
                        </div>
                    </div>
                </div>
                <div class="no-equal-item col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 eye gynaecology neurology">
                    <div class="team-box-layout2">
                        <div class="item-img">
                            <img src="{{ asset('assets/img/slider/team8.png') }}" alt="Team1" class="img-fluid rounded-circle">
                            <ul class="item-icon">
                                <li><a href="{{ route('detailDocteur') }}"><i class="fas fa-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="item-content">
                            <h3 class="item-title"><a href="{{ route('detailDocteur') }}">Dr. Johora Roy</a></h3>
                            <p>Dental Consult</p>
                        </div>
                        <div class="item-schedule">
                            <ul>
                                <li>Mon - Tues<span>08.00 :17.00</span></li>
                                <li>Fri - Sat<span>09.00 :12.00</span></li>
                                <li>Sun - Mon<span>08.00 :17.00</span></li>
                            </ul>
                            <a href="{{ route('detailDocteur') }}" class="item-btn">Entrer en contact</a>
                        </div>
                    </div>
                </div>
                <div class="no-equal-item col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 cardiology medicine">
                    <div class="team-box-layout2">
                        <div class="item-img">
                            <img src="{{ asset('assets/img/slider/team9.png') }}" alt="Team1" class="img-fluid rounded-circle">
                            <ul class="item-icon">
                                <li><a href="{{ route('detailDocteur') }}"><i class="fas fa-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="item-content">
                            <h3 class="item-title"><a href="{{ route('detailDocteur') }}">Dr. Jason Roy</a></h3>
                            <p>Associate Eye</p>
                        </div>
                        <div class="item-schedule">
                            <ul>
                                <li>Mon - Tues<span>08.00 :17.00</span></li>
                                <li>Fri - Sat<span>09.00 :12.00</span></li>
                                <li>Sun - Mon<span>08.00 :17.00</span></li>
                            </ul>
                            <a href="{{ route('detailDocteur') }}" class="item-btn">Entrer en contact</a>
                        </div>
                    </div>
                </div>
                <div class="no-equal-item col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 dental neurology">
                    <div class="team-box-layout2">
                        <div class="item-img">
                            <img src="{{ asset('assets/img/slider/team11.png') }}" alt="Team1" class="img-fluid rounded-circle">
                            <ul class="item-icon">
                                <li><a href="{{ route('detailDocteur') }}"><i class="fas fa-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="item-content">
                            <h3 class="item-title"><a href="{{ route('detailDocteur') }}">Dr. Maria</a></h3>
                            <p>Gastroenterology</p>
                        </div>
                        <div class="item-schedule">
                            <ul>
                                <li>Mon - Tues<span>08.00 :17.00</span></li>
                                <li>Fri - Sat<span>09.00 :12.00</span></li>
                                <li>Sun - Mon<span>08.00 :17.00</span></li>
                            </ul>
                            <a href="{{ route('detailDocteur') }}" class="item-btn">Entrer en contact</a>
                        </div>
                    </div>
                </div>
                <div class="no-equal-item col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 gastroenterology orthopaedics">
                    <div class="team-box-layout2">
                        <div class="item-img">
                            <img src="{{ asset('assets/img/slider/team12.png') }}" alt="Team1" class="img-fluid rounded-circle">
                            <ul class="item-icon">
                                <li><a href="{{ route('detailDocteur') }}"><i class="fas fa-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="item-content">
                            <h3 class="item-title"><a href="{{ route('detailDocteur') }}">Dr. Tina Rahman</a></h3>
                            <p>Gastroenterology</p>
                        </div>
                        <div class="item-schedule">
                            <ul>
                                <li>Mon - Tues<span>08.00 :17.00</span></li>
                                <li>Fri - Sat<span>09.00 :12.00</span></li>
                                <li>Sun - Mon<span>08.00 :17.00</span></li>
                            </ul>
                            <a href="{{ route('detailDocteur') }}" class="item-btn">Entrer en contact</a>
                        </div>
                    </div>
                </div>
                <div class="no-equal-item col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 eye neurology medicine">
                    <div class="team-box-layout2">
                        <div class="item-img">
                            <img src="{{ asset('assets/img/slider/team8.png') }}" alt="Team1" class="img-fluid rounded-circle">
                            <ul class="item-icon">
                                <li><a href="{{ route('detailDocteur') }}"><i class="fas fa-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="item-content">
                            <h3 class="item-title"><a href="{{ route('detailDocteur') }}">Dr. Mark Willy</a></h3>
                            <p>Gastroenterology</p>
                        </div>
                        <div class="item-schedule">
                            <ul>
                                <li>Mon - Tues<span>08.00 :17.00</span></li>
                                <li>Fri - Sat<span>09.00 :12.00</span></li>
                                <li>Sun - Mon<span>08.00 :17.00</span></li>
                            </ul>
                            <a href="{{ route('detailDocteur') }}" class="item-btn">Entrer en contact</a>
                        </div>
                    </div>
                </div>
                <div class="no-equal-item col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 cardiology gynaecology">
                    <div class="team-box-layout2">
                        <div class="item-img">
                            <img src="{{ asset('assets/img/slider/team9.png') }}" alt="Team1" class="img-fluid rounded-circle">
                            <ul class="item-icon">
                                <li><a href="{{ route('detailDocteur') }}"><i class="fas fa-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="item-content">
                            <h3 class="item-title"><a href="{{ route('detailDocteur') }}">Dr. Zinia Zara</a></h3>
                            <p>Associate Eye</p>
                        </div>
                        <div class="item-schedule">
                            <ul>
                                <li>Mon - Tues<span>08.00 :17.00</span></li>
                                <li>Fri - Sat<span>09.00 :12.00</span></li>
                                <li>Sun - Mon<span>08.00 :17.00</span></li>
                            </ul>
                            <a href="{{ route('detailDocteur') }}" class="item-btn">Entrer en contact</a>
                        </div>
                    </div>
                </div>
                <div class="no-equal-item col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 dental neurology cardiology">
                    <div class="team-box-layout2">
                        <div class="item-img">
                            <img src="{{ asset('assets/img/slider/team11.png') }}" alt="Team1" class="img-fluid rounded-circle">
                            <ul class="item-icon">
                                <li><a href="{{ route('detailDocteur') }}"><i class="fas fa-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="item-content">
                            <h3 class="item-title"><a href="{{ route('detailDocteur') }}">Dr. Nadim Kamal</a></h3>
                            <p>Associate Eye</p>
                        </div>
                        <div class="item-schedule">
                            <ul>
                                <li>Mon - Tues<span>08.00 :17.00</span></li>
                                <li>Fri - Sat<span>09.00 :12.00</span></li>
                                <li>Sun - Mon<span>08.00 :17.00</span></li>
                            </ul>
                            <a href="{{ route('detailDocteur') }}" class="item-btn">Entrer en contact</a>
                        </div>
                    </div>
                </div>
                <div class="no-equal-item col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 eye orthopaedics medicine neurology">
                    <div class="team-box-layout2">
                        <div class="item-img">
                            <img src="{{ asset('assets/img/slider/team12.png') }}" alt="Team1" class="img-fluid rounded-circle">
                            <ul class="item-icon">
                                <li><a href="{{ route('detailDocteur') }}"><i class="fas fa-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="item-content">
                            <h3 class="item-title"><a href="{{ route('detailDocteur') }}">Dr. Johora Roy</a></h3>
                            <p>Associate Eye</p>
                        </div>
                        <div class="item-schedule">
                            <ul>
                                <li>Mon - Tues<span>08.00 :17.00</span></li>
                                <li>Fri - Sat<span>09.00 :12.00</span></li>
                                <li>Sun - Mon<span>08.00 :17.00</span></li>
                            </ul>
                            <a href="{{ route('detailDocteur') }}" class="item-btn">Entrer en contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- All Doctors End Here -->
@endsection