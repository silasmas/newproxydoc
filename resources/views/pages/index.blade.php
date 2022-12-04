<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proxydoc | Accueil</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/logo/logo1.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&display=swap" rel="stylesheet">
    <!-- <link rel="shortcut icon" href="images/Fichier 29.png" type="image/x-icon"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/client/css/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/home/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/home/app.css') }}">
</head>

<body>
    @include('parties.new-menu')
    <div class="global-div">
        <div class="wrapper">
            <!-- <div class="loading">
            <div id="loader"></div>
          </div> -->
            <div class="banner" id="home">
                <div class="content-banner">
                    <div class="block-line">
                        <div class="block-card">
                            <div class="img-card">
                                <img src="{{ asset('assets/img/bg.png') }}" alt="">
                            </div>
                            <div class="img-card">
                                <img src="{{ asset('assets/img/bg-1.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="circle"></div>
                    <div class="circle-sm circle-sm-1"></div>
                    <div class="circle-sm circle-sm-2"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-text">
                                <h2>ProxyDoc</h2>
                                <h1>Connecter pour une meilleure <span>Santé</span></h1>
                                <p>
                                    Construire un environnement sain qui soutient le développement de la communauté.
                                    Votre gestionnaire de cas personnel veillera à ce que vous receviez les meilleurs
                                    soins possibles.
                                </p>
                                <a href="#plans" class="btn">Commancez</a>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center justify-content-center position-relative"
                                style="position: relative;">
                                <div class="card">
                                    {{-- <img src="{{ asset('assets/img/man.png') }}" alt="img" class="img-float"> --}}
                                    {{-- <img src="{{asset('assets/img/man.png')}}" alt="img" class="img-float"> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-descrip">
                <div class="container">
                    <div class="row g-lg-3 justify-content-center align-items-center">
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="text-center">
                                    <h4>01</h4>
                                    <h5>
                                        ProxyChat
                                    </h5>
                                    <p>
                                        Ce service vous permet d'être consulté en ligne par un medecin
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="text-center">
                                    <h4>02</h4>
                                    <h5>
                                        Proxychem
                                    </h5>
                                    <p>
                                        Ce service vous permet de trouver des médicaments et être servi à domicile...
                                    </p>
                                </div>
                            </div>
                            {{-- <div class="block-icon">
                                <img src="{{ asset('assets/img/proxy/11-12.png') }}" alt="Proxydoc" height="300"
                                width="400" class="img-fluid">
                                <i class="bi bi-heart-pulse-fill"></i>
                            </div> --}}
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="text-center">
                                    <h4>03</h4>
                                    <h5>
                                        ProxyFamily
                                    </h5>
                                    <p>
                                        La famille est precieuse, ProxyDoc vous dispose par ce service des medecins de
                                        famille à domicile...
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="text-center">
                                    <h4>04</h4>
                                    <h5>
                                        ProxyGency
                                    </h5>
                                    <p>
                                        Ce service vous permet d'avoir notre service d'urgence 24h/7
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bundel" id="about">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-11">
                            <div class="card">
                                <div class="row justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="text-center">
                                            <h2>Connecter pour une meilleure Santé</h2>
                                            <p>L’entreprise ProxyDoc s’assigne comme objectif de rendre les services
                                                médicaux à la population au travers des moyens de nouvelles technologies
                                                de l’information et de communication (NTIC).</p>
                                            <a href="#" class="btn" data-bs-toggle="modal"
                                            data-bs-target="#modal-about">Savoir plus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade modal-about" id="modal-about" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title d-flex align-items-center" id="exampleModalLabel">
                                    A propos
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h3>Qui sommes-nous</h3>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt aliquid omnis mollitia, voluptate eaque reiciendis laboriosam cumque minus eius corrupti explicabo? Adipisci, natus. Ullam totam repellat earum dignissimos nostrum tenetur.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-service" id="services">
                <div class="items">
                    <div class="block-card">
                        <div class="container">
                            <div class="row justify-content-center g-lg-5 align-items-center">
                                <div class="col-lg-6">
                                    <h2>Services</h2>
                                    <h3>Vous servir est notre passion alors, <b>Connecter pour une meilleure Santé</b>
                                    </h3>
                                    <div class="block-cards">
                                        <div class="circle">
                                            <div></div>
                                            <div></div>
                                        </div>
                                        {{-- <div class="card">
                                            <img src="{{asset('assets/img/bg-1.jpg')}}" alt="">
                                        </div>
                                        <div class="card">
                                            <img src="{{asset('assets/img/bg-1.jpg')}}" alt="">
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="col-lg-6">

                                    <p>

                                        Construire un environnement sain qui soutient le développement de la communauté.
                                        Votre gestionnaire de cas personnel veillera à ce que vous receviez les
                                        meilleurs soins possibles.

                                    </p>
                                    <!-- <a href="#" class="link">Savoir plus</a> -->
                                </div>

                            </div>
                            <div class="row g-3">
                                @forelse ($service as $s)
                                    <div class="col-lg-3">
                                        <div class="card card-sm">
                                            <div class="d-flex justify-content-between align-items-center">
                                                @switch($s->nom)
                                                    @case('ProxyChat')
                                                        <i class="icon icofont-hype-machine"></i>
                                                    @break

                                                    @case('ProxyChem')
                                                        <i class="icon icofont-pills"></i>
                                                    @break

                                                    @case('ProxyFamily')
                                                        <i class="icon icofont-users-social"></i>
                                                    @break

                                                    @case('ProxyGency')
                                                        <i class="icon icofont-ambulance-cross"></i>
                                                    @break
                                                @endswitch

                                                <h5>{{ $loop->index + 1 }}</h5>
                                            </div>
                                            <h6>{{ $s->nom }}</h6>
                                            <p>{{ $s->description }}</p>
                                        </div>
                                    </div>
                                    @empty
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-plan" id="plans">
                    <div class="bundel-lg">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text-center">
                                        <h3>Plans</h3>
                                        <h2>Notre Plan Tarifaire</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row g-lg-3 row-card">

                            @forelse ($abonnement as $ab)
                                @foreach ($ab as $a)
                                    <div class="col-lg-3">
                                        <div class="card">
                                            <div class="text-star">
                                                <h4>{{ $a->nom }}</h4>
                                                <h5>{{ $a->prix }}<sup>{{ $a->monaie == 'USD' ? "$" : 'FC' }}</sup>/<span>Mois</span>
                                                </h5>
                                                <ul>
                                                    @forelse ($a->service as $s)
                                                        <li><i class="bi bi-check-lg"></i> {{ $s->nom }}</li>
                                                    @empty
                                                    @endforelse
                                                    {{-- <li>
                                            <i class="bi bi-check-lg"></i> ProxyChem
                                        </li> --}}
                                                </ul>
                                                <a href="{{ route('createAbonnement', ['id' => $a->id]) }}" class="btn">
                                                    Souscrire
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                @empty

                                @endforelse
                                {{-- <div class="col-lg-3">
                            <div class="card">
                                <div class="text-star">
                                    <h4>Premium</h4>
                                    <h5>3<sup>$</sup>/<span>Mois</span></h5>
                                    <ul>
                                        <li>
                                            <i class="bi bi-check-lg"></i> ProxyChem
                                        </li>
                                        <li>
                                            <i class="bi bi-check-lg"></i> ProxyChem
                                        </li>
                                    </ul>
                                    <a href="#" class="btn">
                                        Souscrire
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="text-star">
                                    <h4>Business</h4>
                                    <h5>5<sup>$</sup>/<span>Mois</span></h5>
                                    <ul>
                                        <li>
                                            <i class="bi bi-check-lg"></i> ProxyChem
                                        </li>
                                        <li>
                                            <i class="bi bi-check-lg"></i> ProxyChem
                                        </li>
                                    </ul>
                                    <a href="#" class="btn">
                                        Souscrire
                                    </a>
                                </div>
                            </div>
                        </div> --}}
                            </div>
                        </div>
                    </div>
                    <footer>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p class="mb-0">© 2022 ProxyDoc</p>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="block-network">
                                                    <a href="#">
                                                        <i class="bi bi-facebook"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="bi bi-instagram"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="bi bi-twitter"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="bi bi-whatsapp"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
            @include('parties.pied')
        </body>

        </html>
