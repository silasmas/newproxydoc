@extends('templates.templateCl')
@section('title', 'dashboard')
@section('autreStyle')
    <link href="{{ asset('js/sweetalert/sweetalert.css') }}" rel="stylesheet">
@endsection

@section('content')
<main class="main-content">
    <div class="app-loader"><i class="icofont-spinner-alt-4 rotate"></i></div>

    <div class="main-content-wrap">
      <div class="page-content">
        <div class="row">
            <div class="col-12">
                <div class="card card-banner">
                    <div class="card-sm"></div>
                    <div class="card-sm"></div>
                    <div class="card-sm"></div>
                    <div class="text-start">
                        <h1>Salut John doe</h1>
                        <h2>Bienvenue sur votre dashboard</h2>
                    </div>
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <div class="row row-card justify-content-center px-md-3">
          <div class="col-lg-12">
            <div class="row g-3">
                <div class="col-lg-7">
                    <div class="row g-3">
                        <div class="col col-12 col-md-6 col-xl-6">
                            <div class="card animated fadeInUp delay-01s card-dash">
                              <div class="card-body">
                                <div class="row align-items-center">
                                  <div class="col col-5">
                                    <div class="icon-card" style="background: #20e6ca;
                                    color: #fff;">
                                        <div class="icon icofont-first-aid-alt"></div>
                                    </div>
                                  </div>

                                  <div class="col col-7 text-end">
                                    <h6 class="mt-0 mb-1">Mes abonnements</h6>
                                    <div class="count text-primary fs-20">213</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col col-12 col-md-6 col-xl-6">
                            <div class="card animated fadeInUp delay-02s card-dash">
                              <div class="card-body">
                                <div class="row align-items-center">
                                  <div class="col col-5">
                                    <div class="icon-card" style="background: #fd4949;
                                    color: #fff;">
                                        <div class="icon icofont-wheelchair"></div>
                                    </div>
                                  </div>

                                  <div class="col col-7 text-end">
                                    <h6 class="mt-0 mb-1 ">Mes consultations</h6>
                                    <div class="count text-primary fs-20">104</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col col-12 col-md-6 col-xl-6">
                            <div class="card animated fadeInUp delay-03s card-dash">
                              <div class="card-body">
                                <div class="row align-items-center">
                                  <div class="col col-5">
                                   <div class="icon-card" style="background: #ffe34a;
                                   color: #fff;
                                   ">
                                    <div class="icon icofont-blood"></div>
                                   </div>
                                  </div>

                                  <div class="col col-7 text-end">
                                    <h6 class="mt-0 mb-1">Operations</h6>
                                    <div class="count text-primary fs-20">24</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col col-12 col-md-6 col-xl-6">
                            <div class="card animated fadeInUp delay-03s card-dash">
                              <div class="card-body">
                                <div class="row align-items-center">
                                  <div class="col col-5">
                                   <div class="icon-card" style="background: var(--primaryColor);
                                   color: #fff;">
                                    <div class="icon icofont-list icon-ordonnance"></div>
                                   </div>
                                  </div>

                                  <div class="col col-7 text-end">
                                    <h6 class="mt-0 mb-1">Mes ordonnances</h6>
                                    <div class="count text-primary fs-20">24</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="card card-dash h-100 card-lg">
                        <div class="row">
                            <div class="col-5">
                                <h6 class="mt-0 mb-1 ">Mon abonnement</h6>
                                <h5>Standard</h5>
                                <a href="#" class="btn">
                                    Renouveler
                                </a>
                            </div>
                            <div class="col-7 d-flex justify-content-end">
                                <div class="circle">
                                    <div class="block-linear">

                                    </div>
                                    <div class="block-white">
                                        <p>Jours restants</p>
                                        <h5>2 <span>jours</span></h5>
                                    </div>
                                    <div class="block-light"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="card card-table">
                        <div class="d-flex align-items-center mb-4 justify-content-between">
                            <h6 class="mb-0">Liste d'historique</h6>
                            <a href="#" class="plus" style="margin-right: 20px">Voir plus</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nom du médicament</th>
                                        <th scope="col">Catégorie</th>
                                        <th scope="col">Quantité</th>
                                        <th scope="col">Prix</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Etat</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            01
                                        </td>
                                        <td>
                                            Aspirine
                                        </td>
                                        <td>
                                            Anti-fièvre
                                        </td>
                                        <td>
                                            4
                                        </td>
                                        <td>
                                           4000FC
                                        </td>
                                        <td>
                                            2022-10-21
                                        </td>
                                        <td>
                                            <div class="badge succes">Réussi</div>
                                        </td>
                                        <td>
                                            <div class="d-flex aling-items-center">
                                                <button class="btn btn-edit">
                                                    <span class="icon icofont-pencil"></span>
                                                </button>
                                                <button class="btn btn-delete">
                                                    <span class="icon icofont-bin"></span>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            01
                                        </td>
                                        <td>
                                            Aspirine
                                        </td>
                                        <td>
                                            Anti-fièvre
                                        </td>
                                        <td>
                                            4
                                        </td>
                                        <td>
                                           4000FC
                                        </td>
                                        <td>
                                            2022-10-21
                                        </td>
                                        <td>
                                            <div class="badge warning">En attente</div>
                                        </td>
                                        <td>
                                            <div class="d-flex aling-items-center">
                                                <button class="btn btn-edit">
                                                    <span class="icon icofont-pencil"></span>
                                                </button>
                                                <button class="btn btn-delete">
                                                    <span class="icon icofont-bin"></span>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            01
                                        </td>
                                        <td>
                                            Aspirine
                                        </td>
                                        <td>
                                            Anti-fièvre
                                        </td>
                                        <td>
                                            4
                                        </td>
                                        <td>
                                           4000FC
                                        </td>
                                        <td>
                                            2022-10-21
                                        </td>
                                        <td>
                                            <div class="badge danger">Echoué</div>
                                        </td>
                                        <td>
                                            <div class="d-flex aling-items-center">
                                                <button class="btn btn-edit">
                                                    <span class="icon icofont-pencil"></span>
                                                </button>
                                                <button class="btn btn-delete">
                                                    <span class="icon icofont-bin"></span>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            01
                                        </td>
                                        <td>
                                            Aspirine
                                        </td>
                                        <td>
                                            Anti-fièvre
                                        </td>
                                        <td>
                                            4
                                        </td>
                                        <td>
                                           4000FC
                                        </td>
                                        <td>
                                            2022-10-21
                                        </td>
                                        <td>
                                            <div class="badge succes">Livré</div>
                                        </td>
                                        <td>
                                            <div class="d-flex aling-items-center">
                                                <button class="btn btn-edit">
                                                    <span class="icon icofont-pencil"></span>
                                                </button>
                                                <button class="btn btn-delete">
                                                    <span class="icon icofont-bin"></span>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card card-dash h-100">
                        <h6 class="mt-0 mb-1">Mes ordonnances recentes</h6>
                        <div class="block-all-doc">
                            <div class="item-doc d-flex align-items-center">
                                <div class="icon">
                                    <div class="icofont-list icon-ordonnance"></div>
                                </div>
                                <div class="block-info">
                                    <h5>Name file</h5>
                                    <p>Téléchargé le 31 dec 2022</p>
                                </div>
                            </div>
                            <div class="item-doc d-flex align-items-center">
                                <div class="icon">
                                    <div class="icofont-list icon-ordonnance"></div>
                                </div>
                                <div class="block-info">
                                    <h5>Name file</h5>
                                    <p>Téléchargé le 31 dec 2022</p>
                                </div>
                            </div>
                            <div class="item-doc d-flex align-items-center">
                                <div class="icon">
                                    <div class="icofont-list icon-ordonnance"></div>
                                </div>
                                <div class="block-info">
                                    <h5>Name file</h5>
                                    <p>Téléchargé le 31 dec 2022</p>
                                </div>
                            </div>
                            <div class="item-doc d-flex align-items-center">
                                <div class="icon">
                                    <div class="icofont-list icon-ordonnance"></div>
                                </div>
                                <div class="block-info">
                                    <h5>Name file</h5>
                                    <p>Téléchargé le 31 dec 2022</p>
                                </div>
                            </div>
                           <div class="d-flex justify-content-end">
                                <a href="#" class="plus">Voir plus</a>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>

          {{-- <div class="col col-12 col-md-6 col-xl-3">
            <div class="card animated fadeInUp delay-04s bg-light">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col col-5">
                    <div class="icon p-0 fs-48 text-primary opacity-50 icofont-dollar-true"></div>
                  </div>

                  <div class="col col-7">
                    <h6 class="mt-0 mb-1 text-nowrap">Hospital Earning</h6>
                    <div class="count text-primary fs-20">$5238</div>
                  </div>
                </div>
              </div>
            </div>
          </div> --}}
        </div>



        <div class="row g-3 mt-2">

            <div class="col-12 ">
                <div class="card card-dash">
                    <div class="card-header">
                      Hospital survey
                    </div>
                    <div class="card-body">
                      <div id="surveyEcharts" class="chat-container container-h-400"></div>
                    </div>
                  </div>
            </div>
          <div class="col col-12 col-md-6">
            <div class="card card-dash">
              <div class="card-body">
                <h4 class="mt-0 mb-1">$25038</h4>
                <p class="text-muted mb-0">Income in current month</p>

                <div id="incomeEcharts" class="chat-container"></div>
              </div>
            </div>
          </div>

          <div class="col col-12 col-md-6">
            <div class="card">
              <div class="card-body">
                <h4 class="mt-0 mb-1">$2195</h4>
                <p class="text-muted mb-0">Income in current week</p>

                <div id="income2Echarts" class="chat-container"></div>
              </div>
            </div>
          </div>

          <div class="col col-12 col-md-4">
            <div class="card">
              <div class="card-header">
                Patients age
              </div>
              <div class="card-body">
                <div id="ageEcharts" class="chat-container container-h-300"></div>
              </div>
            </div>
          </div>

          <div class="col col-12 col-md-4">
            <div class="card">
              <div class="card-header">
                Patients gender
              </div>
              <div class="card-body">
                <div id="genderEcharts" class="chat-container container-h-300"></div>
              </div>
            </div>
          </div>

          <div class="col col-12 col-md-4">
            <div class="card">
              <div class="card-header">
                Departments
              </div>
              <div class="card-body">
                <div id="departmentsEcharts" class="chat-container container-h-300"></div>
              </div>
            </div>
          </div>
        </div>

        <div class="card mb-0">
          <div class="card-header">
            Last appointments
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                <tr>
                  <th scope="col">Photo</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Date</th>
                  <th scope="col">Visit time</th>
                  <th scope="col">Number</th>
                  <th scope="col">Doctor</th>
                  <th scope="col">Injury / Condition</th>
                  <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>
                    <img src="../assets/content/user-40-1.jpg" alt="" width="40" height="40" class="rounded-500">
                  </td>
                  <td>
                    <strong>Liam</strong>
                  </td>
                  <td>
                    <div class="d-flex align-items-center nowrap text-primary">
                      <span class="icofont-ui-email p-0 me-2"></span>
                      liam@gmail.com
                    </div>
                  </td>
                  <td>
                    <div class="text-muted text-nowrap">10 Feb 2018</div>
                  </td>
                  <td>
                    <div class="text-muted text-nowrap">9:15 - 9:45</div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center nowrap text-primary">
                      <span class="icofont-ui-cell-phone p-0 me-2"></span>
                      0126595743
                    </div>
                  </td>
                  <td>Dr. Benjamin</td>
                  <td>mumps</td>
                  <td>
                    <div class="actions">
                      <button class="btn btn-info btn-sm btn-square rounded-pill">
                        <span class="btn-icon icofont-ui-edit"></span>
                      </button>
                      <button class="btn btn-error btn-sm btn-square rounded-pill">
                        <span class="btn-icon icofont-ui-delete"></span>
                      </button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="../assets/content/user-40-2.jpg" alt="" width="40" height="40" class="rounded-500">
                  </td>
                  <td>
                    <strong>Emma</strong>
                  </td>
                  <td>
                    <div class="d-flex align-items-center nowrap text-primary">
                      <span class="icofont-ui-email p-0 me-2"></span>
                      emma@gmail.com
                    </div>
                  </td>
                  <td>
                    <div class="text-muted text-nowrap">5 Dec 2018</div>
                  </td>
                  <td>
                    <div class="text-muted text-nowrap">9:00 - 9:30</div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center nowrap text-primary">
                      <span class="icofont-ui-cell-phone p-0 me-2"></span>
                      0126595743
                    </div>
                  </td>
                  <td>Dr. Liam</td>
                  <td>arthritis</td>
                  <td>
                    <div class="actions">
                      <button class="btn btn-info btn-sm btn-square rounded-pill">
                        <span class="btn-icon icofont-ui-edit"></span>
                      </button>
                      <button class="btn btn-error btn-sm btn-square rounded-pill">
                        <span class="btn-icon icofont-ui-delete"></span>
                      </button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="../assets/content/user-40-3.jpg" alt="" width="40" height="40" class="rounded-500">
                  </td>
                  <td>
                    <strong>Olivia</strong>
                  </td>
                  <td>
                    <div class="d-flex align-items-center nowrap text-primary">
                      <span class="icofont-ui-email p-0 me-2"></span>
                      olivia@gmail.com
                    </div>
                  </td>
                  <td>
                    <div class="text-muted text-nowrap">13 Oct 2018</div>
                  </td>
                  <td>
                    <div class="text-muted text-nowrap">12:00 - 12:45</div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center nowrap text-primary">
                      <span class="icofont-ui-cell-phone p-0 me-2"></span>
                      0126595743
                    </div>
                  </td>
                  <td>Dr. Noah</td>
                  <td>depression</td>
                  <td>
                    <div class="actions">
                      <button class="btn btn-info btn-sm btn-square rounded-pill">
                        <span class="btn-icon icofont-ui-edit"></span>
                      </button>
                      <button class="btn btn-error btn-sm btn-square rounded-pill">
                        <span class="btn-icon icofont-ui-delete"></span>
                      </button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="../assets/content/user-40-4.jpg" alt="" width="40" height="40" class="rounded-500">
                  </td>
                  <td>
                    <strong>Ava</strong>
                  </td>
                  <td>
                    <div class="d-flex align-items-center nowrap text-primary">
                      <span class="icofont-ui-email p-0 me-2"></span>
                      ava@gmail.com
                    </div>
                  </td>
                  <td>
                    <div class="text-muted text-nowrap">26 Dec 2018</div>
                  </td>
                  <td>
                    <div class="text-muted text-nowrap">14:15 - 14:30</div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center nowrap text-primary">
                      <span class="icofont-ui-cell-phone p-0 me-2"></span>
                      0126595743
                    </div>
                  </td>
                  <td>Dr. Emma</td>
                  <td>diarrhoea</td>
                  <td>
                    <div class="actions">
                      <button class="btn btn-info btn-sm btn-square rounded-pill">
                        <span class="btn-icon icofont-ui-edit"></span>
                      </button>
                      <button class="btn btn-error btn-sm btn-square rounded-pill">
                        <span class="btn-icon icofont-ui-delete"></span>
                      </button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="../assets/content/user-40-5.jpg" alt="" width="40" height="40" class="rounded-500">
                  </td>
                  <td>
                    <strong>Noah</strong>
                  </td>
                  <td>
                    <div class="d-flex align-items-center nowrap text-primary">
                      <span class="icofont-ui-email p-0 me-2"></span>
                      noah@gmail.co
                    </div>
                  </td>
                  <td>
                    <div class="text-muted text-nowrap">15 Jun 2018</div>
                  </td>
                  <td>
                    <div class="text-muted text-nowrap">17:30 - 18:00</div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center nowrap text-primary">
                      <span class="icofont-ui-cell-phone p-0 me-2"></span>
                      0126595743
                    </div>
                  </td>
                  <td>Dr. James</td>
                  <td>dyslexia</td>
                  <td>
                    <div class="actions">
                      <button class="btn btn-info btn-sm btn-square rounded-pill">
                        <span class="btn-icon icofont-ui-edit"></span>
                      </button>
                      <button class="btn btn-error btn-sm btn-square rounded-pill">
                        <span class="btn-icon icofont-ui-delete"></span>
                      </button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="../assets/content/user-40-6.jpg" alt="" width="40" height="40" class="rounded-500">
                  </td>
                  <td>
                    <strong>Isabella</strong>
                  </td>
                  <td>
                    <div class="d-flex align-items-center nowrap text-primary">
                      <span class="icofont-ui-email p-0 me-2"></span>
                      isabella@gmail.com
                    </div>
                  </td>
                  <td>
                    <div class="text-muted text-nowrap">2 Jul 2018</div>
                  </td>
                  <td>
                    <div class="text-muted text-nowrap">10:00 - 10:15</div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center nowrap text-primary">
                      <span class="icofont-ui-cell-phone p-0 me-2"></span>
                      0126595743
                    </div>
                  </td>
                  <td>Dr. Noah</td>
                  <td>flu</td>
                  <td>
                    <div class="actions">
                      <button class="btn btn-info btn-sm btn-square rounded-pill">
                        <span class="btn-icon icofont-ui-edit"></span>
                      </button>
                      <button class="btn btn-error btn-sm btn-square rounded-pill">
                        <span class="btn-icon icofont-ui-delete"></span>
                      </button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="../assets/content/user-40-7.jpg" alt="" width="40" height="40" class="rounded-500">
                  </td>
                  <td>
                    <strong>Sophia</strong>
                  </td>
                  <td>
                    <div class="d-flex align-items-center nowrap text-primary">
                      <span class="icofont-ui-email p-0 me-2"></span>
                      sophia@gmail.com
                    </div>
                  </td>
                  <td>
                    <div class="text-muted text-nowrap">9 Oct 2018</div>
                  </td>
                  <td>
                    <div class="text-muted text-nowrap">8:30 - 8:45</div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center nowrap text-primary">
                      <span class="icofont-ui-cell-phone p-0 me-2"></span>
                      0126595743
                    </div>
                  </td>
                  <td>Dr. Olivia</td>
                  <td>fracture</td>
                  <td>
                    <div class="actions">
                      <button class="btn btn-info btn-sm btn-square rounded-pill">
                        <span class="btn-icon icofont-ui-edit"></span>
                      </button>
                      <button class="btn btn-error btn-sm btn-square rounded-pill">
                        <span class="btn-icon icofont-ui-delete"></span>
                      </button>
                    </div>
                  </td>
                </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

@endsection

@section('autreScript')
    <script src="{{ asset('js/sweetalert/sweetalert.min.js') }}"></script>
    <script type="text/javascript">
        function info(val) {
            event.preventDefault()
            switch (val) {
                case "rdv":
                    message('pour avoir un rendez-vous',
                        "Verifiez que vous êtes abonnez à ce service dans le menu (Mon compte->Mes abonnements) et prenez votre rendez-vous"
                        )
            break;
            case "pdoc":
            message('et discutez avec nos medecins',
                "Verifiez que vous êtes abonnez à ce service dans le menu (Mon compte->Mes abonnements) et parlez à un medecin"
                )
            break;
            case "contact":
            message(
                "Notre service client est disponible sur whatssapp en bas à droit du site",
                "Notre service client est disponible sur whatssapp en bas à droit du site")
            break;
            case "urgence":
            message('et soyez sécouru d\'urgence',
                "Verifiez que vous êtes abonnez à ce service dans le menu (Mon compte->Mes abonnements) et appelez nous au numéro d'urgence"
                )
            break;

        }
        }

        function message(text, txte) {
            var txt = " Abonnez à nos services et béneficierez de ce service, sinon connectez vous ";

            @auth
            swal({
                title: txte,
                icon: 'info'
            })
            @endauth
            @guest
            swal({
                title: txt+text,
                icon: 'info'
            })
            @endguest
        }
    </script>
@endsection
