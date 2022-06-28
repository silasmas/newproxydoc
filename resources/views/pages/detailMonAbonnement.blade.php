@extends('templates.template')

@section('title', 'Mes abonnements')
@section('page2', 'Detail abonnement')
@section('parent')
    <li>
        <a href="{{ route('mesAbonnements') }}">Abonnements achéter</a>
    </li>
@endsection
@section('content')
    @include('parties.banner')
    <!-- Special Offer Start Here -->
    <section class="why-choose-wrap-layout1">
        <div class="container">
            <div class="text-center section-heading heading-dark heading-layout3">
                <h2>Detail de votre abonnement <b>{{ $ab->nom }}</b></h2>
                <p>Trouvez ici le detail chaque service inclut dans cet abonnement et les avantages</p>
            </div>
            <!-- Why Choose Area Start Here -->
            <section class="why-choose-wrap-layout1">
                <div class="container">
                    <div class="row">
                        <div class="why-choose-box-layout1 col-lg-8">
                            <div class="choose-list-layout1">
                                <div class="panel-group" id="accordion">
                                    @forelse ($ab->service as $a)
                                        <div class="panel panel-default">
                                            <div class="panel-heading {{ $loop->first ? 'active' : '' }}">
                                                <div class="panel-title">
                                                    <a aria-expanded="false"
                                                        class="accordion-toggle {{ $loop->first ? '' : 'collapsed' }}"
                                                        data-toggle="collapse" data-parent="#accordion"
                                                        href="#{{ $a->id }}">
                                                        {{ $a->nom }}
                                                    </a>
                                                </div>
                                            </div>
                                            <div aria-expanded="false" id="{{ $a->id }}" role="tabpanel"
                                                class="panel-collapse collapse {{ $loop->first ? 'show' : '' }}">
                                                <div class="panel-body">
                                                    <div class="single-departments-box-layout1">
                                                        <p>Liste des avantages pour ce service :</p>
                                                        <div class="item-content">
                                                            <div class="item-content-wrap">
                                                                <ul class="department-info">
                                                                    @forelse ($a->acte as $ac)
                                                                    <li><b>{{ $ac->nom }}</b>
                                                                    <p>
                                                                    {{ $ac->description }}    
                                                                    </p></li>                                                                        
                                                                    @empty
                                                                        
                                                                    @endforelse
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                    @endforelse
                                </div>
                            </div>
                        </div>
                        <div class="why-choose-box-layout2 col-lg-4">
                            <img src="{{ asset('assets/img/slider/about2.png') }}" alt="about" class="img-fluid">
                        </div>
                    </div>
                </div>
            </section>
            <!-- Why Choose Area End Here -->
        </div>
    </section>
    <!-- Special Offer End Here -->

@endsection
