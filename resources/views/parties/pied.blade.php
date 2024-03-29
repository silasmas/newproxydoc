</div>
<!-- jquery-->
<script src="{{ asset('assets/js/jquery-2.2.4.min.js') }}"></script>
<!-- Plugins js -->
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<!-- Popper js -->
<script src="{{ asset('assets/js/popper.js') }}"></script>
<!-- Bootstrap js -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- Counterup Js -->
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
<!-- WOW JS -->
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<!-- Waypoints Js -->
<script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
<!-- Parallaxie Js -->
<script src="{{ asset('assets/js/parallaxie.js') }}"></script>
<!-- Nivo slider js -->
<script src="{{ asset('assets/vendor/slider/js/jquery.nivo.slider.js') }}"></script>
<script src="{{ asset('assets/vendor/slider/home.js') }}"></script>
@yield('autreScript')
@livewireScripts()
<!-- Owl Carousel Js -->
<script src="{{ asset('assets/vendor/OwlCarousel/owl.carousel.min.js') }}"></script>
<!-- Meanmenu Js -->
<script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
<!-- Magnific Popup Js -->
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<!-- Isotope Js -->
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
<!-- Smoothscroll Js -->
<script src="{{ asset('assets/js/smoothscroll.min.js') }}"></script>
<!-- Custom Js -->
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('js/sweetalert/sweetalert.min.js') }}"></script>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>


<!-- Sendinblue Conversations {literal} -->
<script>
    (function(d, w, c) {
        w.SibConversationsID = '63b2dfaebc5faf7191551ccd';
        w[c] = w[c] || function() {
            (w[c].q = w[c].q || []).push(arguments);
        };
        var s = d.createElement('script');
        s.async = true;
        s.src = 'https://conversations-widget.sendinblue.com/sib-conversations.js';
        if (d.head) d.head.appendChild(s);
    })(document, window, 'SibConversations');
</script>
<!-- /Sendinblue Conversations {/literal} -->

@auth
@if ($mesService->pluck('nom')->contains('standars')||$mesService->pluck('nom')->contains('Premium')||$mesService->pluck('nom')->contains('business'))
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/6254d148b0d10b6f3e6d0a3d/1g0dl31tg';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
@endif

@endauth

<script>

    window.addEventListener('swal:modal',event=>{
            swal({
                title: event.detail.titre,
                text: event.detail.text+event.detail.from,
                icon: event.detail.type,
            });
            switch (event.detail.from) {
                case "Monpanier":
               // window.livewire.emit('updateMonPanier');
                    break;
                case "Detail":
              //  window.livewire.emit('updateDetail');
                    break;

                default:
                    break;
            }
        });
    window.addEventListener('swal:confirm',event=>{
            swal({
                title: event.detail.titre,
                text: event.detail.text,
                icon: event.detail.type,
            dangerMode: true,
            buttons: {
                cancel: 'Non',
                delete: 'OUI'
            }
        }).then(function(willDelete) {
            if (willDelete) {
               switch (event.detail.from) {
                case 'Monpanier':
                window.livewire.emit('removeCardeMonPanier',event.detail.id);
                    break;
                case 'panier':

                    window.livewire.emit('removeCarde',event.detail.id);
                    break;
                case 'Detail':

                    window.livewire.emit('ajoutCardsDetail',event.detail.id);
                    break;

                default:
                    break;
               }
            }

        });
        });




    $('.btn-search').click(function(){
        $('.form-search-nav').addClass('active')
    })
    function addToCart(id) {
        event.preventDefault()
     //  addCard(id, "", "../addCard");
    }

    function removedCart(form) {
        event.preventDefault()
        swal({
            title: 'Merci de patienter...',
            icon: 'info'
        })
        $.ajax({
            url: $(form).attr('action'),
            method: "POST",
            data: $(form).serialize(),
            success: function(data) {
                if (!data.reponse) {
                    swal({
                        title: data.msg,
                        icon: 'error'
                    })
                } else {
                    swal({
                        title: data.msg,
                        icon: 'success'
                    })
                    actualiser();
                }
            },
        });

    }
    function addCard(form, idLoad, url) {
        event.preventDefault()
        swal({
            title: 'Merci de patienter...',
            icon: 'info'
        })
        $.ajax({
            url: url,
            method: "POST",
            data: $(form).serialize(),
            success: function(data) {
                if (!data.reponse) {
                    swal({
                        title: data.msg,
                        icon: 'error'
                    })
                } else {
                    swal({
                        title: data.msg,
                        icon: 'success'
                    })
                   // actualiser();
                }
            },
        });

    }
    function confirmLivraison(id) {
        event.preventDefault()
        swal({
            title: "Confirmation livraison",
            text: "Vous êtes surle point de confirmé votre livraison, êtes vous sûre d'avoir reçu touts vos produit achéter?",
            icon: 'warning',
            dangerMode: true,
            buttons: {
                cancel: 'Non',
                delete: 'OUI'
            }
        }).then(function(willDelete) {
            if (willDelete) {
                swal({
            title: 'Merci de patienter...',
            icon: 'info'
        })
        $.ajax({
            url: $(id).attr('action'),
            method: "POST",
            data: $(id).serialize(),
            success: function(data) {
                if (!data.reponse) {
                    swal({
                        title: data.msg,
                        icon: 'error'
                    })
                } else {
                    swal({
                        title: data.msg,
                        icon: 'success'
                    })
                    actualiser();
                }
            },
        });
            } else {

            }

        });
    }
    function removeFromCartList(id) {
        event.preventDefault()
        swal({
            title: "Supprimer du panier",
            text: "êtes-vous sûre de supprimer ce produit du panier?",
            icon: 'warning',
            dangerMode: true,
            buttons: {
                cancel: 'Non',
                delete: 'OUI'
            }
        }).then(function(willDelete) {
            if (willDelete) {
                removedCart(id);
            } else {

            }

        });
    }
    function actualiser() {
        location.reload();
    }
</script>
<script src="{{ asset('assets/js/js/app.js') }}"></script>
            <script src="{{ asset('assets/js/js/bootstrap.min.js') }}"></script>
            <script>
                $(window).scroll(function() {

                    if ($(this).scrollTop() > 40) {
                        $(".navbar").addClass('bg-white');

                    } else {
                        $(".navbar").removeClass('bg-white');
                    }
                });
                $('.menu-toggle').click(function() {
                    $(this).toggleClass('active')
                    $('.full-menu').addClass('active')
                })
                $('.close-menu').click(function() {
                    $('.menu-toggle').removeClass('active')
                    $('.full-menu').removeClass('active')
                })
                // $(window).on('load',function(){
                //     $('.loading').addClass('complete');
                // });
                $('.scrollTop').click(function() {
                    $('.scrollTop').removeClass('active')
                    $(this).addClass('active')
                    $('.menu-toggle').removeClass('active')

                    $('.full-menu').removeClass('active')
                    var getElement = $(this).attr('href');
                    if ($(getElement).length) {
                        var getOffset = $(getElement).offset().top - $('.navbar').height();
                        $('html,body').animate({
                            scrollTop: getOffset
                        }, 1000);
                    }
                    return false;
                })
                new WOW().init()
            </script>
</body>

</html>
