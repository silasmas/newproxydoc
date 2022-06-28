@extends('templates.template')

@section('title', 'Historique')
@section('page2', 'Detail historique')
@section('parent')
    <li>
        <a href="{{ route('historique') }}">Abonnements achéter</a>
    </li>
@endsection
@section('content')
    @include('parties.banner')
    <!-- Special Offer Start Here -->
    <section class="why-choose-wrap-layout1">
        <div class="container">
            <div class="text-center section-heading heading-dark heading-layout3">
                <h2>Detail de la transaction</h2>
                <p>Trouvez ici le detail chaque service inclut dans cet abonnement
                    et les avantages</p>
            </div>
            <div class="single-departments-box-layout1">
                <div class="item-content">
                    <div class="row">
                        <div class="col-12">
                            <div class="item-cost">
                                <h3 class="item-title title-bar-primary7">Our Pricing Plan</h3>
                                <ul>
                                    <li><span>{{ $detail->montant }}</span></li>
                                    {{-- @forelse ($detail->reponse as $d)
                            @empty
                                
                            @endforelse --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Special Offer End Here -->

@endsection
