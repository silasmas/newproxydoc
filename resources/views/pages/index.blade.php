<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proxydoc | Accueil</title>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&display=swap" rel="stylesheet">
    <!-- <link rel="shortcut icon" href="images/Fichier 29.png" type="image/x-icon"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="{{asset('assets/home/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/home/app.css')}}">
</head>

<body>
    <header class="fixed-top">
        <nav class="navbar navbar-expand-lg">
            <div class="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="container-fluid px-lg-5">
                <a class="navbar-brand" href="index.html">
                    <i class="bi bi-heart-pulse-fill"></i> Proxydoc
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto me-auto mb-0">
                        <li class="nav-item">
                            <a class="nav-link active me-4 scrollTop" href="#home">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-4 scrollTop" href="#about">A propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-4 scrollTop" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-4 scrollTop" href="#plans">Plans tarifaires</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                    <div class="d-flex align-items-center btns">
                        <a href="#" class="btn">
                            S'incrire
                        </a>
                        <a href="#" class="btn">
                            Se connecter
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="global-div">
        <div class="wrapper">
            <!-- <div class="loading">
            <div id="loader"></div>
          </div> -->
            <div class="banner" id="home">
                <div class="content-banner">
                    <div class="block-line">
                        <div>
                            <i class="bi bi-heart-pulse-fill icon"></i>

                        </div>
                        <div>
                            <i class="bi bi-heart-pulse-fill icon"></i>
                            <i class="bi bi-hospital-fill icon"></i>
                        </div>
                    </div>
                    <div class="circle"></div>
                    <div class="circle-sm circle-sm-1"></div>
                    <div class="circle-sm circle-sm-2"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-text">
                                <h1>Connecter pour une meilleure <span>Santé</span></h1>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum architecto, sunt
                                    voluptatem labore ut hic!
                                </p>
                                <a href="#" class="btn">Commancez</a>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center justify-content-center position-relative"
                                style="position: relative;">
                                <div class="card">
                                    <img src="{{asset('assets/img/man.png')}}" alt="img" class="img-float">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-descrip">
                <div class="container">
                    <div class="row g-lg-5 justify-content-center align-items-center">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="text-star">
                                    <h4>01</h4>
                                    <h5>
                                        Items
                                    </h5>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, porro?
                                    </p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="text-star">
                                    <h4>02</h4>
                                    <h5>
                                        Items
                                    </h5>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, porro?
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="block-icon">
                                <i class="bi bi-heart-pulse-fill"></i>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="text-star">
                                    <h4>01</h4>
                                    <h5>
                                        Items
                                    </h5>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, porro?
                                    </p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="text-star">
                                    <h4>01</h4>
                                    <h5>
                                        Items
                                    </h5>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, porro?
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
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos ab delectus
                                                commodi sunt saepe a?</p>
                                            <a href="#" class="btn">Savoir plus</a>
                                        </div>
                                    </div>
                                </div>
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
                                <div class="col-lg-7">
                                    <h2>Services</h2>
                                    <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h3>
                                    <p>

                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. At, similique earum
                                        eveniet aperiam cupiditate sequi pariatur. Asperiores hic sit esse?

                                    </p>
                                    <!-- <a href="#" class="link">Savoir plus</a> -->
                                    <div class="row g-3">
                                        <div class="col-lg-6">
                                            <div class="card card-sm">
                                                <h5>01</h5>
                                                <h6>ProxyChem</h6>
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore,
                                                    soluta!</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card card-sm">
                                                <h5>01</h5>
                                                <h6>ProxyChem</h6>
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore,
                                                    soluta!</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card card-sm">
                                                <h5>01</h5>
                                                <h6>ProxyChem</h6>
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore,
                                                    soluta!</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card card-sm">
                                                <h5>01</h5>
                                                <h6>ProxyChem</h6>
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore,
                                                    soluta!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="block-cards">
                                        <div class="circle">
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <div class="card">
                                            <img src="{{asset('assets/img/bg-1.jpg')}}" alt="">
                                        </div>
                                        <div class="card">
                                            <img src="{{asset('assets/img/bg-1.jpg')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-plan" id="plans">
                <div class="container">
                    <div class="text-center">
                        <h3>Plans</h3>
                        <h2>Notre Plan Tarifaire</h2>
                    </div>
                    <div class="row g-lg-5">
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="text-star">
                                    <h4>Ordinaire</h4>
                                    <h5>1<sup>$</sup> / <span>Mois</span></h5>
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
                                    <h4>Standars</h4>
                                    <h5>2<sup>$</sup>/<span>Mois</span></h5>
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
                        </div>
                    </div>
                </div>
            </div>
            <footer>
                <div class="container">
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
            </footer>
            <!-- <a href="https://wa.me/91999999999" target="_blank" class="btn-whatsapp">
              <div class="content">
                <div class="icon">
                  <i class="fab fa-whatsapp"></i>
                </div>
                <div class="text">
                  Comment pouvons-nous vous aider ?
                </div>
              </div>
            </a> -->
        </div>
    </div>
    <div class="modal fade" id="modal-map" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header ">
                    <div class="text-center w-100">
                        <h5 class="modal-title ">
                            Vous souhaitez devenir revendeur ? <a href="#">Rejoignez-nous !</a>
                        </h5>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row g-lg-5 g-3 align-items-center">
                            <div class="col-lg-6">
                                <h2>Notre depôt</h2>
                                <p>Nous avons hâte de vous retrouver ! <br> Notre depôt est ouvert et vous accueille
                                    tous les jours dans le respect des mesures sanitaires .</p>
                                <p>
                                    40, croisement des av du Commerce et Bakongo <br> Kinshasa-Gombe
                                </p>
                                <p>
                                    contact@pharmans.com
                                </p>
                                <p>
                                    +243 852 591 175
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <div class="card card-map">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3978.552175193601!2d15.312531114801837!3d-4.30676314759271!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a6a3550af01175d%3A0x15fb8aee4dca8add!2sPharmans%20%2C%20D%C3%A9p%C3%B4t%20Pharmaceutique!5e0!3m2!1sfr!2scd!4v1645444011526!5m2!1sfr!2scd"
                                        width="600" height="250" style="border:0;" allowfullscreen=""
                                        loading="lazy" class="mb-5"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('assets/js/js/app.js')}}"></script>
    <script src="{{asset('assets/js/js/bootstrap.min.js')}}"></script>
    <script>
        $(window).scroll(function() {

            if ($(this).scrollTop() > 40) {
                $(".navbar").addClass('bg-white');

            } else {
                $(".navbar").removeClass('bg-white');
            }
        });
        $('.menu-toggle').click(function() {
            $(this).toggleClass('active')
            $('.full-menu').addClass('active')
        })
        $('.close-menu').click(function() {
            $('.menu-toggle').removeClass('active')
            $('.full-menu').removeClass('active')
        })
        // $(window).on('load',function(){
        //     $('.loading').addClass('complete');
        // });
        $('.scrollTop').click(function() {
            $('.scrollTop').removeClass('active')
            $(this).addClass('active')
            $('.menu-toggle').removeClass('active')

            $('.full-menu').removeClass('active')
            var getElement = $(this).attr('href');
            if ($(getElement).length) {
                var getOffset = $(getElement).offset().top - $('.navbar').height();
                $('html,body').animate({
                    scrollTop: getOffset
                }, 1000);
            }
            return false;
        })
        new WOW().init()
    </script>
</body>

</html>
