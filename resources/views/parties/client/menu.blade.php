
    <!-- Vertical navbar -->
    <div id="navbar2" class="app-navbar vertical">
        <div class="navbar-wrap">

            <button class="no-style navbar-toggle navbar-close icofont-close-line d-lg-none"></button>
            <div class="app-logo">
              <div class="logo-wrap d-flex align-items-center">
                <!-- Image logo -->
                <div class="block-logo">
                    <img src="{{ asset('assets/logo/logo-app.png') }}" alt="" width="147" height="100" class="logo-img">
                </div>
                <div class="name-brand">
                    Proxy Doc
                </div>
                <!-- end Image logo -->
              </div>
            </div>
            <div class="main-menu">
              <nav class="main-menu-wrap">
                <ul class="menu-ul">
                  <li class="menu-item">
                    <span class="group-title">Medicine</span>
                  </li>
                  <li class="menu-item has-sub link-hover">
                    <a class="item-link" href="#">
                      <span class="link-icon icofont-thermometer-alt"></span>
                      <span class="link-text">ProxyChem</span>
                      <span class="link-caret icofont-thin-right"></span>
                    </a>
                      <ul class="sub">
                        <li class="menu-item {{ Route::current()->getName()=="cl_pharmacie"?"active":"" }}">
                          <a class="item-link" href="{{ route('cl_pharmacie') }}">
                            <span class="link-icon icofont-pills"></span>
                            <span class="link-text">
                            Liste des médicaments
                        </span></a>
                        </li>
                        <li class="menu-item {{ Route::current()->getName()==""?"active":"" }}">
                          <a class="item-link" href="{{ route('cl_ordonance') }}">
                            <span class="link-icon icofont-prescription"></span>
                            <span class="link-text">Ordonance</span></a>
                        </li>
                      </ul>
                  </li>
                  <li class="menu-item has-sub link-hover">
                    <a class="item-link" href="#">
                      <span class="link-icon icofont-stethoscope-alt"></span>
                      <span class="link-text">ProxyChat</span>
                      <span class="link-caret icofont-thin-right"></span>
                    </a>
                    <ul class="sub">
                        <li class="menu-item">
                          <a class="item-link" href="{{ route('cl_annuaire') }}">
                            <span class="link-icon icofont-prescription"></span>
                            <span class="link-text">
                            Annuaire des médecins
                        </span></a>
                        </li>
                        <li class="menu-item">
                          <a class="item-link" href="{{ route('cl_specialiste') }}">
                            <span class="link-icon icofont-doctor-alt"></span>
                            <span class="link-text">
                            Trouver un spécialiste
                        </span></a>
                        </li>
                        <li class="menu-item">
                          <a class="item-link" href="{{ route('cl_chat') }}">
                            <span class="link-icon icofont-whatsapp"></span>
                            <span class="link-text">
                            Parler à un médecin
                        </span></a>
                        </li>
                        <li class="menu-item">
                          <a class="item-link" href="{{ route('cl_rendezvous') }}">
                            <span class="link-icon icofont-whatsapp"></span>
                            <span class="link-text">
                            Prendre un rendez-vous
                        </span></a>
                        </li>
                      </ul>
                  </li>
<<<<<<< Updated upstream
                  <li class="menu-item link-hover">
                    <a class="item-link" href="">
=======
                  <li class="menu-item">
                    <a class="item-link" href="{{ route('cl_achats') }}">
>>>>>>> Stashed changes
                      <span class="link-icon icofont-cart"></span>
                      <span class="link-text">Mes achats</span>
                    </a>
                  </li>
<<<<<<< Updated upstream
                  <li class="menu-item link-hover">
                    <a class="item-link" href="">
=======
                  <li class="menu-item">
                    <a class="item-link" href="{{ route('cl_historique') }}">
>>>>>>> Stashed changes
                      <span class="link-icon icofont-list"></span>
                      <span class="link-text">Historique</span>
                    </a>
                  </li>
<<<<<<< Updated upstream
                  <li class="menu-item link-hover">
                    <a class="item-link" href="">
=======
                  <li class="menu-item">
                    <a class="item-link" href="{{ route('cl_abonner') }}">
>>>>>>> Stashed changes
                      <span class="link-icon icofont-patient-bed"></span>
                      <span class="link-text">S'abonner</span>
                    </a>
                  </li>

                    </ul>
                  </li>
                </ul>
              </nav>
            </div>


            <div class="add-patient">
              <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-patient">
                <span class="btn-icon icofont-plus me-2"></span>
                Add Patient
              </button>
            </div>


            <div class="assistant-menu">

              <a class="link" href="#" data-bs-toggle="modal" data-bs-target="#settings">
                <span class="link-icon icofont-ui-settings"></span>Settings
              </a>
              <a class="link" href="#">
                <span class="link-icon icofont-question-square"></span>FAQ &amp; Support
              </a>
            </div>






          <div class="navbar-skeleton vertical">
            <div class="top-part">
              <div class="sk-logo bg animated-bg"></div>
              <div class="sk-menu">
                <span class="sk-menu-item menu-header bg-1 animated-bg"></span>
                <span class="sk-menu-item bg animated-bg w-75"></span>
                <span class="sk-menu-item bg animated-bg w-80"></span>
                <span class="sk-menu-item bg animated-bg w-50"></span>
                <span class="sk-menu-item bg animated-bg w-75"></span>
                <span class="sk-menu-item bg animated-bg w-50"></span>
                <span class="sk-menu-item bg animated-bg w-60"></span>
              </div>
              <div class="sk-menu">
                <span class="sk-menu-item menu-header bg-1 animated-bg"></span>
                <span class="sk-menu-item bg animated-bg w-60"></span>
                <span class="sk-menu-item bg animated-bg w-40"></span>
                <span class="sk-menu-item bg animated-bg w-60"></span>
                <span class="sk-menu-item bg animated-bg w-40"></span>
                <span class="sk-menu-item bg animated-bg w-40"></span>
                <span class="sk-menu-item bg animated-bg w-40"></span>
                <span class="sk-menu-item bg animated-bg w-40"></span>
              </div>
              <div class="sk-menu">
                <span class="sk-menu-item menu-header bg-1 animated-bg"></span>
                <span class="sk-menu-item bg animated-bg w-60"></span>
                <span class="sk-menu-item bg animated-bg w-50"></span>
              </div>
              <div class="sk-button animated-bg w-90"></div>
            </div>

            <div class="bottom-part">
              <div class="sk-menu">
                <span class="sk-menu-item bg-1 animated-bg w-60"></span>
                <span class="sk-menu-item bg-1 animated-bg w-80"></span>
              </div>
            </div>

            <div class="horizontal-menu">
              <span class="sk-menu-item bg animated-bg"></span>
              <span class="sk-menu-item bg animated-bg"></span>
              <span class="sk-menu-item bg animated-bg"></span>
              <span class="sk-menu-item bg animated-bg"></span>
              <span class="sk-menu-item bg animated-bg"></span>
              <span class="sk-menu-item bg animated-bg"></span>
            </div>
          </div>

        </div>
      </div>

      <!-- end Vertical navbar -->
