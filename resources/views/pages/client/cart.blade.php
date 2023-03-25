@extends('templates.templateCl')
@section('title', 'dashboard')
@section('autreStyle')
    <link href="{{ asset('js/sweetalert/sweetalert.css') }}" rel="stylesheet">
@endsection

@section('content')
<main class="main-content">
    <div class="app-loader"><i class="icofont-spinner-alt-4 rotate"></i></div>
    <div class="main-content-wrap">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h1 class="page-title mt-0 mb-0" style="font-size: 16px">
               Panier
            </h1>
        </div>
        <div class="page-content">
            <div class="row g-lg-4 g-3">
                <div class="col-lg-8">
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="card card-prod-dash card-prod-dash-lg">
                                <div class="row align-items-center">
                                    <div class="col-2">
                                        <a href="http://127.0.0.1:8000/detailProdui/1">
                                            <div class="block-img-prod png">
                                                <img src="http://127.0.0.1:8000/assets/img/shop1.png" class="card-img-top" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <div class="block-detail-prod">
                                            <span class="category">Médicament</span>
                                            <h6 class="name-prod mt-0">carmel-bauch</h6>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="block-detail-prod">
                                            <span class="category">Quantité</span>
                                            <h6 class="name-prod mt-0">4</h6>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="block-detail-prod">
                                            <span class="category">Prix</span>
                                            <h6 class="name-prod mt-0">4000FC</h6>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="delete">
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card card-prod-dash card-prod-dash-lg">
                                <div class="row align-items-center">
                                    <div class="col-2">
                                        <a href="http://127.0.0.1:8000/detailProdui/1">
                                            <div class="block-img-prod png">
                                                <img src="http://127.0.0.1:8000/assets/img/shop1.png" class="card-img-top" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <div class="block-detail-prod">
                                            <span class="category">Médicament</span>
                                            <h6 class="name-prod mt-0">carmel-bauch</h6>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="block-detail-prod">
                                            <span class="category">Quantité</span>
                                            <h6 class="name-prod mt-0">4</h6>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="block-detail-prod">
                                            <span class="category">Prix</span>
                                            <h6 class="name-prod mt-0">4000FC</h6>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="delete">
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card card-prod-dash card-prod-dash-lg">
                                <div class="row align-items-center">
                                    <div class="col-2">
                                        <a href="http://127.0.0.1:8000/detailProdui/1">
                                            <div class="block-img-prod png">
                                                <img src="http://127.0.0.1:8000/assets/img/shop1.png" class="card-img-top" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <div class="block-detail-prod">
                                            <span class="category">Médicament</span>
                                            <h6 class="name-prod mt-0">carmel-bauch</h6>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="block-detail-prod">
                                            <span class="category">Quantité</span>
                                            <h6 class="name-prod mt-0">4</h6>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="block-detail-prod">
                                            <span class="category">Prix</span>
                                            <h6 class="name-prod mt-0">4000FC</h6>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="delete">
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card card-prod-dash card-prod-dash-lg">
                                <div class="row align-items-center">
                                    <div class="col-2">
                                        <a href="http://127.0.0.1:8000/detailProdui/1">
                                            <div class="block-img-prod png">
                                                <img src="http://127.0.0.1:8000/assets/img/shop1.png" class="card-img-top" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <div class="block-detail-prod">
                                            <span class="category">Médicament</span>
                                            <h6 class="name-prod mt-0">carmel-bauch</h6>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="block-detail-prod">
                                            <span class="category">Quantité</span>
                                            <h6 class="name-prod mt-0">4</h6>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="block-detail-prod">
                                            <span class="category">Prix</span>
                                            <h6 class="name-prod mt-0">4000FC</h6>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="delete">
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card card-prod-dash card-prod-dash-lg">
                                <div class="row align-items-center">
                                    <div class="col-2">
                                        <a href="http://127.0.0.1:8000/detailProdui/1">
                                            <div class="block-img-prod png">
                                                <img src="http://127.0.0.1:8000/assets/img/shop1.png" class="card-img-top" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <div class="block-detail-prod">
                                            <span class="category">Médicament</span>
                                            <h6 class="name-prod mt-0">carmel-bauch</h6>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="block-detail-prod">
                                            <span class="category">Quantité</span>
                                            <h6 class="name-prod mt-0">4</h6>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="block-detail-prod">
                                            <span class="category">Prix</span>
                                            <h6 class="name-prod mt-0">4000FC</h6>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="delete">
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="card card-upload card-filter-lg">
                        <h5 class="mt-0 mb-0">Récaptulation</h5>
                        <div class="d-flex justify-content-between mt-3 mb-4">
                            <p style="font-size: 16px">Total à payer</p>
                            <h4 class="mb-0 mt-0 text-end" style="color: var(--colorTitre); line-height: 100%">200000FC <br><span style="color: var(--colorParagraph); font-weight:400">10$</span></h4>
                        </div>
                        <div class="d-flex align-items-center justify-content-end">
                            <a href="#" class="btn btn-second mb-0 me-4">Vider le panier</a>
                            <a href="#" class="btn btn-first mb-0"><span class="icofont-ui-dollar"></span>Facturation</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@section('autreScript')
<script>
    const rangeInput =  document.querySelectorAll(".range-input-1 input"),
        priceInput = document.querySelectorAll(".price-input-1 input"),
        progress = document.querySelector(".slider .progressBar-1");

        let priceGap =  1000;

        rangeInput.forEach(input =>{
            input.addEventListener("input", e =>{
                let minVal = parseInt(rangeInput[0].value),
                maxVal = parseInt(rangeInput[1].value);

                if(maxVal - minVal < priceGap){
                    if(e.target.className === "range-min"){
                        rangeInput[0].value = maxVal - priceGap;
                    }
                    else{
                        rangeInput[1].value = minVal + priceGap;
                    }
                }
                else{
                    priceInput[0].value = minVal;
                    priceInput[1].value = maxVal;
                    progress.style.left = (minVal / rangeInput[0].max) * 100 + "%";
                    progress.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
                }
            })
        })
        $('.list-shop li').click(function(){
            $('.list-shop li').removeClass('active')
            $(this).addClass('active')
        })
</script>

@endsection
