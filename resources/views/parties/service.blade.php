<section class="departments-wrap-layout2 bg-light-secondary100">
    <img class="left-img img-fluid" src="{{ asset('assets/img/slider/figure8.png') }}" alt="figure">
    <div class="container">
        <div class="text-left section-heading heading-dark heading-layout1">
            <h2>Nos services</h2>
            <p>Services dédiés</p>
            <div id="owl-nav1" class="owl-nav-layout1">
                <span class="rt-prev">
                    <i class="fas fa-chevron-left"></i>
                </span>
                <span class="rt-next">
                    <i class="fas fa-chevron-right"></i>
                </span>
            </div>
        </div>
        <label hidden>{{ $i=1 }}</label>
        <div class="rc-carousel nav-control-layout2" data-loop="true" data-items="4" data-margin="20"
            data-autoplay="false" data-autoplay-timeout="5000" data-custom-nav="#owl-nav1" data-smart-speed="2000"
            data-dots="false" data-nav="false" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true"
            data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="false" data-r-x-medium-dots="false"
            data-r-small="2" data-r-small-nav="false" data-r-small-dots="false" data-r-medium="3"
            data-r-medium-nav="false" data-r-medium-dots="false" data-r-large="4" data-r-large-nav="false"
            data-r-large-dots="false" data-r-extra-large="4" data-r-extra-large-nav="false"
            data-r-extra-large-dots="false">
   
            @forelse ($service as $s)
            <div class="departments-box-layout2">
                <span class="departments-sl">0{{$loop->iteration }}</span>
                <div class="item-icon">
                    @switch($s->nom)
                        @case("ProxyChat")
                        <i>
                            <img src="{{ asset('assets/img/png/017-comment.png') }}" style="margin-bottom: -10px">
                        </i>
                            @break
                        @case("ProxyChem")
                        <i class="flaticon-pills"></i>
                            @break
                        @case("ProxyFamily")
                        <i>
                            <img src="{{ asset('assets/img/png/018-family-insurance-2.png') }}" style="margin-bottom: -10px">
                        </i>
                        
                            @break
                    
                        @case("ProxyGency")
                        <i class="flaticon-ambulance"></i>
                            @break
                    
                    @endswitch
                   
                </div>
                {{-- <div class="item-icon"><i class="flaticon-medical"></i></div> --}}
                <h3 class="item-title"><a href="#">{{ $s->nom }} </a></h3>
                <p>
                   {{$s->description}}
                </p>
                <a class="item-btn" href="{{ route('detailAbonnement') }}">Vor plus<i class="fas fa-long-arrow-alt-right"></i></a>
            </div>  
            @empty
                
            @endforelse
           
        </div>
    </div>
</section>