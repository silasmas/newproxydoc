<header class="fixed-top">
    <nav class="navbar navbar-expand-lg">
        <div class="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                {{-- <i class="bi bi-heart-pulse-fill"></i> --}}
                <img src="{{ asset('assets/img/proxy/logo.png') }}" alt="Proxydoc">

            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-0">
                    <li class="nav-item">
                        <a class="nav-link active  scrollTop" href="#home">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  scrollTop" href="#about">A propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  scrollTop" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  scrollTop" href="#plans">Plans tarifaires</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li> --}}
                </ul>
                <div class="d-flex align-items-center btns">
                    <a href="#plans" class="btn">
                        S'abonner
                    </a>
                    <a href="{{ route('login') }}" class="btn">
                        Se connecter
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>
