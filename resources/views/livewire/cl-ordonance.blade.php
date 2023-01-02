<div>
    <div class="app-loader"><i class="icofont-spinner-alt-4 rotate"></i></div>
    <div class="main-content-wrap">
        <div class="d-flex align-items-center justify-content-between mb-2 mb-md-4">
            <h1 class="page-title mt-0 mb-0">
                Mes ordonnances
            </h1>
            <div class="block-tools d-flex align-items-center">
                <div class="block-search d-flex align-items-center">
                    <div class="content-input d-flex align-items-center">
                        <input type="text" class="form-control search-input" name="s"
                            placeholder="Trouver une ordonnance" value="" wire:model.debounce.500ms="search">
                    </div>
                    <div class="block-icon-search">
                        <div class="suffix-icon icofont-search"></div>
                    </div>
                </div>
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
                <div class="col-lg-3 col-12 col-md-6">
                    <div class="card h-100 card-upload">
                        <div class="block-add" data-bs-toggle="modal" data-bs-target="#modal-new-file">
                            <span class="link-icon icofont-plus"></span>
                            <p>Ajouter une ordonnance</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-12 col-md-6">
                    <div class="card card-upload">
                        <div class="row g-1">
                            <div class="col-4 d-flex align-items-center justify-content-center">
                                <span class="link-icon icofont-list icon-ordonnance"></span>
                            </div>
                            <div class="col-8">
                                <h6 class="name">Ordonnance de malaria</h6>
                                <p>Ref: 038KZN</p>
                                <p>Enregistrée le : 11/11/2022</p>
                                <div class="badge success">Validée</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-12 col-md-6">
                    <div class="card card-upload">
                        <div class="row g-1">
                            <div class="col-4 d-flex align-items-center justify-content-center">
                                <span class="link-icon icofont-list icon-ordonnance"></span>
                            </div>
                            <div class="col-8">
                                <h6 class="name">Ordonnance de malaria</h6>
                                <p>Ref: 038KZN</p>
                                <p>Enregistrée le : 11/11/2022</p>
                                <div class="badge warning">En attente</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-12 col-md-6">
                    <div class="card card-upload">
                        <div class="row g-1">
                            <div class="col-4 d-flex align-items-center justify-content-center">
                                <span class="link-icon icofont-list icon-ordonnance"></span>
                            </div>
                            <div class="col-8">
                                <h6 class="name">Ordonnance de malaria</h6>
                                <p>Ref: 038KZN</p>
                                <p>Enregistrée le : 11/11/2022</p>
                                <div class="badge success">Validée</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-12 col-md-6">
                    <div class="card card-upload">
                        <div class="row g-1">
                            <div class="col-4 d-flex align-items-center justify-content-center">
                                <span class="link-icon icofont-list icon-ordonnance"></span>
                            </div>
                            <div class="col-8">
                                <h6 class="name">Ordonnance de malaria</h6>
                                <p>Ref: 038KZN</p>
                                <p>Enregistrée le : 11/11/2022</p>
                                <div class="badge warning">En attente</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-12 col-md-6">
                    <div class="card card-upload">
                        <div class="row g-1">
                            <div class="col-4 d-flex align-items-center justify-content-center">
                                <span class="link-icon icofont-list icon-ordonnance"></span>
                            </div>
                            <div class="col-8">
                                <h6 class="name">Ordonnance de malaria</h6>
                                <p>Ref: 038KZN</p>
                                <p>Enregistrée le : 11/11/2022</p>
                                <div class="badge success">Validée</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-12 col-md-6">
                    <div class="card card-upload">
                        <div class="row g-1">
                            <div class="col-4 d-flex align-items-center justify-content-center">
                                <span class="link-icon icofont-list icon-ordonnance"></span>
                            </div>
                            <div class="col-8">
                                <h6 class="name">Ordonnance de malaria</h6>
                                <p>Ref: 038KZN</p>
                                <p>Enregistrée le : 11/11/2022</p>
                                <div class="badge warning">En attente</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-12 col-md-6">
                    <div class="card card-upload">
                        <div class="row g-1">
                            <div class="col-4 d-flex align-items-center justify-content-center">
                                <span class="link-icon icofont-list icon-ordonnance"></span>
                            </div>
                            <div class="col-8">
                                <h6 class="name">Ordonnance de malaria</h6>
                                <p>Ref: 038KZN</p>
                                <p>Enregistrée le : 11/11/2022</p>
                                <div class="badge success">Validée</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-12 col-md-6">
                    <div class="card card-upload">
                        <div class="row g-1">
                            <div class="col-4 d-flex align-items-center justify-content-center">
                                <span class="link-icon icofont-list icon-ordonnance"></span>
                            </div>
                            <div class="col-8">
                                <h6 class="name">Ordonnance de malaria</h6>
                                <p>Ref: 038KZN</p>
                                <p>Enregistrée le : 11/11/2022</p>
                                <div class="badge warning">En attente</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-new-file" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: var(--colorTitre)">Ajouter une ordonnance</h1>
                <button type="button" class="btn-close btn-modal-close" data-bs-dismiss="modal" aria-label="Close">
                    <span class="icon icofont-close"></span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group row g-2">
                        <div class="col-12">
                            <div class="block-ulpload-file-lg">
                                <input type="file" name="file" id="input-file" accept=".pdf,.jpeg,.png,.jpg">
                                <label for="input-file">
                                    <span class="icon icofont-cloud-upload"></span>
                                    <p>Cliquez pour télécharger un fichier</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 d-none col-file">
                            <ul class="list-file">
                                <li class="d-flex align-items-center">
                                    <div class="block-remove">
                                        <a href="#" class="btn btn-remove">
                                            <span class="icon icofont-bin"></span>
                                        </a>
                                    </div>
                                    <i class="icon icofont-file-file"></i>
                                    <div class="block-detail">
                                        <div class="names">
                                            <p class="name-file-upload"></p>
                                            <p class="pourc">
                                                <span class="icon icofont-check-alt" style="font-size: 20px; color: #07c451"></span>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 d-flex justify-content-end align-items-center d-none col-file">
                            <input type="text" class="form-control" placeholder="Nom du fichier" name="file-name">
                        </div>
                        <div class="col-12 d-flex justify-content-end align-items-center mt-4">
                            <button class="btn btn-add-action">
                                Valider
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
