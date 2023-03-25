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
              Facturation
            </h1>
        </div>
        <div class="page-content">
            <div class="row g-lg-4 g-3">
                <div class="col-lg-8">
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="card card-upload card-filter-lg">
                                <form action="">
                                    <h5 class="mt-0 mb-4"><span style="color: var(--primaryColor)">1.</span> Informations personnelles</h5>
                                    <div class="form-group row g-3">
                                        <div class="col-lg-6">
                                            <label for="">Nom</label>
                                            <input type="text" placeholder="Votre nom" class="form-control">
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="">Prénom</label>
                                            <input type="text" placeholder="Votre nom" class="form-control">
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="">Téléphone</label>
                                            <input type="text" placeholder="Votre nom" class="form-control">
                                        </div>
                                    </div>
                                    <hr>
                                    <h5 class="mt-0 mb-4"><span style="color: var(--primaryColor)">3.</span> Mode de payement</h5>
                                    <div class="form-group row g-3">
                                        <div class="col-lg-12">
                                            <label for="">Moyen de payement</label>
                                            <input type="text" placeholder="Votre nom" class="form-control">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="card card-upload card-filter-lg">
                        <h5 class="mt-0 mb-0">Mon panier</h5>
                        <div class="d-flex justify-content-between mt-3 mb-4">
                            <p style="font-size: 16px">Nom produit</p>
                            <h4 class="mb-0 mt-0 text-end" style="color: var(--colorTitre); line-height: 100%; font-size: 16px">200000FC <br><span style="color: var(--colorParagraph); font-weight:400">10$</span></h4>
                        </div>
                        <div class="d-flex justify-content-between mt-3 mb-4">
                            <p style="font-size: 16px">Nom produit</p>
                            <h4 class="mb-0 mt-0 text-end" style="color: var(--colorTitre); line-height: 100%; font-size: 16px">200000FC <br><span style="color: var(--colorParagraph); font-weight:400">10$</span></h4>
                        </div>
                        <div class="d-flex justify-content-between mt-3 mb-4">
                            <p style="font-size: 16px">Nom produit</p>
                            <h4 class="mb-0 mt-0 text-end" style="color: var(--colorTitre); line-height: 100%; font-size: 16px">200000FC <br><span style="color: var(--colorParagraph); font-weight:400">10$</span></h4>
                        </div>
                        <div class="d-flex justify-content-between mt-3 mb-4">
                            <p style="font-size: 16px">Nom produit</p>
                            <h4 class="mb-0 mt-0 text-end" style="color: var(--colorTitre); line-height: 100%; font-size: 16px">200000FC <br><span style="color: var(--colorParagraph); font-weight:400">10$</span></h4>
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <p style="font-size: 20px">Total à payer</p>
                            <h4 class="mb-0 mt-0 text-end" style="color: var(--colorTitre); line-height: 100%">200000FC <br><span style="color: var(--colorParagraph); font-weight:400">10$</span></h4>
                        </div>
                        {{-- <div class="d-flex align-items-center justify-content-end">
                            <a href="#" class="btn btn-first mb-0">Payer maintenant</a>
                        </div> --}}
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
