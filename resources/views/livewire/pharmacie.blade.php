<div>
    <!-- Shop Area Start Here -->
<section class="shop-wrap-layout1 bg-light-primary100">
    <div class="container">
        <div class="row">
            <div class="col col-lg-9" style="margin-top: 50px">
                <div class="form-group d-xl-block "id="top-search-form">
                    <input type="text" class="form-control search-input" name="s"
                    placeholder="Trouver un produit" value="" wire:model.debounce.500ms="search">
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-xl-9 col-lg-8 col-12">
                <div class="row">
                    @forelse ($allproduits as $p)
                        <div class="col-xl-3 col-lg-6 col-md-3 col-sm-6 col-12">
                            <div class="shop-box-layout1 margin-b-30">
                                <div class="item-img">
                                    <img src="{{ asset('assets/img/shop1.png') }}" alt="shop" class="img-fluid">
                                    <ul class="shop-action-items">
                                        <li>
                                            <a title="Ajouter au panier">
                                                    <button type="submit" style="background: transparent; border: none;cursor: pointer;"
                                                    wire:click.prevent="addTocards('{{ $p->id }}')" wire:loading.delay.attr='disabled'>
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </button>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('detailProdui',['id'=>$p->id]) }}" alt="" title="Voir en detail">
                                                <i class="flaticon-exchange-arrows"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="item-content">
                                    <h4 class="item-title">
                                        <a href="{{ route('detailProdui',['id'=>$p->id]) }}">{{ $p->nom }}</a>
                                    </h4>
                                    <div class="rate-items">
                                        @forelse ($p->categorie as $c)
                                            <div class="rate-item">
                                                {{ $c->nom }}
                                            </div>
                                        @empty
                                        @endforelse
                                    </div>
                                </div>
                                <div class="item-price">{{ $p->monaie . ' ' . $p->prix }}</div>
                            </div>
                        </div>
            @empty

                @endforelse


            </div>
            <div class="col-12 form-group text-center">

                {{ $allproduits->links() }}

            </div>
        </div>
        <div class="sidebar-widget-area sidebar-break-md col-xl-3 col-lg-4 col-12">
           @include("parties.categorie")

            <div class="widget widget-tag">
                <h3 class="section-title title-bar-primary">Tags</h3>
                <ul>
                    <li>
                        <a href="#">Dental</a>
                    </li>
                    <li>
                        <a href="#">Eye Care</a>
                    </li>
                    <li>
                        <a href="#">Labrotary</a>
                    </li>
                    <li>
                        <a href="#">Care</a>
                    </li>
                    <li>
                        <a href="#">Health</a>
                    </li>
                    <li>
                        <a href="#">Modern Clinic</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Shop Area End Here -->
</div>
