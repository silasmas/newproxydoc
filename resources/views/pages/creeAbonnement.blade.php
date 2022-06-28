@extends('templates.template')

@section("title","S'abonner")
@section("page","Abonnement")
@section("page2","caisse")
@section("parent")
<li>
    <a href="{{ route('abonnement') }}">Abonnement</a>
</li> 
@endsection

@section('autreStyle')
    <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.datetimepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/parsley/parsley.css') }}">
    <link href="{{ asset('js/sweetalert/sweetalert.css') }}" rel="stylesheet">
@endsection

@section('content')
@include("parties.banner")
  
<section class="appointment-wrap-layout1 bg-light-accent100">
   <div class="container">
       <div class="row no-gutters">

           <div class="col-xl-6">
               <div class="appointment-box-layout1">

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
                       <div class="col-12 form-group text-center">
                           <button class="item-btn factureVue" value="cacher" onclick="viewFacture(this)">
                               Derouler la facture
                           </button>
                       </div>
                       <div id='facture' hidden>
                           <h2 class="title title-bar-primary2">
                               Detail de la facture
                           </h2>
                           <div class="single-product-tab">
                               <div class="row">
                                   <div class="col-lg-12 col-md-12 col-sm-12">
                                       <ul class="nav nav-tabs">
                                           <li class="nav-item">
                                               <a href="#description" data-toggle="tab" aria-expanded="false"
                                                   class="active">Detail</a>
                                           </li>
                                           <li class="nav-item">
                                               <a href="#review" data-toggle="tab" aria-expanded="false">
                                                   Description({{ count($services) }})</a>
                                           </li>
                                       </ul>
                                   </div>
                                   <div class="col-lg-12 col-md-12 col-sm-12">
                                       <div class="tab-content">
                                           <div role="tabpanel" class="tab-pane fade active show" id="description">
                                               {{-- <p></p> --}}
                                               <ul class="list-content">
                                                   <li>Abonnement : {{ $ab->nom }} </li>
                                                   <li>Total à payer :
                                                       {{ $ab->prix }}{{ $ab->monaie == 'USD' ? "$" : 'FC' }}</li>
                                                   <li>Durée : {{ $ab->duree . $ab->temps }}</li>
                                               </ul>
                                           </div>
                                           <div role="tabpanel" class="tab-pane fade" id="review">
                                               <ul class="list-content">
                                                   @forelse ($services as $s)
                                                       <li>Abonnement : {{ $s->nom }} </li>
                                                       @foreach ($s->acte as $a)
                                                           <small>
                                                               {{ $a->nom }},
                                                           </small>
                                                       @endforeach
                                                   @empty
                                                   @endforelse
                                               </ul>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <hr>
                           </div>
                       </div>
                   </div>
                  @guest
                  <h2 class="title title-bar-primary2">Créer votre compte</h2>
                  <p>
                      J'ai un compte <a href="{{ route('login') }}">Me connecter</a>
                  </p>
                  @endguest
                   <form action="{{ url('abonnement') }}" method="POST" data-parsley-validate>
                       @csrf
                       @guest
                           <div class="row gutters-15">
                               <div class="col-md-12 form-group">
                                   <input type="email" placeholder="E-mail *" class="form-control" name="email"
                                       id="form-email" value="{{ old('email') }}"
                                       data-error="E-mail field is required" data-parsley-trigger="change" required>
                                   <div class="help-block with-errors"></div>
                               </div>
                               <div class="col-md-6 form-group">
                                   <input type="text" placeholder="Votre Nom*" class="form-control" name="name"
                                       id="name" value="{{ old('name') }}" data-error="Champ obligatoire"
                                       data-parsley-minlength="3" data-parsley-trigger="change" required>
                                   <div class="help-block with-errors"></div>
                               </div>
                               <div class="col-md-6 form-group">
                                   <input type="text" placeholder="Votre prenom*" class="form-control" name="prenom"
                                       id="prenom" data-error="Champ obligatoir" required
                                       value="{{ old('prenom') }}" data-parsley-minlength="3"
                                       data-parsley-trigger="change" required>
                                   <div class="help-block with-errors"></div>
                               </div>
                               <div class="col-md-12 form-group">
                                   <input type="text" placeholder="Téléphone *" class="form-control" name="telephone"
                                       id="telephone" data-error="Champ obligatoire" required
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
                                   <input type="password" placeholder="Repetez mot de passe" class="form-control"
                                       name="password_confirmation" id="password_confirmation"
                                       data-parsley-equalto="#password" data-parsley-minlength="5"
                                       data-parsley-trigger="change" data-error="Champ obligatoire" required>
                                   <div class="help-block with-errors"></div>
                               </div>
                           </div>
                       @endguest

                       <h2 class="title title-bar-primary2">Procédez au paiement</h2>
                       <div class="row gutters-15">
                           <div {{ isset($ab) && $ab != '' ? 'hidden' : '' }}>
                               @if (isset($ab) && $ab != '')
                                   <div class="col-12 form-group">
                                       <input type="text" class="form-control" name="abonnement_id"
                                           value="{{ $ab->id }}" id="abonnement_id"
                                           data-error="Name field is required" required>
                                       <div class="help-block with-errors"></div>
                                   </div>
                                   <div class="col-12 form-group">
                                       <input type="text" class="form-control" name="prix"
                                           value="{{ $ab->prix }}" id="prix">
                                       <div class="help-block with-errors"></div>
                                   </div>
                                   <div class="col-12 form-group">
                                       <input type="text" class="form-control" name="monaie"
                                           value="{{ $ab->monaie }}" id="monaie">
                                       <div class="help-block with-errors"></div>
                                   </div>
                               @endif
                           </div>

                           <div class="col-12 form-group carte">
                               <select class="select2 moyen" name="channels" onchange="switch_modepaie(this.value)"
                                   data-error="Champ obligatoire" id='channels' required>
                                   <option value="" selected>Selectionnez le moyen de paiement *</option>
                                   <option value="MOBILE_MONEY">Mobile money</option>
                                   <option value="CREDIT_CARD">Carte bancaire</option>
                               </select>
                               <div class="help-block with-errors"></div>
                           </div>
                           <section class="col-12 " id="carte" style="display: none">
                               @include('pages.listepays')

                               <div class="col-12 form-group">
                                   <input type="text" placeholder="Votre ville *" class="form-control carte2"
                                       value="{{ old('customer_city') }}" name="customer_city" id="customer_city"
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
                            @include("pages.etatUs")
                            @include("pages.etatCa")
                               {{-- <div class="col-md-12 form-group">
                                   <input type="text" placeholder="Votre Etat *" class="form-control carte2"
                                       name="customer_state" id="customer_state"
                                       value="{{ old('customer_state') }}">
                                   <div class="help-block with-errors"></div>
                               </div> --}}
                               
                               <div class="col-12 form-group">
                                   <textarea placeholder="Votre adresse" class="textarea form-control carte2" name="customer_address" id="customer_address"
                                       rows="5" cols="20">
                                       {{ old('customer_address') }}
                                   </textarea>
                                   <div class="help-block with-errors"></div>
                               </div>
                           </section>
                           <div class="col-12 form-group text-center">
                               <button class="item-btn">Envoyer le paiement</button>
                           </div>

                       </div>
                   </form>
               </div>
           </div>
           <div class="col-xl-6">
               <div class="appointment-banner">
                   <img src="{{ asset('assets/img/slider/figure2.png') }}" alt="appointment" class="img-fluid">
               </div>
           </div>
       </div>
   </div>
</section>
@endsection

@section('autreScript')
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.datetimepicker.full.min.js') }}"></script>
    <script src="{{ asset('assets/parsley/js/parsley.js') }}"></script>
    <script src="{{ asset('assets/parsley/i18n/fr.js') }}"></script>
    <script src="{{ asset('js/sweetalert/sweetalert.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var moyen = document.querySelector('select.moyen').value;
            switch_modepaie(moyen);
            var state = document.querySelector('select.carte2').value;
            switch_state(state);
        });

        function viewFacture(val) {
            // alert(val.value)
            if (val.value === "cacher") {
                document.querySelector('.factureVue').setAttribute("value", "vue");

                val.textContent = "Rouler la facture";
                document.querySelector('#facture').removeAttribute("hidden");

            } else {
                val.textContent = "Derouler la facture";
                document.querySelector('.factureVue').setAttribute("value", "cacher");
                document.querySelector('#facture').setAttribute("hidden", "");
            }
        }

        function switch_modepaie(val) {
            switch (val) {
                case "MOBILE_MONEY":
                    // document.getElementById('carte').setAttribute('hidden');
                    document.getElementById('carte').style.display = "none";

                    var el = document.querySelectorAll('input.carte2');
                    document.querySelector('select.carte2').removeAttribute("required");
                    document.querySelector('textarea.carte2').removeAttribute('required');

                    el.forEach(element => {
                        element.removeAttribute("required");
                    });
                    break;
                case "CREDIT_CARD":
                    var el = document.querySelectorAll('input.carte2');
                    document.querySelector('select.carte2').setAttribute('required', "true");
                    el.forEach(element => {
                        element.setAttribute('required', "true");
                    });
                    document.getElementById('carte').style.display = "block";
                    document.querySelector('textarea.carte2').setAttribute('required', "true");
                    break;
                case "":
                    document.getElementById('carte').style.display = "none";

                    var el = document.querySelectorAll('input.carte2');
                    document.querySelector('select.carte2').removeAttribute("required");;
                    el.forEach(element => {
                        element.removeAttribute("required");
                    });

                    break;
            }
        }
        function switch_state(val) {
            switch (val) {
                case "US":
                    document.getElementById('state').style.display = "block";
                    document.getElementById('us').style.display = "block";
                    document.getElementById('ca').style.display = "none";

                    document.querySelector('select.carteca').removeAttribute('required');
                    document.querySelector('select.carteus').setAttribute('required', "true");

                    break;
                case "CA":
                    document.getElementById('state').style.display = "block";

                    document.querySelector('select.carteus').removeAttribute('required');
                    document.querySelector('select.carteca').setAttribute('required', "true");

                    document.getElementById('ca').style.display = "block";
                    document.getElementById('us').style.display = "none";

                    break;

                default:
                    document.getElementById('state').style.display = "none";
                    document.getElementById('us').style.display = "none";
                    document.getElementById('ca').style.display = "none";

                    document.querySelector('select.carteus').removeAttribute('required');
                    document.querySelector('select.carteca').removeAttribute('required');
                    // document.querySelector('input.carte3').removeAttribute('required');
                    break;
            }
        }
    </script>
@endsection

