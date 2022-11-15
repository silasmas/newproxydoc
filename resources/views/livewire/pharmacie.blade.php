<div>
    <!-- Shop Area Start Here -->
<section class="shop-wrap-layout1 bg-light-primary100">
    <div class="container">
        <div class="row mb-5">
            <div class="col col-lg-9">
                <div class="input-group rounded">
                    <input style="padding-top: 16px!important; padding-bottom: 16px!important;" type="search" class="form-control rounded fs-4"
                    placeholder="Trouver un produit" aria-label="Trouver un produit" aria-describedby="search-addon"
                    wire:model.debounce.500ms="search" name="s"/>
                    <button style="padding-top: 10px!important; padding-bottom: 22px!important;" class="input-group-text btn btn-primary fs-4 shadow-0" id="search-addon">
                      <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-9 col-lg-8 col-12">
                <div class="row">
                @forelse ($allproduits as $p)
                    <div class="col-sm-6 col-12">
                        <div class="card mb-4 overflow-hidden hover">
                            <div class="row">
                                <div class="col-lg-4 bg-light overflow-hidden border-end border-default" style="max-height: 16rem">
                                    <img src="{{ !empty($p->img1) ? $p->img1 : asset('assets/img/shop1.png') }}" alt="" class="img-fluid align-middle" />
                                </div>
                                <div class="col-lg-8 ps-lg-0 text-lg-left text-center">
                                    <div class="card-body ps-4 pt-5">
                                        <h4 class="card-title">{{ $p->nom }}</h4>
                                        <p class="card-text mb-3">Prix : {{ $p->prix . ' ' . $p->monaie }}</p>
                                        <p class="m-0">
                    @forelse ($p->categorie as $c)
                                            <div class="badge badge-secondary me-2 fw-normal">{{ $c->nom }}</div>
                    @empty
                    @endforelse
                                        </p>
                                    </div>
                                    <div class="card-footer pe-sm-4 pe-5 d-flex justify-content-between" >
                                        <a href="#"  class="card-link fs-lg-4" wire:click.prevent="addTocards('{{ $p->id }}')" title="Ajouter au panier">
                                            <i class="flaticon-shopping-cart align-middle"></i> <span class="" wire:loading.class='disabled'>Ajouter au panier</span>
                                        </a>
                                        <a href="{{ route('detailProdui',['id'=>$p->id]) }}" class="card-link text-dark" title="Voir en detail">
                                            <i class="fa fa-arrow-right align-bottom"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
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
