@extends('templates.template',['titre'=>"Home dev"])
@section("title","Nos docteurs")
@section("page2","Details du medecin")
@section("parent")
<li>
    <a href="{{ route('docteur') }}">Médecins</a>
</li> 
@endsection

@section('content')
@include("parties.banner")
        <!-- Doctors Detail Start Here -->
        <section class="team-details-wrap-layout1 bg-light-accent100">
            <div class="container">
                <div class="row">
                    <div class="order-xl-2 order-lg-2 col-xl-9 col-lg-8 col-md-12 col-12">
                        <div class="team-detail-box-layout1">
                            <div class="single-item">
                                <h3 class="section-title title-bar-primary2">Apropo de moi:</h3>
                                <p>Efficiently myocardinate market-driven innovation via open-source alignments.
                                    Dramatically engage high-Phosfluorescently expedite impactful supply chains via
                                    focused results. Holistically . Compellingly supply just in time catalysts for
                                    change through..</p>
                            </div>
                            <div class="single-item">
                                <div class="table-responsive">
                                    <h3 class="section-title title-bar-primary2">Etudes faites :</h3>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Year</th>
                                                <th>Degree</th>
                                                <th>Institute</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2006</td>
                                                <td>MBBS, M.D</td>
                                                <td>University of Wyoming</td>
                                            </tr>
                                            <tr>
                                                <td>2010</td>
                                                <td>M.D. of Medicine</td>
                                                <td>Netherland Medical College</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="table-responsive">
                                    <h3 class="section-title title-bar-primary2">Expériences :</h3>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Year</th>
                                                <th>Department</th>
                                                <th>Position</th>
                                                <th>Hospital</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2007 - 2008</td>
                                                <td>MBBS, M.D</td>
                                                <td>Senior Prof.</td>
                                                <td>Midtown Medical Clinic</td>
                                            </tr>
                                            <tr>
                                                <td>2010 - 2018</td>
                                                <td>M.D. of Medicine</td>
                                                <td>Associate Prof.</td>
                                                <td>Netherland Medical College</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="table-responsive">
                                    <h3 class="section-title title-bar-primary2">Horaires des rendez-vous:</h3>
                                    <table class="table schedule-table">
                                        <thead>
                                            <tr>
                                                <th>Day</th>
                                                <th>Time</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Saturday</td>
                                                <td>10.00 am - 12.00 pm</td>
                                                <td class="schedule-btn"><a href="#" class="item-btn">réservé</a></td>
                                            </tr>
                                            <tr>
                                                <td>Monday</td>
                                                <td>05.00 pm - 09.00 pm</td>
                                                <td class="schedule-btn"><a href="#" class="item-btn">réservé</a></td>
                                            </tr>
                                            <tr>
                                                <td>Wednesday</td>
                                                <td>07.00 pm - 10.00 pm</td>
                                                <td class="schedule-btn"><a href="#" class="item-btn">réservé</a></td>
                                            </tr>
                                            <tr>
                                                <td>Friday</td>
                                                <td>08.00 pm - 11.00 pm</td>
                                                <td class="schedule-btn"><a href="#" class="item-btn">réservé</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="order-xl-1 order-lg-1 sidebar-widget-area sidebar-break-md col-xl-3 col-lg-4 col-md-12 col-12">
                        <div class="widget widget-about-team">
                            <img src="{{ asset('assets/img/slider/team9.png') }}" class="img-fluid" alt="team">
                            <div class="item-content">
                                <h3 class="item-title">Dr.Zinia Zara</h3>
                                <p class="item-ctg">Cardiology</p>
                                <span class="item-designation">MBBS, M.D of Medicine</span>
                            </div>
                        </div>
                        <div class="widget widget-team-contact">
                            <h3 class="section-title title-bar-primary2">Personal Info</h3>
                            <ul>
                                <li>Phone:<span>+ (123) 1800-567</span></li>
                                <li>Office:<span>+ 88500-567</span></li>
                                <li>E-mail:<span>ziniazara@gmail.com</span></li>
                                <li class="d-flex">Social:
                                    <ul class="widget-social">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget-call-to-action">
                            <div class="media">
                                <img src="{{ asset('assets/img/slider/figure1.png') }}" alt="figure">
                                <div class="media-body space-sm">
                                    <h4>Emergency Cases</h4>
                                    <span>2-800-700-6200</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Doctors Detail End Here -->
@endsection