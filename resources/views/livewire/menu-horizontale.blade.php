<!-- Horizontal navbar -->
<div id="navbar1" class="app-navbar horizontal" wire:poll>
    <div class="navbar-wrap">

        <button class="no-style navbar-toggle navbar-open d-lg-none">
          <span></span><span></span><span></span>
        </button>


        <form class="app-search d-none d-md-block">
          <div class="form-group typeahead__container with-suffix-icon mb-0">
            <div class="typeahead__field">
              <div class="typeahead__query">
                <input
                  class="form-control autocomplete-control topbar-search"
                  type="search"
                  placeholder="Type page's title"
                  autocomplete="on"
                  data-source="{{ asset('assets/client/data/search-menu.json') }}"
                >
                <div class="suffix-icon icofont-search"></div>
              </div>
            </div>
          </div>
        </form>


        <div class="app-actions" x-data="{nbr:{{ Cart::count() }},
            tab:{{ Cart::content() }}}">
          <div class="dropdown item">
            <button
              class="no-style dropdown-toggle"
              type="button"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
              data-bs-offset="0, 12"
            >
              <span class="icon icofont-cart"></span>
              <span class="badge badge-danger badge-sm" x-text="nbr">
              </span>
            </button>

            <div class="dropdown-menu dropdown-menu-right dropdown-menu-w-280">
              <div class="menu-header">
                <h4 class="h5 menu-title mt-0 mb-0">Panier</h4>

                <a href="#" class="text-danger" x-show="nbr>0">Tout supprimer</a>
              </div>

              <ul class="list">
                <template x-for="item in tab">
                    <li>
                      <a href="#">
                        <span>
                        <img src="{{ asset('assets/img/shop1.png') }}" alt="product"
                        class="img-fluid" height="50" width="50">
                    </span>
                        <div class="content">
                          <span class="desc" x-text="item.model.nom"></span>
                          <span class="date" x-text="item.qty+' X '+ item.model.monaie + item.price"></span>
                        </div>
                        <span class="icon icofont-ui-delete" x-on:click.prevent="$wire.deletConfirm(item.rowId)"></span>
                      </a>
                    </li>
                </template>
              </ul>

              <div class="menu-footer" x-show="nbr>0">
                <button class="btn btn-primary w-100">
                  Voir tout mon panier
                  <span class="btn-icon ms-2 icofont-cart-alt"></span>
                </button>
              </div>
            </div>
          </div>

          <div class="dropdown item">
            <button
              class="no-style dropdown-toggle"
              type="button"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
              data-bs-offset="0, 10"
            >
              <span class="d-flex align-items-center">
                <img src="{{ asset('assets/client/content/user-400-1.jpg') }}" alt="" width="40" height="40" class="rounded-500 me-1">
                <i class="icofont-simple-down"></i>
              </span>
            </button>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-w-180">
              <ul class="list">
                <li>
                  <a href="./edit-account.html" class="align-items-center">
                    <span class="icon icofont-ui-home"></span>
                    Edit account
                  </a>
                </li>
                <li>
                  <a href="./user-profile.html" class="align-items-center">
                    <span class="icon icofont-ui-user"></span>
                    User profile
                  </a>
                </li>
                <li>
                  <a href="#" class="align-items-center">
                    <span class="icon icofont-ui-calendar"></span>
                    Calendar
                  </a>
                </li>
                <li>
                  <a href="#" class="align-items-center">
                    <span class="icon icofont-ui-settings"></span>
                    Settings
                  </a>
                </li>
                <li>
                    <a class="" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();"
                  class="align-items-center">
                   <span class="icon icofont-logout"></span> Déconnexion
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                    class="d-none">
                    @csrf
                </form>
                </li>
              </ul>
            </div>
          </div>
        </div>




      <div class="navbar-skeleton horizontal">
        <div class="left-part d-flex align-items-center">
          <span class="navbar-button bg animated-bg d-lg-none"></span>
          <span class="sk-logo bg animated-bg d-none d-lg-block"></span>
          <span class="search d-none d-md-block bg animated-bg"></span>
        </div>

        <div class="right-part d-flex align-items-center">
          <div class="icon-box">
            <span class="icon bg animated-bg"></span>
            <span class="badge"></span>
          </div>
          <span class="avatar bg animated-bg"></span>
        </div>
      </div>



    </div>
  </div>

  <!-- end Horizontal navbar -->
