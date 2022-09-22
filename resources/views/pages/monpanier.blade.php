@extends('templates.template')

@section('title', 'Panier')
@section('page', 'Mon Panier')
@section('autreStyle')
    <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.datetimepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/parsley/parsley.css') }}">

@endsection
@section('content')
    @include('parties.banner')

    @livewire("monpaniers")

      @endsection

      @section('autreScript')
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.datetimepicker.full.min.js') }}"></script>
    <script src="{{ asset('assets/parsley/js/parsley.js') }}"></script>
    <script src="{{ asset('assets/parsley/i18n/fr.js') }}"></script>

    <script type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var moyen = document.querySelector('select.moyen').value;
            switch_modepaie(moyen);
            var state = document.querySelector('select.carte2').value;
            switch_state(state);
            var commune = document.querySelector('select.comm').value;
            switch_livraisone(commune);
            // var button =  $(".nav-zone .nav-link")
            // var changetitre = $(button,this)
            // $(".nav-zone .nav-link").click(function(){
            //     $('.bagde-zone').text(".nav-zone .nav-link",this)
            // })
        });

        function viewFacture(val) {
            // alert(val.value)
            if (val.value === "cacher") {
                document.querySelector('.factureVue').setAttribute("value", "vue");

                val.textContent = "Rouler la facture";
                document.querySelector('#facture').removeAttribute("hidden");

            } else {
                val.textContent = "Derouler la facture";
                document.querySelector('.factureVue').setAttribute("value", "cacher");
                document.querySelector('#facture').setAttribute("hidden", "");
            }
        }

        function switch_livraisone(val) {
            switch (val) {
                case "OUI":
                    document.getElementById('commune').style.display = "block";
                    document.getElementById('livraisonvue').style.display = "block";
                    break;
                case "NON":
                    var liv = {{ Session::get('priceLivraison', '0') }};
                    if (liv > 0) {
                        noLivraison();
                        document.getElementById('livraisonvue').style.display = "none";
                        document.getElementById('commune').style.display = "none";
                    } else {
                        document.getElementById('commune').style.display = "none";
                        document.getElementById('livraisonvue').style.display = "none";
                    }
                    break;
            }
        }

        function noLivraison() {
            event.preventDefault();

            swal({
                title: 'Merci de patienter...',
                icon: 'info'
            })
            $.ajax({
                url: "../deletePriceLivraison/ok",
                method: "GET",
                data: "",
                success: function(data) {
                    if (!data.reponse) {
                        swal({
                            title: data.msg,
                            icon: 'error'
                        })
                    } else {
                        $('#livraisonvue').html("Livraison : $"+data.pl);
                        // document.getElementById('commune').style.display = "block";
                        $('#total').html("Totale : $ "+data.val);
                       // location.reload();
                        swal({
                            title: data.msg,
                            icon: 'success'
                        })

                    }
                },
            });
        }
        function switch_street(val) {
            event.preventDefault();

            swal({
                title: 'Merci de patienter...',
                icon: 'info'
            })
            $.ajax({
                url: "../getPriceLivraison/" + val,
                method: "GET",
                data: "",
                success: function(data) {
                    //alert(data.reponse + data.val)
                    if (!data.reponse) {
                        swal({
                            title: data.msg,
                            icon: 'error'
                        })
                    } else {
                        $('#livraisonvue').html("Livraison : $"+data.pl);
                        document.getElementById('commune').style.display = "block";
                        $('#total').html("Totale : $ "+data.val);
                       // location.reload();
                        swal({
                            title: data.msg,
                            icon: 'success'
                        })

                    }
                },
            });
        }


        function switch_modepaie(val) {
            switch (val) {
                case "MOBILE_MONEY":
                    // document.getElementById('carte').setAttribute('hidden');
                    document.getElementById('carte').style.display = "none";

                    var el = document.querySelectorAll('input.carte2');
                    document.querySelector('select.carte2').removeAttribute("required");
                    document.querySelector('textarea.carte2').removeAttribute('required');

                    el.forEach(element => {
                        element.removeAttribute("required");
                    });
                    break;
                case "CREDIT_CARD":
                    var el = document.querySelectorAll('input.carte2');
                    document.querySelector('select.carte2').setAttribute('required', "true");
                    el.forEach(element => {
                        element.setAttribute('required', "true");
                    });
                    document.getElementById('carte').style.display = "block";
                    document.querySelector('textarea.carte2').setAttribute('required', "true");
                    break;
                case "":
                    document.getElementById('carte').style.display = "none";

                    var el = document.querySelectorAll('input.carte2');
                    document.querySelector('select.carte2').removeAttribute("required");;
                    el.forEach(element => {
                        element.removeAttribute("required");
                    });

                    break;
            }
        }

        function switch_state(val) {
            switch (val) {
                case "US":
                    document.getElementById('state').style.display = "block";
                    document.getElementById('us').style.display = "block";
                    document.getElementById('ca').style.display = "none";

                    document.querySelector('select.carteca').removeAttribute('required');
                    document.querySelector('select.carteus').setAttribute('required', "true");

                    break;
                case "CA":
                    document.getElementById('state').style.display = "block";

                    document.querySelector('select.carteus').removeAttribute('required');
                    document.querySelector('select.carteca').setAttribute('required', "true");

                    document.getElementById('ca').style.display = "block";
                    document.getElementById('us').style.display = "none";

                    break;

                default:
                    document.getElementById('state').style.display = "none";
                    document.getElementById('us').style.display = "none";
                    document.getElementById('ca').style.display = "none";

                    document.querySelector('select.carteus').removeAttribute('required');
                    document.querySelector('select.carteca').removeAttribute('required');
                    // document.querySelector('input.carte3').removeAttribute('required');
                    break;
            }
        }

        function actualiser() {
            location.reload();
        }
    </script>
@endsection
