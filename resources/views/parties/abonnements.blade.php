  <!-- Special Offer Start Here -->
  <section class="pricing-wrap-layout1 bg-light-accent100">
    <div class="container">
        <div class="text-center section-heading heading-dark heading-layout3">
            <h2>Notre Plan Tarifaire</h2>
            <p>Choisissez votre prix et forfait abordables</p>
        </div>
        <div class="row gutters-20">
            @forelse ($abonnement as $ab)
            @foreach ($ab as $a)
          
            {{-- @foreach ($c->abonnement as $a) --}}
            <div class="col-xl-3 col-lg-6 col-md-6 col-12">
            <div class="pricing-box-layout1">
                <h3>{{ $a->nom }}</h3>
                <div class="pricing title-bar-primary6">
                    <span class="currency">{{ $a->monaie=="USD"?"$":"FC" }}</span>
                    <span class="amount">{{ $a->prix }}</span>
                    <small>/ {{ $a->duree." ".$a->temps }}</small>
                </div>
                <div class="box-content">
                    <ul>
                        @forelse ($a->service as $s)
                            
                        <li>{{ $s->nom }}</li>
                        @empty
                            
                        @endforelse
                        
                    </ul>
                    <a href="{{ route('createAbonnement',['id'=>$a->id])}}" class="item-btn">S'abonner</a>
                </div>
            </div>
        </div>
            {{-- @endforeach --}}
            @endforeach
            @empty
                
            @endforelse
            
            {{-- <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                <div class="pricing-box-layout1">
                    <h3>Standard</h3>
                    <div class="pricing title-bar-primary6">
                        <span class="currency">$</span>
                        <span class="amount">39</span>
                        <small>/Mois</small>
                    </div>
                    <div class="box-content">
                        <ul>
                            <li>Dental Implant</li>
                            <li>Another Feature</li>
                            <li>Another Major Feature</li>
                            <li>Emergency Care</li>
                            <li>-</li>
                            <li>-</li>
                        </ul>
                        <a href="#" class="item-btn">S'abonner</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                <div class="pricing-box-layout1">
                    <h3>Business</h3>
                    <div class="pricing title-bar-primary6">
                        <span class="currency">$</span>
                        <span class="amount">59</span>
                        <small>/Mois</small>
                    </div>
                    <div class="box-content">
                        <ul>
                            <li>Dental Implant</li>
                            <li>Another Feature</li>
                            <li>Another Major Feature</li>
                            <li>Dental Implant</li>
                            <li>Another Feature</li>
                            <li>-</li>
                        </ul>
                        <a href="#" class="item-btn">S'abonner</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                <div class="pricing-box-layout1">
                    <h3>Premium</h3>
                    <div class="pricing title-bar-primary6">
                        <span class="currency">$</span>
                        <span class="amount">99</span>
                        <small>/Mois</small>
                    </div>
                    <div class="box-content">
                        <ul>
                            <li>Dental Implant</li>
                            <li>Another Feature</li>
                            <li>Another Major Feature</li>
                            <li>Dental Implant</li>
                            <li>Another Feature</li>
                            <li>Another Major Feature</li>
                        </ul>
                        <a href="#" class="item-btn">S'abonner</a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>
<!-- Special Offer End Here -->