<div>
    <div class="app-loader"><i class="icofont-spinner-alt-4 rotate"></i></div>

    <div class="main-content-wrap">
        <header class="page-header">
            <h1 class="page-title">Liste des médicaments</h1>
        </header>
        <div class="row">
            <div class="col col-lg-9" style="margin-top: 50px">
                <div class="form-group d-xl-block " id="top-search-form">
                    <input type="text" class="form-control search-input" name="s" placeholder="Trouver un produit"
                        value="" wire:model.debounce.500ms="search">
                </div>
            </div>
        </div>
        <div class="page-content">
            <div class="row">
                @forelse ($allproduits as $p)
                <div class="col-12 col-md-4">
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
                @endforelse
                <div class="col-12 form-group text-center">

                    {{ $allproduits->links() }}

                </div>
            </div>
        </div>
    </div>
</div>