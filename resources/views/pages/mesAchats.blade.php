@extends('templates.template')
@section('title', 'Mes achats')
@section('page', 'Mes produits')

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
                        @forelse ($produitsAcheter as $p)
                            <div class="col-xl-3 col-lg-6 col-md-3 col-sm-6 col-12">
                                <div class="shop-box-layout1 margin-b-30">
                                    <div class="item-img">
                                        <img src="{{ asset('assets/img/shop1.png') }}" alt="shop" class="img-fluid">
                                        <ul class="shop-action-items">
                                            <li>
                                                @if ($p->livraison=='1')
                                                <form action="{{ route('confirmUserLivraison') }}" method="post"
                                                    onsubmit="confirmLivraison(this)">
                                                    @csrf
                                                    <input type="text" name="produit_id" value="{{$p->produit->id}}" hidden>
                                                    <input type="text" name="transaction_id" value="{{$p->transaction_id}}" hidden>
                                                    <input type="text" name="p_id" value="{{$p->id}}" hidden>
                                                    <a type="submit" alt="" title="Confirmez la livraison" style="cursor: pointer;">
                                                        {{-- <i class="flaticon-exchange-arrows"></i> --}}
                                                        <button type="submit" style="background: transparent; border: none;cursor: pointer;"
                                                        title="confirmez la livraison" >
                                                            <i class="flaticon-exchange-arrows"></i>
                                                        </button>
                                                    </a>
                                                </form>
                                                @else
                                                <a href="{{ route('detailProduitAcheter',['id'=>$p->id]) }}" alt="" title="Voir en detail" style="cursor: pointer;">
                                                    <i class="flaticon-exchange-arrows"></i>
                                                </a>
                                                @endif
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="item-content">
                                        <h4 class="item-title">
                                            <a href="{{ route('detailProdui',['id'=>$p->id]) }}">{{ $p->produit->nom }}</a>
                                        </h4>
                                        <h5 class="item-title">
                                            <a href="{{ route('detailProduitAcheter',['id'=>$p->id]) }}">Voir en detail</a>
                                        </h5>

                                    </div>
                                    @switch($p->livraison)
                                        @case("0")
                                        <small class="text-danger">
                                            Ce produit ne sera pas livré à domicile
                                        </small>
                                            @break
                                        @case("1")
                                        <small class="text-warning">Ce produit vous sera livré à domicile</small>
                                            @break
                                        @case("2")
                                        <small class="text-success">Ce produit est déjà livré</small>
                                            @break
                                        @default

                                    @endswitch
                                </div>
                            </div>
                @empty

                    @endforelse


                </div>
                {{-- <div class="col-12 form-group text-center">

                    {{ $allproduits->links() }}

                </div> --}}
            </div>
            <div class="sidebar-widget-area sidebar-break-md col-xl-3 col-lg-4 col-12">
               {{-- @include("parties.categorie") --}}

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
