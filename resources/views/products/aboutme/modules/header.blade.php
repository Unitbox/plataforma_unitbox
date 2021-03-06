<header id="header" class="navbar navbar-expand-lg navbar-end navbar-absolute-top navbar-dark navbar-show-hide bg-dark-theme"
    data-hs-header-options='{
  "fixMoment": 1000,
  "fixEffect": "slide"
}'>
    {{-- <!-- INICIO PROMOÇÃO -->
    <div class="container ">
      <ul class="nav ms-auto mb-2 right-0 mt-1">

    </ul>
    </div>
    <!-- FIM PROMOÇÃO --> --}}

    <div class="container">
        <nav class="navbar-nav-wrap">
            <!-- Default Logo -->
            <a class="navbar-brand " href="{{ route('web.home') }}/#home" aria-label="Unitbox">
                <span class="font-weight-900 " style="font-size: 30px">
                    <span class="d-none d-md-inline-block">About</span>
                    <i class="bi bi-box text-success ms-1" style="font-size: 40px"></i>
                    <span class="d-none d-md-inline-block">ME</span>
                </span>
            </a>
            <!-- End Default Logo -->

            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-default">
                    <i class="bi-list"></i>
                </span>
                <span class="navbar-toggler-toggled">
                    <i class="bi-x"></i>
                </span>
            </button>
            <!-- End Toggler -->

            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <div class="navbar-absolute-top-scroller">
                    <ul class="navbar-nav" style="font-weight:900">

                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('web.home') }}/#home">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('web.home') }}/#produtos">PRODUTOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('web.home') }}/#blog">BLOG</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('web.home') }}/#saibamais">SAIBA MAIS</a>
                        </li>
                        
                        {{-- <li class="nav-item">
                       
                            <a class="text-white text-decoration-none" href="https://instagram.com/meuagendo" target="_blank">
                                <i class="fab fa-instagram mr-2" style="font-size: 20px"></i></a>
                            &nbsp;
                            <a class="text-white text-decoration-none" href="https://api.whatsapp.com/send?phone=5511984177306&text="
                                target="_blank">
                                <i class="fab fa-whatsapp mr-2" style="font-size: 20px"></i></a>
                    
                        </li> --}}

                        <!-- Button -->
                        <li class="nav-item ps-lg-4 ps-md-4">
                            <a class="btn btn-theme-purple btn-transition rounded-pill slidelink" href="{{ route('web.home') }}/#faleconosco"
                                style="font-weight:900">FALE CONOSCO<span
                                    class="bi-chevron-right small ms-1"></span></a>
                        </li>
                        <!-- End Button -->
                    </ul>

                </div>
            </div>
            <!-- End Collapse -->
        </nav>
    </div>
</header>
