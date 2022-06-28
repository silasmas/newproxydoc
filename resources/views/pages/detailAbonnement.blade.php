@extends('templates.template')
@section("title","Nos services")
@section("page2","Details de nos services")
@section("parent")
<li>
    <a href="{{ route('services') }}">Services</a>
</li> 
@endsection

@section('autreStyle')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">
    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.datetimepicker.css') }}">
@endsection
@section('content')
   
@include("parties.banner")
    <!-- Single Department Start Here -->
    <section class="single-department-wrap-layout1 bg-light-primary100">
        <div class="container">
            <div class="row" id="no-equal-gallery">
                <div class="sidebar-widget-area sidebar-break-md col-xl-3 col-lg-4 col-12 no-equal-item">
                    <div class="widget widget-department-info">
                        <h3 class="section-title title-bar-primary">Liste des services</h3>
                        <ul class="nav nav-tabs tab-nav-list">
                            @forelse ($services as $s)
                                <li class="nav-item">
                                <a class="{{ $loop->first?'active':"" }}" href="#{{ "department".$s->id }}" data-toggle="tab"
                                    aria-expanded="false">{{ $s->nom }}</a>
                            </li>
                            @empty                                
                            @endforelse

                        </ul>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-12 no-equal-item">
                    <div class="tab-content">
                        @forelse ($services as $s)
                            <div role="tabpanel" class="tab-pane fade {{ $loop->first?'active show':"" }} " id="{{ "department".$s->id }}">
                            <div class="single-departments-box-layout1">
                                <div class="single-departments-img">
                                    {{-- <img alt="single" src="{{ asset('assets/img/slider/department28.jpg') }}"> --}}
                                </div>
                                <div class="item-content">
                                    <div class="item-content-wrap">
                                        <h3 class="item-title title-bar-primary5">{{ $s->nom }}</h3>
                                        <span class="sub-title">

                                        </span>
                                        <p>
                                            {{ $s->description }}
                                         </p>
                                        <h3 class="item-title">Advantages:</h3>
                                        {{-- <p>
                                        
                                        </p> --}}
                                        <ul class="department-info">
                                            @forelse ($s->acte as $se)
                                            <li>{{ $se->nom." :" }} <br>
                                            <small class="mb-4" style="margin-bottom: 10px">
                                            {{ $se->description }}    
                                            </small> </li>                                              
                                            @empty
                                                
                                            @endforelse
                                        </ul>
                                        <p>

                                        </p>
                                    </div>


                                </div>
                            </div>
                        </div>
                        @empty
                            
                        @endforelse
                        
                        
                    </div>
                </div>
                {{-- <div class="sidebar-widget-area sidebar-break-md col-xl-3 col-lg-4 col-12 no-equal-item">
                    <div class="widget widget-call-to-action-light">
                        <div class="media">
                            <img src="{{ asset('assets/img/slider/figure6.png') }}" alt="figure">
                            <div class="media-body space-sm">
                                <h4>Emergency Cases</h4>
                                <span>2-800-700-6200</span>
                            </div>
                        </div>
                    </div>
                    <div class="widget widget-schedule">
                        <h3 class="section-title title-bar-primary">Opening Hours</h3>
                        <ul>
                            <li>Saturday - Monday: <span>09:00 am - 10.00 pm</span></li>
                            <li>Tuesday - Thursday: <span>09:00 am - 10.00 pm</span></li>
                            <li>Friday - Saturday: <span>09:00 am - 10.00 pm</span></li>
                            <li>Sunday: <span class="bold">Will Be Closed</span></li>
                        </ul>
                    </div>
                    <div class="widget widget-appointment">
                        <h3 class="section-title-light title-bar-light">Book Appointment</h3>
                        <form>
                            <div class="form-group">
                                <select class="select2" data-error="Phone field is required" required>
                                    <option value="">Select Department *</option>
                                    <option value="1">Gynaecology</option>
                                    <option value="2">Cardiology</option>
                                    <option value="3">Orthopaedics</option>
                                    <option value="4">Medicine</option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <select class="select2" data-error="Phone field is required" required>
                                    <option value="">Choose Doctor by Name *</option>
                                    <option value="1">Dr. Mou</option>
                                    <option value="2">Dr. Kalvin</option>
                                    <option value="3">Dr. Mark Willy</option>
                                    <option value="4">Dr. Zinia Zara</option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Patient Name *" class="form-control" name="name"
                                    id="form-name" data-error="Name field is required" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Phone *" class="form-control" name="Phone"
                                    id="form-phone" data-error="Phone field is required" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" placeholder="E-mail *" class="form-control" name="email"
                                    id="form-email" data-error="E-mail field is required" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <i class="far fa-calendar-alt"></i>
                                <input type="text" class="form-control rt-date" placeholder="Appointment Date *"
                                    name="date" id="form-date" data-error="Subject field is required" required />
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <i class="far fa-clock"></i>
                                <input type="text" class="form-control rt-time" placeholder="Time *" name="time"
                                    id="form-time" data-error="Subject field is required" required />
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <textarea placeholder="Type Appintment Note" class="textarea form-control" name="message" id="form-message" rows="5"
                                    cols="20" data-error="Message field is required" required></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="text-center form-group">
                                <button class="item-btn">BOOK NOW<i class="fas fa-chevron-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- Single Department End Here -->
@endsection

@section('autreScript')
    <!-- Select2 Js -->
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <!-- Datetimepicker Js -->
    <script src="{{ asset('assets/js/jquery.datetimepicker.full.min.js') }}"></script>
@endsection
