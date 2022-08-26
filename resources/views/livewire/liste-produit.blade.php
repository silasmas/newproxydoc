{{-- <div> --}}

    <section class="shop-wrap-layout1 bg-light-primary100">
        <div class="container">
            <div class="section-heading heading-dark text-center heading-layout1">
                <h2>Notre pharmacie en ligne</h2>
                <p>Achetez et faites-vous livré à domicile</p>
                <div>
                    {{ session('msg') }}
                </div>
            </div>
            <div class="rc-carousel dot-control-layout3" data-loop="true" data-items="4" data-margin="30" data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="true" data-nav="false" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="false"
                data-r-x-small-dots="true" data-r-x-medium="2" data-r-x-medium-nav="false" data-r-x-medium-dots="true" data-r-small="2" data-r-small-nav="false" data-r-small-dots="true" data-r-medium="3" data-r-medium-nav="false" data-r-medium-dots="true"
                data-r-large="4" data-r-large-nav="false" data-r-large-dots="true" data-r-extra-large="4" data-r-extra-large-nav="false" data-r-extra-large-dots="true">

                @forelse ($produits as $p)
                <div class="shop-box-layout1">

                    <div class="item-img">
                        <img src="{{ asset('assets/img/shop1.png') }}" alt="shop" class="img-fluid">
                        <ul class="shop-action-items">

                            <li>
                                <a>
                                        <button type="submit" style="background: transparent; border: none;cursor: pointer;"
                                        wire:click.prevent="addTocards('{{ $p->id }}')" wire:loading.delay.attr='disabled'>
                                        <i class="flaticon-shopping-cart"></i>
                                        </button>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('detailProdui', ['id' => $p->id]) }}">
                                    <i class="flaticon-exchange-arrows"></i>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <div class="item-content">
                        <h4 class="item-title">
                            <a href="{{ route('detailProdui', ['id' => $p->id]) }}">{{ $p->nom }}</a>
                        </h4>
                        <div class="rate-items">
                            @forelse ($p->categorie as $c)
                                <div class="rate-item">
                                    {{ $c->nom }}
                                </div>
                            @empty
                            @endforelse

                        </div>
                        <div class="item-price">{{ $p->monaie . ' ' . $p->prix }}</div>
                    </div>
                </div>
            @empty

            @endforelse
            {{-- <div wire:loading  class="text-danger">Patiientez svp</div> --}}
            </div>
            <div class="loadmore-layout1 margin-t-20">
                <a href="{{ route('pharmacie') }}" class="item-btn">Voir toute la pharmacie</a>
            </div>
        </div>
    </section>


{{-- </div> --}}
