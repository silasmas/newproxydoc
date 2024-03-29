@extends('templates.template')
@section('title', 'Mes achats')
@section("page2","Details produit acheter")
@section("parent")
<li>
    <a href="{{ route('mesAchats') }}">Mes achats</a>
</li>
@endsection
@section('autreStyle')
    <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.datetimepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/parsley/parsley.css') }}">

@endsection
@section('content')
    @include('parties.banner')
    <!-- Shop Details Start Here -->
    <section class="single-product-wrap bg-light-primary100">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8 col-12 margin-b-30r">
                    <div class="single-product-box">
                        <div class="row">
                            <div class="col-xl-6 col-12">
                                <div class="single-product-gallery">
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active show" id="fitness-related1">
                                            <a href="#">
                                                <img alt="single" src="{{ asset('assets/img/shop1.png') }}" class="img-responsive">
                                            </a>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="fitness-related2">
                                            <a href="#">
                                                <img alt="single" src="{{ asset('assets/img/shop2.png') }}" class="img-responsive">
                                            </a>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="fitness-related3">
                                            <a href="#">
                                                <img alt="single" src="{{ asset('assets/img/shop3.png') }}" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a href="#fitness-related1" data-toggle="tab" aria-expanded="false"
                                                class="active">
                                                <img alt="fitness-related1" src="{{ asset('assets/img/shop1.png') }}" class="img-responsive">
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#fitness-related2" data-toggle="tab" aria-expanded="false">
                                                <img alt="fitness-related2" src="{{ asset('assets/img/shop2.png') }}" class="img-responsive">
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#fitness-related3" data-toggle="tab" aria-expanded="false">
                                                <img alt="fitness-related3" src="{{ asset('assets/img/shop3.png') }}" class="img-responsive">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-6 col-12">
                                <div class="single-product-info">
                                    <h2 class="item-title">{{ $prod->produit->nom }}</h2>
                                    <ul class="rating">
                                                {{-- @forelse ($prod->categorie as $c)
                                                    <div class="rate-item">
                                                        {{ $c->nom }}
                                                    </div>
                                                @empty
                                                @endforelse --}}
                                    </ul>
                                    <div class="price">{{ $prod->produit->prix.$prod->produit->monaie }}</div>
                                    <div class="item-stock">
                                        Quantité achetée :
                                        <span class="text-success">{{ $prod->quantite }}</span>
                                    </div>
                                    <div class="item-stock">
                                     Etat de livraison :
                                        @if ($prod->livraison=='0')
                                        <span class="text-danger">
                                            {{ "Pas des livraison" }}</span>
                                        @else
                                        @if ($prod->livraison=='1')
                                        <span class="text-warning">
                                           En attente de livraison
                                        </span>
                                        @else
                                        <span class="text-success">
                                           Livraison effectuée
                                        </span>
                                        @endif

                                        @endif

                                    </div>

                                    <div class="item-stock">
                                        @if ($prod->produit->quantite>0)
                                        Disponibilité :
                                        <span class="text-success"> En stock</span>
                                        @else
                                        Disponibilité :
                                        <span class="text-danger"> Epuisé</span>
                                        @endif
                                    </div>
                                    <p>

                                    </p>
                                    @if ($prod->livraison=='1')
                                    <div class="cart-action-area">
                                        <form action="{{ route('confirmUserLivraison') }}" method="post"
                                                    onsubmit="confirmLivraison(this)">
                                                    @csrf
                                                    <input type="text" name="produit_id" value="{{$prod->produit->id}}" hidden>
                                                    <input type="text" name="transaction_id" value="{{$prod->transaction_id}}" hidden>
                                                    <input type="text" name="p_id" value="{{$prod->id}}" hidden>

                                            <ul class="cart-quantity" >
                                                <li>
                                                    <button type="submit" class="item-btn">Confirmer lalivraison</button>
                                                </li>
                                            </ul>
                                        </form>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-product-tab">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a href="#description" data-toggle="tab" aria-expanded="false" class="active">Description</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#review" data-toggle="tab" aria-expanded="false">Commentaires (3)</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade active show" id="description">
                                        <p>
                                            {{ $prod->produit->description }}
                                        </p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="review">
                                        <p>
                                            Porem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                            nonummy nibh
                                            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
                                            wisi
                                            enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                                            lobortis
                                            nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit
                                            adipiscing
                                            elit ut laoreet dolore magna aliquam.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="related-product">
                        <h3 class="item-title title-bar-primary2">Produits similaire</h3>
                        <div class="rc-carousel nav-control-layout6" data-loop="true" data-items="2" data-margin="30"
                            data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false"
                            data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true"
                            data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true"
                            data-r-x-medium-dots="false" data-r-small="3" data-r-small-nav="true" data-r-small-dots="false"
                            data-r-medium="3" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="3"
                            data-r-large-nav="true" data-r-large-dots="false" data-r-extra-large="4"
                            data-r-extra-large-nav="false" data-r-extra-large-dots="false">
                            @include("parties.slideproduit")
                        </div>
                    </div>
                </div>
                <div class="sidebar-widget-area sidebar-break-md col-xl-3 col-lg-4 col-12">


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
    <!-- Shop Details End Here -->
@endsection
@section('autreScript')
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.datetimepicker.full.min.js') }}"></script>
    <script src="{{ asset('assets/parsley/js/parsley.js') }}"></script>
    <script src="{{ asset('assets/parsley/i18n/fr.js') }}"></script>

    <script type="text/javascript">

    </script>
@endsection
