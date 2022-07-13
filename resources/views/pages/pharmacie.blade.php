@extends('templates.template')
@section('title', 'Pharmacie')
@section('page', 'Notre pharmacie')

@section('autreStyle')
    <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.datetimepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/parsley/parsley.css') }}">
@endsection
@section('content')
    @include('parties.banner')
    <!-- Shop Area Start Here -->
    <section class="shop-wrap-layout1 bg-light-primary100">
        <div class="container">
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
                                                <a href="#" title="Ajouter au panier">
                                                    <form action="" method="post" onsubmit="addToCart(this)">
                                                        @csrf
                                                        <input type="text" name='idProd' class="form-control" value="{{ $p->id }}"
                                                            placeholder="" hidden>
                                                        <input type="text" name='quantity' class="form-control quantity-input" value="1"
                                                            placeholder="1" hidden>
                                                        <button type="submit" style="background: transparent; border: none">
                                                            <i class="flaticon-shopping-cart"></i>
                                                        </button>
                            
                                                    </form>
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
@endsection
@section('autreScript')
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.datetimepicker.full.min.js') }}"></script>
    <script src="{{ asset('assets/parsley/js/parsley.js') }}"></script>
    <script src="{{ asset('assets/parsley/i18n/fr.js') }}"></script>
    <script type="text/javascript">
       
    </script>
@endsection
