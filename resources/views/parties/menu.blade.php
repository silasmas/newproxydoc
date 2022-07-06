   <!-- Header Area Start Here -->

   <header id="header_1">
       <div class="header-top-bar top-bar-border-bottom bg-light-primary100 d-none d-md-block">
           <div class="container">
               <div class="row">
                   <div class="col-xl-8 col-lg-12 col-md-12 col-12 header-contact-layout1">
                       <ul>
                           <li>
                               @env('staging')
                               {{ 'The application is running in staging' }}
                               @endenv

                               @env(['staging', 'production'])
                               {{ 'The application is running in staging production' }}
                               @endenv
                               <i class="fas fa-phone"></i>Call: 123 884400
                           </li>
                           <li>
                               <i class="fas fa-map-marker-alt"></i>Medilink ltd, 59 Newyork City
                           </li>
                           <li>
                               <i class="far fa-clock"></i>Mon - Fri: 9.00am - 11.00pm
                           </li>
                       </ul>
                   </div>
                   <div class="col-xl-4 d-none d-xl-block">
                       <ul class="header-social-layout1">
                           <li>
                               <a href="#">
                                   <i class="fab fa-facebook-f"></i>
                               </a>
                           </li>
                           <li>
                               <a href="#">
                                   <i class="fab fa-twitter"></i>
                               </a>
                           </li>
                           <li>
                               <a href="#">
                                   <i class="fab fa-linkedin-in"></i>
                               </a>
                           </li>
                           <li>
                               <a href="#">
                                   <i class="fab fa-pinterest"></i>
                               </a>
                           </li>
                           <li>
                               <a href="#">
                                   <i class="fab fa-skype"></i>
                               </a>
                           </li>
                       </ul>
                   </div>
               </div>
           </div>
       </div>
       <div class="header-menu-area header-menu-layout4">
           <div class="container">
               <div class="row no-gutters d-flex align-items-center">
                   <div class="col-lg-1 col-md-1 logo-area-layout1">
                       <a href="{{ route('home') }}" class="temp-logo">
                           <img src="{{ asset('assets/img/proxy/11-12.png') }}" alt="Proxydoc" height="200"
                               width="200" class="img-fluid">
                       </a>
                   </div>
                   <div class="col-lg-6 col-md-6 possition-static">
                       <div class="template-main-menu">
                           <nav id="dropdown">
                               <ul>
                                   <li class="active">
                                       <a href="{{ route('home') }}">Accueil</a>
                                   </li>
                                   <li>
                                       <a href="{{ route('about') }}">Apropo</a>
                                   </li>
                                   <li>
                                       <a href="{{ route('services') }}">Nos services</a>
                                   </li>
                                   <li>
                                       <a href="{{ route('docteur') }}">Nos docteurs</a>
                                   </li>

                                   @guest
                                       <li class="hide-on-desktop-menu">
                                           <a href="{{ route('login') }}" class="action-items-primary-btn">Connéxion</a>
                                       </li>
                                   @endguest

                                   <li class="hide-on-desktop-menu">
                                       <a href="{{ route('abonnement') }}"
                                           class="action-items-primary-btn">S'abonner</a>
                                   </li>
                                   <li class="hide-on-desktop-menu">
                                       <a href="{{ Cart::count() > 0 ? route('monpanier') : '#' }}"
                                           class="action-items-primary-btn">Mon panier ({{ Cart::count() }})</a>
                                   </li>

                                   @auth
                                       <li class="hide-on-desktop-menu">
                                           <a href="#">Mon compte</a>
                                           <ul class="dropdown-menu-col-1">
                                               <li>
                                                   <a href="{{ route('mesAbonnements') }}">Mes abonnements</a>
                                               </li>
                                               <li>
                                                   <a href="{{ route('profil') }}">Mon profil</a>
                                               </li>
                                               <li>
                                                   <a href="{{ route('historique') }}">Historique d'achats</a>
                                               </li>
                                               <li>
                                                   <a class="" href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                                       Déconnexion
                                                   </a>
                                                   <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                       class="d-none">
                                                       @csrf
                                                   </form>
                                               </li>
                                           </ul>
                                       </li>
                                   @endauth

                               </ul>
                           </nav>
                       </div>
                   </div>
                   <div class="col-lg-5 col-md-5">
                       <div class="header-action-items-layout1 d-flex align-items-center justify-content-end">
                           <ul>
                               @guest
                                   <li>
                                       <a href="{{ route('login') }}" class="action-items-primary-btn">Connéxion<i
                                               class="fas fa-chevron-right"></i></a>
                                   </li>
                               @endguest

                               <li>
                                   <a href="{{ route('abonnement') }}" class="action-items-primary-btn">S'abonner<i
                                           class="fas fa-chevron-right"></i></a>
                               </li>
                               <li class="cart-area-dark">
                                   <a class="cart-trigger-icon ml-5"
                                       href="{{ Cart::count() > 0 ? route('monpanier') : '#' }}">
                                       <i class="flaticon-shopping-cart"></i>
                                       <span>{{ Cart::count() }}</span>
                                   </a>
                                   <div class="cart-items">
                                       @forelse (Cart::content() as $panier)
                                           <div class="cart-item">
                                               <div class="cart-img">
                                                   <a href="#">
                                                       <img src="{{ asset('assets/img/shop1.png') }}" alt="product"
                                                           class="img-fluid" height="80" width="90">
                                                   </a>
                                               </div>
                                               <div class="cart-title">
                                                   <a href="#">{{ Str::limit($panier->model->nom,10,"...")}}</a>
                                                   {{-- <span>Code: STPT601</span> --}}
                                               </div>
                                               <div class="cart-quantity">X {{ $panier->qty }}</div>
                                               <div class="cart-price">
                                                   {{ $panier->model->monaie . '' . $panier->price }}</div>
                                               <div class="cart-trash">
                                                <form action="{{ route('cartRemove', ['id'=>$panier->rowId]) }}" method="post" onsubmit="removeCart(this)">
                                                    @csrf
                                                    @method("DELETE")
                                                    <button type="submit">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                               </div>
                                           </div>
                                       @empty
                                           <span class="text-danger">Panier vide</span>
                                       @endforelse
                                       @if (Cart::count() > 0)
                                           <div class="cart-item">
                                               <div class="cart-btn">
                                                   <a href="{{ route('monpanier') }}" class="item-btn">Voir le
                                                       panier</a>
                                                   <a href="#" class="item-btn">La caisse</a>
                                               </div>
                                           </div>
                                       @endif

                                   </div>
                               </li>
                               @auth
                                   <li>
                                       <div class="avatar-user ml-4">
                                           <img src="{{ asset('assets/img/slider/profil1.jpg') }}" alt="">
                                           <ul class="dropdown-menu-col-1">
                                               <li>
                                                   <a href="{{ route('mesAbonnements') }}">Mes abonnements</a>
                                               </li>
                                               <li>
                                                   <a href="{{ route('profil') }}">Mon profil</a>
                                               </li>
                                               <li>
                                                   <a href="{{ route('historique') }}">Historique d'achats</a>
                                               </li>
                                               <li>
                                                   <a class="" href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                                       Déconnexion
                                                   </a>
                                                   <form id="logout-form" action="{{ route('logout') }}"
                                                       method="POST" class="d-none">
                                                       @csrf
                                                   </form>
                                               </li>
                                           </ul>
                                       </div>
                                   </li>
                               @endauth
                               {{-- @auth                                   
                               <li class="d-none d-xl-block">
                                   <form id="top-search-form" class="header-search-dark">
                                       <input type="text" class="search-input" placeholder="cherchez un service par son nom" required="">
                                       <button class="search-button">
                                           <i class="flaticon-search"></i>
                                       </button>
                                   </form>
                               </li> 
                               @endauth --}}

                           </ul>

                       </div>
                   </div>
               </div>
           </div>
       </div>
   </header>
   <!-- Header Area End Here -->
