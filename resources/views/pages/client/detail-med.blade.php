@extends('templates.templateCl')
@section('title', 'dashboard')
@section('autreStyle')
    <link href="{{ asset('js/sweetalert/sweetalert.css') }}" rel="stylesheet">
@endsection

@section('content')
<main class="main-content">
    <div class="app-loader"><i class="icofont-spinner-alt-4 rotate"></i></div>
    <div class="main-content-wrap">
        <div class="d-flex align-items-center justify-content-between mb-5">
            <h1 class="page-title mt-0 mb-0" style="font-size: 16px">
               Détail medicament
            </h1>
        </div>
        <div class="page-content">
            <div class="row g-lg-4 g-3 align-items-center">
                <div class="col-lg-6">
                    <div class="card card-prod-lg">
                        <div class="img-med">
                            <img src="{{asset('assets/img/shop1.png')}}" class="card-img-top w-100" alt="">
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="card card-upload card-filter-lg">
                        <div class="block-detail">
                            <div class="d-flex align-items-center">
                                <h5 class="mt-0 mb-0">Nom du médicament</h5>
                                <div class="badge success ms-auto mb-0">Disponible</div>
                            </div>
                            
                            <p class="cat">Médicament</p>
                            
                        </div>
                        <h6 class="mt-0">Quantité</h6>
                        <div class="d-flex mb-4 align-items-center">
                            <button class="btn btn-action me-2">-</button>
                            <input type="text" placeholder="" value="0" class="form-control w-25 text-center">
                            <button class="btn btn-action ms-2">+</button>
                        </div>
                        <h6 class="mt-0">Filtre de prix</h6>
                        <div class="price-input price-input-1 mb-4">
                            <div class="field">
                                <span>FC</span>
                                <input type="text" name="" id="" class="form-control input-min" value="2500">
                            </div>
                            <div class="separator">-</div>
                            <div class="field">
                                <span>FC</span>
                                <input type="text" name="" id="" class="form-control input-max" value="7500">
                            </div>
                        </div>
                        <div class="slider mb-4">
                            <div class="progressBar progressBar-1">
                            </div>
                            <div class="range-input range-input-1">
                                <input type="range" class="range-min" min="0" max="10000" value="2500" step="100">
                                <input type="range" class="range-max" min="0" max="10000" value="7500" step="100">
                            </div>
                        </div>
                        <h6 class="mt-4">Pharmacies disponibles</h6>
                        <ul class="list-shop mb-5">
                            <li>
                                <input type="radio" name="radio-check" id="select-shop">
                                <label for="select-shop">
                                    Pharmancie du 30 juin
                                </label>
                            </li>
                            <li>
                                <input type="radio" name="radio-check" id="select-shop">
                                <label for="select-shop">
                                    Pharmancie du 30 juin
                                </label>
                            </li>
                            <li>
                                <input type="radio" name="radio-check" id="select-shop">
                                <label for="select-shop">
                                    Pharmancie du 30 juin
                                </label>
                            </li>
                            <li>
                                <input type="radio" name="radio-check" id="select-shop">
                                <label for="select-shop">
                                    Pharmancie du 30 juin
                                </label>
                            </li>
                            <li>
                                <input type="radio" name="radio-check" id="select-shop">
                                <label for="select-shop">
                                    Pharmancie du 30 juin
                                </label>
                            </li>
                            <li>
                                <input type="radio" name="radio-check" id="select-shop">
                                <label for="select-shop">
                                    Pharmancie du 30 juin
                                </label>
                            </li>
                        </ul>
                        <div class="d-flex align-items-center mb-3">
                            <a href="#" class="btn btn-first mb-0 me-4"><span class="icofont-ui-cart"></span> Ajouter au panier</a>
                            <a href="#" class="btn btn-second mb-0">Acheter maintenant</a>
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
