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
<!-- Owl Carousel Js -->
<script src="{{ asset('assets/vendor/OwlCarousel/owl.carousel.min.js') }}"></script>
@yield('autreScript')
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

<script async src='https://stackwhats.com/pixel/2fa93742e74205573241c74f75d46f'></script>
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


</body>

</html>