@extends('templates.template')
@section("title","Qui sommes-nous")
@section("page","A propos")
@section('content')
  @include("parties.banner")

   <!-- About Us Start Here -->
   <section class="about-wrap-layout5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-box-layout13">
                    <h2 class="item-title">Notre meilleur laboratoire
                        <span>ProxyDoc Labo</span>
                    </h2>
                    <p>Nous offrons des services médicaux étendus pour nos patients,
                         nous vous recommandons d'utiliser
                         le texte officia.simply factice de
                         l'industrie de l'impression et de la composition.</p>
                    <ul class="list-info">
                        <li>Personnel Qualifié de Médecins</li>
                        <li>Sentez-vous comme chez Home Services</li>
                        <li>Services d'urgence 24h/24 et 7j/7</li>
                        <li>Facturation facile et abordable</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-box-layout14">
                    <div class="item-video">
                        <img src="{{ asset('assets/img/slider/about2.jpg') }}" alt="about">
                        <a class="play-btn popup-youtube" href="http://www.youtube.com/watch?v=1iIZeIy7TqM">
                        <i class="flaticon-play-button"></i>
                        </a>
                    </div>
                </div>   
            </div>
        </div>
    </div>
</section>
<!-- About Us Area End Here --> 


<!-- About Area Start Here -->


<!-- About Area Start Here -->
<section class="departments-wrap-layout1 bg-light-accent100">
    <div class="container menu-list-wrapper">
            <div class="container">
                <div class="row" id="no-equal-gallery">
                    <div class="sidebar-widget-area sidebar-break-md col-xl-3 col-lg-4 col-12 no-equal-item" style="margin-top: 15%">
                        <div class="widget widget-about-info">
                            <ul class="nav nav-tabs tab-nav-list">
                                <li class="nav-item">
                                    <a class="active" href="#related1" data-toggle="tab" aria-expanded="false">Qui sommes-nous</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#related2" data-toggle="tab" aria-expanded="false">Notre vision</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#related3" data-toggle="tab" aria-expanded="false">Notre Experience</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 no-equal-item">
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="related1">
                                <div class="about-box-layout5">
                                    <h2 class="item-title">Apropo de nous </h2>
                                    <p>Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc iquam class
                                        bibendum non mattis fusceut perspiciatis undeuisque. Maecenas. Eros mus.
                                        Hymenaeos eros. Nisi mauris et adipiscing. Aliquam class bibendum
                                        mattis fusceut persecenas. Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi
                                        mauris et adipisc iquam class bibendum non mattis fusceut perspiciatis
                                        undeuisque.</p>
                                 
                                    <p>Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc iquam class
                                        bibendum non mattis fusceut perspiciatis undeuisque. Maecenas. Eros mus.
                                        Hymenaeos eros. Nisi mauris et adipiscing. Aliquam class bibendum
                                        mattis fusceut persecenas. Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi
                                        mauris et adipisc iquam class bibendum non mattis fusceut perspiciatis
                                        undeuisque. Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris
                                        et adipisc iquam class bibendum non mattis fusceut perspiciatise.</p>
                                    <ul class="about-info">
                                        <li>Keep Patients First</li>
                                        <li>Pursue Excellence</li>
                                        <li>Keep Everyone Safe</li>
                                        <li>Manage Your Resources</li>
                                        <li>Work Together</li>
                                        <li>Keep Learning</li>
                                    </ul>
                                    <p>Hymenaeos eros. Nisi mauris et adipisc iquam class bibendum non mattis fusceut
                                        perspiciatis undeuisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et
                                        adipiscing. Aliquam class bibendum mattis fusceut persecenas.
                                        Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc iquam class
                                        bibendum non mattis fusceut perspiciatis undeuisque. Quisque. Maecenas. Eros
                                        mus. Hymenaeos eros.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="related2">
                                <div class="about-box-layout5">
                                    <h2 class="item-title">Notre vision est de </h2>
                                    <p>Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc iquam class
                                        bibendum non mattis fusceut perspiciatis undeuisque. Maecenas. Eros mus.
                                        Hymenaeos eros. Nisi mauris et adipiscing. Aliquam class bibendum
                                        mattis fusceut persecenas. Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi
                                        mauris et adipisc iquam class bibendum non mattis fusceut perspiciatis
                                        undeuisque.</p>
                                   
                                    <p>Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc iquam class
                                        bibendum non mattis fusceut perspiciatis undeuisque. Maecenas. Eros mus.
                                        Hymenaeos eros. Nisi mauris et adipiscing. Aliquam class bibendum
                                        mattis fusceut persecenas. Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi
                                        mauris et adipisc iquam class bibendum non mattis fusceut perspiciatis
                                        undeuisque. Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris
                                        et adipisc iquam class bibendum non mattis fusceut perspiciatise.</p>
                                    <ul class="about-info">
                                        <li>Keep Patients First</li>
                                        <li>Pursue Excellence</li>
                                        <li>Keep Everyone Safe</li>
                                        <li>Manage Your Resources</li>
                                        <li>Work Together</li>
                                        <li>Keep Learning</li>
                                    </ul>
                                    <p>Hymenaeos eros. Nisi mauris et adipisc iquam class bibendum non mattis fusceut
                                        perspiciatis undeuisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et
                                        adipiscing. Aliquam class bibendum mattis fusceut persecenas.
                                        Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc iquam class
                                        bibendum non mattis fusceut perspiciatis undeuisque. Quisque. Maecenas. Eros
                                        mus. Hymenaeos eros.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="related3">
                                <div class="about-box-layout5">
                                    <h2 class="item-title">Notre experience</h2>
                                    <p>Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc iquam class
                                        bibendum non mattis fusceut perspiciatis undeuisque. Maecenas. Eros mus.
                                        Hymenaeos eros. Nisi mauris et adipiscing. Aliquam class bibendum
                                        mattis fusceut persecenas. Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi
                                        mauris et adipisc iquam class bibendum non mattis fusceut perspiciatis
                                        undeuisque.</p>
                                    <p>Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc iquam class
                                        bibendum non mattis fusceut perspiciatis undeuisque. Maecenas. Eros mus.
                                        Hymenaeos eros. Nisi mauris et adipiscing. Aliquam class bibendum
                                        mattis fusceut persecenas. Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi
                                        mauris et adipisc iquam class bibendum non mattis fusceut perspiciatis
                                        undeuisque. Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris
                                        et adipisc iquam class bibendum non mattis fusceut perspiciatise.</p>
                                    <ul class="about-info">
                                        <li>Keep Patients First</li>
                                        <li>Pursue Excellence</li>
                                        <li>Keep Everyone Safe</li>
                                        <li>Manage Your Resources</li>
                                        <li>Work Together</li>
                                        <li>Keep Learning</li>
                                    </ul>
                                    <p>Hymenaeos eros. Nisi mauris et adipisc iquam class bibendum non mattis fusceut
                                        perspiciatis undeuisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et
                                        adipiscing. Aliquam class bibendum mattis fusceut persecenas.
                                        Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc iquam class
                                        bibendum non mattis fusceut perspiciatis undeuisque. Quisque. Maecenas. Eros
                                        mus. Hymenaeos eros.</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                  
                </div>
            </div>
</section>
<section class="progress-wrap-layout2 bg-overlay bg-overlay-primary80 bg-common parallaxie" data-bg-image="{{ asset('assets/img/slider/figure1.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="progress-box-layout2 col-md-4">
                <div class="inner-item">
                    <div class="counting-text counter" data-num="59">59</div>
                    <p>Sections de la santé</p>
                </div>
            </div>
            <div class="progress-box-layout2 col-md-4">
                <div class="inner-item">
                    <div class="counting-text counter" data-num="4709">4709</div>
                    <p>Patients heureux</p>
                </div>
            </div>
            <div class="progress-box-layout2 col-md-4">
                <div class="inner-item">
                    <div class="counting-text counter" data-num="128">128</div>
                    <p>Des médecins de qualité</p>
                </div>
            </div>
        </div>
    </div>
</section>
  <!-- Why Choose Area Start Here -->
  <section class="why-choose-wrap-layout1">
    <div class="container">
        <div class="row">
            <div class="why-choose-box-layout1 col-lg-6">
                <h2 class="item-title">Pourquoi Les Gens Nous Choisissent ?</h2>
                <p class="sub-title">Nous offrons des services médicaux étendus pour nos patients, nous vous recommandons d'utiliser officia</p>
                <div class="choose-list-layout1">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading active">
                                <div class="panel-title">
                                    <a aria-expanded="false" class="accordion-toggle" data-toggle="collapse" 
                                    data-parent="#accordion" href="#collapseOne">Nous utilison une technomogie innovante</a>
                                </div>
                            </div>
                            <div aria-expanded="false" id="collapseOne" role="tabpanel" class="panel-collapse collapse show">
                                <div class="panel-body">
                                    <p>Moimply dummy text of the printing and type settingaindustry. Lorem Ipsum has
                                        been the industry’s standard dummy text ever since thelong established fact
                                        thaaret </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse"
                                     data-parent="#accordion" href="#collapseTwo">Garantir le succès des nos traitements</a>
                                </div>
                            </div>
                            <div aria-expanded="false" id="collapseTwo" role="tabpanel" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Moimply dummy text of the printing and type settingaindustry. Lorem Ipsum has
                                        been the industry’s standard dummy text ever since thelong established fact
                                        thaaret </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Accepter les cartes d'assurances</a>
                                </div>
                            </div>
                            <div aria-expanded="false" id="collapseThree" role="tabpanel" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Moimply dummy text of the printing and type settingaindustry. Lorem Ipsum has
                                        been the industry’s standard dummy text ever since thelong established fact
                                        thaaret </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="why-choose-box-layout2 col-lg-6">
                <img src="{{ asset('assets/img/slider/about2.png') }}" alt="about" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- Why Choose Area End Here -->
 <!-- Testimonial Area Start Here -->
 <section class="testmonial-wrap-layout2 bg-common" data-bg-image="{{ asset('assets/img/slider/testimonial-bg1.jpg') }}">
    <div class="container">
        <div class="rc-carousel dot-control-layout2" data-loop="true" data-items="1" data-margin="30" data-autoplay="true" data-autoplay-timeout="5000"
            data-smart-speed="2000" data-dots="true" data-nav="false" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="false"
            data-r-x-small-dots="true" data-r-x-medium="1" data-r-x-medium-nav="false" data-r-x-medium-dots="true" data-r-small="1"
            data-r-small-nav="false" data-r-small-dots="true" data-r-medium="1" data-r-medium-nav="false" data-r-medium-dots="true"
            data-r-large="1" data-r-large-nav="false" data-r-large-dots="true" data-r-extra-large="1" data-r-extra-large-nav="false"
            data-r-extra-large-dots="true">
            <div class="testmonial-box-layout3">
                <div class="item-img">
                    <img src="{{ asset('assets/img/slider/testimonial3.jpg') }}" class="img-fulid rounded-circle" alt="Robert Addison">
                </div>
                <div class="item-content">
                    <p>Rimply dummy text of the printing and tRimply dummy text of the printing and typesetting industry.
                        psum has been the industry.</p>
                    <h3 class="item-title">Robert Adison</h3>
                    <h4 class="sub-title">Professor</h4>
                </div>
            </div>
            <div class="testmonial-box-layout3">
                <div class="item-img">
                    <img src="{{ asset('assets/img/slider/testimonial3.jpg') }}" class="img-fulid rounded-circle bg-common" alt="Robert Addison">
                </div>
                <div class="item-content">
                    <p>Rimply dummy text of the printing and tRimply dummy text of the printing and typesetting industry.
                        psum has been the industry.</p>
                    <h3 class="item-title">Robert Adison</h3>
                    <h4 class="sub-title">Professor</h4>
                </div>
            </div>
            <div class="testmonial-box-layout3">
                <div class="item-img">
                    <img src="{{ asset('assets/img/slider/testimonial3.jpg') }}" class="img-fulid rounded-circle bg-common" alt="Robert Addison">
                </div>
                <div class="item-content">
                    <p>Rimply dummy text of the printing and tRimply dummy text of the printing and typesetting industry.
                        psum has been the industry.</p>
                    <h3 class="item-title">Robert Adison</h3>
                    <h4 class="sub-title">Professor</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Area End Here -->
<!-- Brand Area Start Here -->
<section class="brand-wrap-layout2 bg-light-primary100">
    <div class="container">
        <div class="rc-carousel nav-control-layout4" data-loop="true" data-items="5" data-margin="30"
            data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false"
            data-nav="true" data-nav-speed="false" data-r-x-small="2" data-r-x-small-nav="true"
            data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false"
            data-r-small="3" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="5"
            data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="5" data-r-large-nav="true"
            data-r-large-dots="false" data-r-extra-large="5" data-r-extra-large-nav="true"
            data-r-extra-large-dots="false">
            <div class="brand-box-layout3">
                <img src="{{ asset('assets/img/slider/brand4.png') }}" alt="brand" class="img-fluid">
            </div>
            <div class="brand-box-layout3">
                <img src="{{ asset('assets/img/slider/brand5.png') }}" alt="brand" class="img-fluid">
            </div>
            <div class="brand-box-layout3">
                <img src="{{ asset('assets/img/slider/brand6.png') }}" alt="brand" class="img-fluid">
            </div>
            <div class="brand-box-layout3">
                <img src="{{ asset('assets/img/slider/brand7.png') }}" alt="brand" class="img-fluid">
            </div>
            <div class="brand-box-layout3">
                <img src="{{ asset('assets/img/slider/brand8.png') }}" alt="brand" class="img-fluid">
            </div>
            <div class="brand-box-layout3">
                <img src="{{ asset('assets/img/slider/brand9.png') }}" alt="brand" class="img-fluid">
            </div>
            <div class="brand-box-layout3">
                <img src="{{ asset('assets/img/slider/brand10.png') }}" alt="brand" class="img-fluid">
            </div>
            <div class="brand-box-layout3">
                <img src="{{ asset('assets/img/slider/brand5.pn') }}g" alt="brand" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- Brand Area End Here -->
@endsection