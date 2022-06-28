
<section class="inner-page-banner bg-common inner-page-top-margin" data-bg-image="{{ asset('assets/img/slider/figure2.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs-area">
                    <h1>@yield('title')</h1>
                    <ul> 
                        <li>
                            <a href="{{ route('home') }}">Accueil</a>
                        </li>
                        @hasSection('page2')      
                        @yield('parent')                   
                        @else                    
                        <li>@yield('page')</li> 
                        @endif
                        @hasSection('page2')
                        <li> @yield('page2') </li>                            
                        @endif
                </div>
            </div>
        </div>
    </div>
</section>