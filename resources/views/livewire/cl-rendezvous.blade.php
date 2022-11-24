<div>
    <div class="app-loader"><i class="icofont-spinner-alt-4 rotate"></i></div>
    <div class="main-content-wrap">
        <div class="d-flex align-items-center justify-content-between mb-5">
            <h1 class="page-title mt-0 mb-0">
                Rendez-vous
            </h1>
            <div class="block-tools d-flex align-items-center justify-content-end">
                {{-- <div class="block-search d-flex align-items-center">
                    <div class="content-input d-flex align-items-center">
                        <input type="text" class="form-control search-input" name="s"
                            placeholder="Trouver un médécin" value="">
                    </div>
                    <div class="block-icon-search">
                        <div class="suffix-icon icofont-search"></div>
                    </div>
                </div> --}}
                <a href="#" class="btn btn-add-action">
                    Prendre rendez-vous
                </a>
            </div>
            <div class="col col-lg-3" wire:loading>
                <div
                    style="display: flex;justify-content: center;align-items:center;background-color:black;
                position : fixed; top:0px;left:0px;z-index:9999; width:100%;height: 100%; opacity: .75;">
                    <div style="color: #64d6e2" class="la-ball-clip-rotate-multiple la-3x">
                        <div></div>
                        <div></div>
                    </div>

                </div>
            </div>
        </div>
        <div class="page-content">
            <div class="row g-lg-4 g-3">
                <div class="col-12">
                    <div class="card card-table">
                        <h6>Liste des rendez-vous</h6>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Titre</th>
                                        <th scope="col">Docteur</th>
                                        <th scope="col">Motif</th>
                                        <th scope="col">Heure</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Etat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            01
                                        </td>
                                        <td>
                                            Rendez-vous de santé
                                        </td>
                                        <td>
                                            <div class="block-detail-doc-sm d-flex aling-items-center">
                                                <div class="avatar">
                                                    <img src="{{asset('assets/client/content/user-400-1.jpg')}}" alt="">
                                                </div>
                                                <span class="name">John Doe</span>
                                            </div>
                                        </td>
                                        <td>
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est, accusamus.
                                        </td>
                                        <td>
                                            12h:30
                                        </td>
                                        <td>
                                            2022-10-21
                                        </td>
                                        <td>
                                            <div class="badge succes">Succes</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            02
                                        </td>
                                        <td>
                                            Rendez-vous de santé
                                        </td>
                                        <td>
                                            <div class="block-detail-doc-sm d-flex aling-items-center">
                                                <div class="avatar">
                                                    <img src="{{asset('assets/client/content/user-400-1.jpg')}}" alt="">
                                                </div>
                                                <span class="name">John Doe</span>
                                            </div>
                                        </td>
                                        <td>
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est, accusamus.
                                        </td>
                                        <td>
                                            12h:30
                                        </td>
                                        <td>
                                            2022-10-21
                                        </td>
                                        <td>
                                            <div class="badge danger">Danger</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            02
                                        </td>
                                        <td>
                                            Rendez-vous de santé
                                        </td>
                                        <td>
                                            <div class="block-detail-doc-sm d-flex aling-items-center">
                                                <div class="avatar">
                                                    <img src="{{asset('assets/client/content/user-400-1.jpg')}}" alt="">
                                                </div>
                                                <span class="name">John Doe</span>
                                            </div>
                                        </td>
                                        <td>
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est, accusamus.
                                        </td>
                                        <td>
                                            12h:30
                                        </td>
                                        <td>
                                            2022-10-21
                                        </td>
                                        <td>
                                            <div class="badge warning">Warning</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
