<div>
    <div class="app-loader"><i class="icofont-spinner-alt-4 rotate"></i></div>

    <div class="main-content-wrap">
        <div class="d-flex align-items-center justify-content-between mb-2 mb-md-4">
            <h1 class="page-title mt-0 mb-0">Liste des médicaments</h1>
            <div class="block-tools d-flex align-items-center">
                <div class="block-search d-flex align-items-center">
                    <div class="content-input d-flex align-items-center">
                        <input type="text" class="form-control search-input" name="s" placeholder="Trouver un produit"
                        value="" wire:model.debounce.500ms="search">
                    </div>
                    <div class="block-icon-search">
                        <div class="suffix-icon icofont-search"></div>
                    </div>
                </div>
            </div>
            <div class="col col-lg-3" wire:loading>
                <div style="display: flex;justify-content: center;align-items:center;background-color:black;
                position : fixed; top:0px;left:0px;z-index:9999; width:100%;height: 100%; opacity: .75;">
                    <div style="color: #64d6e2" class="la-ball-clip-rotate-multiple la-3x">
                        <div></div>
                        <div></div>
                    </div>

                </div>
            </div>
        </div>
        <div class="page-content">
            <div class="row g-lg-4 g-3">
                @forelse ($allproduits as $p)
                <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3">
                    <div class="card card-prod-dash">
                        <div class="row">
                            <div class="col-4">
                                <a href="{{ route('detailProdui',['id'=>$p->id]) }}">
                                    <div class="block-img-prod png">
                                        <img src="{{ asset('assets/img/shop1.png') }}" class="card-img-top" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="col-8">
                                <div class="block-detail-prod">
                                    <span class="category">Médicament</span>
                                    <a href="{{ route('detailProdui',['id'=>$p->id]) }}">
                                        <h6 class="name-prod mt-0">{{ $p->nom }}</h6>
                                    </a>
                                    {{-- <span class="price">{{ $p->prix." ".$p->monaie }}</span> --}}
                                    <button class="btn btn-cart" wire:click.prevent="addTocards('{{ $p->id }}')" wire:loading.delay.attr='disabled'>
                                        <span class="icofont-ui-cart"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <span>Aucun produit trouvé</span>
                @endforelse

                {{-- <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3">
                    <div class="card card-prod-dash">
                        <div class="row">
                            <div class="col-4">
                                <a href="#">
                                    <div class="block-img-prod">
                                        <img src="{{ asset('assets/img/department-1.jpg') }}" class="card-img-top" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="col-8">
                                <div class="block-detail-prod">
                                    <span class="category">Médicament</span>
                                    <a href="#">
                                        <h6 class="name-prod mt-0">Aspirine</h6>
                                    </a>
                                    <button class="btn btn-cart">
                                        <span class="icofont-ui-cart"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3">
                    <div class="card card-prod-dash">
                        <div class="row">
                            <div class="col-4">
                                <a href="#">
                                    <div class="block-img-prod">
                                        <img src="{{ asset('assets/img/department-1.jpg') }}" class="card-img-top" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="col-8">
                                <div class="block-detail-prod">
                                    <span class="category">Médicament</span>
                                    <a href="#">
                                        <h6 class="name-prod mt-0">Aspirine</h6>
                                    </a>
                                    <button class="btn btn-cart">
                                        <span class="icofont-ui-cart"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3">
                    <div class="card card-prod-dash">
                        <div class="row">
                            <div class="col-4">
                                <a href="#">
                                    <div class="block-img-prod">
                                        <img src="{{ asset('assets/img/department-1.jpg') }}" class="card-img-top" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="col-8">
                                <div class="block-detail-prod">
                                    <span class="category">Médicament</span>
                                    <a href="#">
                                        <h6 class="name-prod mt-0">Aspirine</h6>
                                    </a>
                                    <button class="btn btn-cart">
                                        <span class="icofont-ui-cart"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- @forelse ($allproduits as $p)
                <div class="col-12 col-md-4">
                    <div class="card department bg-light bg-gradient">
                        <img src="{{ asset('assets/img/department-1.jpg') }}" class="card-img-top" width="100"
                            height="100" alt="">

                    <div class="ibox-content navbar-wrap">

                        <div class="card department bg-light bg-gradient">
                            <img src="{{ asset('assets/img/department-1.jpg') }}" class="card-img-top" width="100"
                                height="100" alt="">

                            <div class="card-body">
                                <h3 class="h4 mt-0">{{ $p->nom }}</h3>

                                <div class="team d-flex align-items-center mb-4">
                                    <strong class="me-3">Catégorie :</strong>
                                    @forelse ($p->categorie as $c)
                                    <img src="{{ asset('assets/img/doctor-400-1.jpg') }}" width="40" height="40" alt=""
                                        class="team-img rounded-500">
                                    @empty

                                    @endforelse

                                    <a class="btn btn-primary btn-square rounded-pill" type="button"
                                        href="{{ route('detailProdui',['id'=>$p->id]) }}">
                                        <span class="btn-icon icofont-info"></span>
                                    </a>
                                </div>

                                <p>{{ Str::limit($p->description, 50, '...') }}</p>

                                <div class="button-box pb-2">
                                    <button type="button" class="btn btn-outline-primary"
                                        wire:click.prevent="addTocards('{{ $p->id }}')"
                                        wire:loading.delay.attr='disabled'>
                                        Ajouter au <span class="btn-icon icofont-ui-cart ms-2"></span>
                                    </button>
                                </div>

                            </div>

                            <p>{{ Str::limit($p->description, 50, '...') }}</p>

                            <div class="button-box pb-2">
                                <button type="button" class="btn btn-outline-primary" wire:click.prevent="addTocards('{{ $p->id }}')" wire:loading.delay.attr='disabled'>
                                    Ajouter au <span class="btn-icon icofont-ui-cart ms-2"
                                    ></span>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
                @empty
                <span>Aucun produit trouvé</span>
                @endforelse --}}
                <div class="col-12 form-group text-center">

                    {{ $allproduits->links() }}

                </div>
            </div>
        </div>
    </div>
</div>
