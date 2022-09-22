<section class="single-product-wrap bg-light-primary100">
    <div class="container">
        <div class="row no-gutters">
            @if (Cart::count() <= 0)
                <div class="col-6 margin-b-30r">
                    <h1 class="text-danger">Votre Panier est vide</h1>
                </div>
            @else
                <div class="col-xl-7 col-lg-7 col-12 margin-b-30r">
                    <div class="appointment-box-layout1 pt-0">
                        <div class="widget widget-categories">
                            <h2 class="title title-bar-primary2" style="margin-top: 20px">Vos Produits :</h2>
                            <ul>
                                @forelse (Cart::content() as $c)
                                    <li>
                                        <a href="{{ route('detailProdui', ['id' => $c->model->id]) }}">
                                            <img alt="single" src="{{ asset('assets/img/shop1.png') }}"
                                                class="img-responsive" height="100" width="100">

                                            {{ $c->model->nom }}
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <label style="margin-left: 10px">
                                                ({{ $c->model->monaie . '' . $c->price }} X {{ $c->qty }})
                                            </label>

                                            <label
                                                style="margin-left: 30px">{{ $c->model->monaie . '' . $c->subtotal() }}</label>

                                            <span> 
                                                <div class="cart-trash" x-data="{id:'{{ $c->rowId }}'}">
                                                    <form @submit.prevent="$wire.deletConfirm(id)">
                                                        
                                                        <button type="submit"  
                                                            style="background: transparent; border: none;cursor: pointer;">
                                                            <i class="far fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </span>
                                        </a>
                                    </li>
                                @empty
                                @endforelse

                            </ul>
                            <hr>
                           <div class="row align-items-start mt-4">
                                <div class="col-lg-9">
                                    <small class='text-danger'>La livraison à domicile est accéptée pour les achats supérieure à
                                        <b>10$</b></small>
                                </div>
                                <div class="col-lg-3 d-flex justify-content-end">
                                    <button class="btn btn-zone" data-toggle="modal" data-target="#modal-zone">Zone de livraison</button>
                                </div>
                                @if (Cart::total() >= 10)
                                <div class="col-12 form-group carte mt-4">
                                    <select class="select2 comm" name="channels"
                                        onchange="switch_livraisone(this.value)" id='livraisonChoice'>
                                        <option value="" selected>Voulez-vous être livré à domicile?
                                        </option>
                                        <option value="OUI">OUI</option>
                                        <option value="NON">NON</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div id="commune" class="col-12 form-group commune" style="display: none">
                                    @include('pages.listeCommune')
                                </div>
                                <div class="col-12">
                                    <div class="total">
                                        <span>Livraison : </span>
                                        <span>$ {{ Session::get('priceLivraison', '0') }}</span>
                                    </div>
                                </div>
                            @endif
                            <div class="col-12">
                                <div class="total">
                                    <span>Sous-total :
                                    </span>
                                    <span>
                                        $ {{ Cart::subtotal() }}
                                    </span>
                                </div>
                                <div class="total">
                                    <span>Tax :
                                    </span>
                                    <span>
                                        $ {{ Cart::tax() }}
                                    </span>
                                </div>

                                <hr>
                                <div class="total">
                                    <span>Totale :
                                    </span>
                                    <span>
                                        $ {{ Cart::total() + Session::get('priceLivraison', '0') }}
                                    </span>
                                </div>
                            </div>
                           </div>



                        </div>
                    </div>

                </div>
                <div class="col-xl-5 col-lg-5 col-12">
                    <div class="">
                        <div class="appointment-box-layout1 pt-0">
                            <div class="col-xl-12 ">
                                <p class="text-danger">
                                    @if (session()->has('message'))
                                        {{ session()->get('message') }}
                                    @endif
                                </p>
                                @foreach ($errors->all() as $err)
                                    <p class="text-danger">
                                        {{ $err }}
                                    </p>
                                @endforeach
                            </div>
                            @guest
                                <h2 class="title title-bar-primary2">Votre compte</h2>
                                <p>
                                    J'ai un compte <a href="{{ route('login') }}">Me connecter</a>
                                </p>
                            @endguest
                            <form action="{{ url('achatProduit') }}" method="POST" data-parsley-validate>
                                @csrf
                                @guest
                                    <div class="row gutters-15">
                                        <div class="col-md-12 form-group">
                                            <input type="email" placeholder="E-mail *" class="form-control" name="email"
                                                id="form-email" value="{{ old('email') }}"
                                                data-error="E-mail field is required" data-parsley-trigger="change"
                                                required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input type="text" placeholder="Votre Nom*" class="form-control"
                                                name="name" id="name" value="{{ old('name') }}"
                                                data-error="Champ obligatoire" data-parsley-minlength="3"
                                                data-parsley-trigger="change" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input type="text" placeholder="Votre prenom*" class="form-control"
                                                name="prenom" id="prenom" data-error="Champ obligatoir" required
                                                value="{{ old('prenom') }}" data-parsley-minlength="3"
                                                data-parsley-trigger="change" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <input type="text" placeholder="Téléphone *" class="form-control"
                                                name="telephone" id="telephone" data-error="Champ obligatoire" required
                                                value="{{ old('telephone') }}" data-parsley-minlength="3"
                                                data-parsley-trigger="change">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input type="password" placeholder="Mot de passe *" class="form-control"
                                                data-parsley-minlength="5" data-parsley-trigger="change" name="password"
                                                id="password" data-error="Champ obligatoire" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input type="password" placeholder="Repetez mot de passe"
                                                class="form-control" name="password_confirmation"
                                                id="password_confirmation" data-parsley-equalto="#password"
                                                data-parsley-minlength="5" data-parsley-trigger="change"
                                                data-error="Champ obligatoire" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                @endguest

                                <h2 class="title title-bar-primary2">Procédez au paiement</h2>
                                <div class="row gutters-15">
                                    <div>
                                        {{-- @if (isset($ab) && $ab != '') --}}
                                        <div class="col-12 form-group">
                                            {{-- <input type="text" class="form-control" name="abonnement_id"
                                                    value="{{ $ab->id }}" id="abonnement_id"
                                                    data-error="Name field is required" required>
                                                <div class="help-block with-errors"></div> --}}
                                        </div>
                                        <div class="col-12 form-group">
                                            {{-- <input type="text" class="form-control" name="prix"
                                                    value="{{ Cart::total() }}" id="prix">
                                                <div class="help-block with-errors"></div> --}}
                                        </div>
                                        <div class="col-12 form-group">
                                            {{-- <input type="text" class="form-control" name="monaie"
                                                    value="{{ $ab->model->monaie=="$"?"USD":"CDF"}}" id="monaie">
                                                <div class="help-block with-errors"></div> --}}
                                        </div>
                                        {{-- @endif --}}
                                    </div>

                                    <div class="col-12 form-group carte">
                                        <select class="select2 moyen" name="channels"
                                            onchange="switch_modepaie(this.value)" data-error="Champ obligatoire"
                                            id='channels' required>
                                            <option value="" selected>Selectionnez le moyen de paiement *
                                            </option>
                                            <option value="MOBILE_MONEY">Mobile money</option>
                                            <option value="CREDIT_CARD">Carte bancaire</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <section class="col-12 " id="carte" style="display: none">
                                        @include('pages.listepays')

                                        <div class="col-12 form-group">
                                            <input type="text" placeholder="Votre ville *"
                                                class="form-control carte2" value="{{ old('customer_city') }}"
                                                name="customer_city" id="customer_city"
                                                data-error="Name field is required">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <input type="text" placeholder="Code postal *"
                                                value="{{ old('customer_zip_code') }}" class="form-control carte2"
                                                name="customer_zip_code" id="customer_zip_code">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="state" id="state" style="display: none">

                                        </div>
                                        @include('pages.etatUs')
                                        @include('pages.etatCa')

                                        <div class="col-12 form-group">
                                            <textarea placeholder="Votre adresse" class="textarea form-control carte2" name="customer_address"
                                                id="customer_address" rows="5" cols="20">
                                                {{ old('customer_address') }}
                                        </textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </section>
                                    <div class="col-12 form-group text-right">
                                        <button class="item-btn">Envoyer le paiement</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>

<div class="modal fade modal-zone" id="modal-zone" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Liste de zones</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <nav>
                <div class="nav nav-tabs nav-zone" id="nav-tab" role="tablist">
                  <button class="nav-link active" id="nav-home-tab" data-toggle="tab" data-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Zone A</button>
                  <button class="nav-link" id="nav-profile-tab" data-toggle="tab" data-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Zone B</button>
                  <button class="nav-link" id="nav-contact-tab" data-toggle="tab" data-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Zone C</button>
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="d-flex justify-content-end">
                        <p class="tarif">Tarif de livraison : <span>30$</span></p>
                    </div>
                    <div class="list-zone">
                        <div class="item-zone d-flex justify-content-between">
                            <h5>Bandal</h5>

                        </div>
                        <div class="item-zone d-flex justify-content-between">
                            <h5>Bandal</h5>

                        </div>
                        <div class="item-zone d-flex justify-content-between">
                            <h5>Bandal</h5>

                        </div>
                        <div class="item-zone d-flex justify-content-between">
                            <h5>Bandal</h5>

                        </div>
                        <div class="item-zone d-flex justify-content-between">
                            <h5>Bandal</h5>

                        </div>
                        <div class="item-zone d-flex justify-content-between">
                            <h5>Bandal</h5>

                        </div>
                        <div class="item-zone d-flex justify-content-between">
                            <h5>Bandal</h5>

                        </div>
                        <div class="item-zone d-flex justify-content-between">
                            <h5>Bandal</h5>

                        </div>
                        <div class="item-zone d-flex justify-content-between">
                            <h5>Bandal</h5>

                        </div>

                        <div class="item-zone d-flex justify-content-between">
                            <h5>Bandal</h5>

                        </div>
                        <div class="item-zone d-flex justify-content-between">
                            <h5>Bandal</h5>

                        </div>
                        <div class="item-zone d-flex justify-content-between">
                            <h5>Bandal</h5>

                        </div>

                    </div>

                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
              </div>

        </div>
        <div class="badge-zone">
            <span>Zone A</span>
        </div>
      </div>
    </div>
  </div>
