<header id="header" class="navbar navbar-expand-lg navbar-end navbar-absolute-top navbar-transparent navbar-dark navbar-show-hide shadow-none"
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
                    <span class="d-none d-md-inline-block">UNITBOX</span>
                    <span class="svg-icon text-success" >
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.3" d="M5 8.04999L11.8 11.95V19.85L5 15.85V8.04999Z"
                                fill="#035A4B" />
                            <path
                                d="M20.1 6.65L12.3 2.15C12 1.95 11.6 1.95 11.3 2.15L3.5 6.65C3.2 6.85 3 7.15 3 7.45V16.45C3 16.75 3.2 17.15 3.5 17.25L11.3 21.75C11.5 21.85 11.6 21.85 11.8 21.85C12 21.85 12.1 21.85 12.3 21.75L20.1 17.25C20.4 17.05 20.6 16.75 20.6 16.45V7.45C20.6 7.15 20.4 6.75 20.1 6.65ZM5 15.85V7.95L11.8 4.05L18.6 7.95L11.8 11.95V19.85L5 15.85Z"
                                fill="#035A4B" />
                        </svg>
                    </span>
                    {{-- <img src="{{ asset('assets/img/web/site/Cover.png') }}" alt="logo-mimics-uniplay" title="Mimics Arcade" class="logo-dark p-0" style="width: 250px"> --}}
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
                            <a class="nav-link" href="{{ route('web.home') }}/#servicos">SERVIÇOS</a>
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
