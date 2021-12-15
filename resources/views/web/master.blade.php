<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ env('APP_NAME') }}</title>
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/sc_logo.png" />
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;900&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-icons/font/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/aos/dist/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}">

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">
    @hasSection('css')
        @yield('css')
    @endif


    <style type="text/css">
        /* html {
            scroll-behavior: smooth;
        } */

        .btn-theme-purple {
            color: #fff;
            background-color: #6f42c1;
            border-bottom: solid 5px #533190 !important;
        }

        .btn-theme-purple:hover {
            background-color: #18b9b6;
            color: white;
            border-bottom: solid 5px #2e7776 !important;
        }

        .btn-theme-success {
            background-color: #18b9b6;
            color: white;
            border-bottom: solid 5px #2e7776 !important;
        }

        .btn-theme-success:hover {
            background-color: #6f42c1;
            color: white;
            border-bottom: solid 5px #533190 !important;
        }

        .text-purple {
            color: #6f42c1 !important;
        }

        .text-green {
            color: #18b9b6 !important;
        }

        .font-weight-400 {
            font-weight: 400 !important;
        }

        .font-weight-600 {
            font-weight: 600 !important;
        }

        .font-weight-900 {
            font-weight: 900 !important;
        }

        .border-bottom-green {
            border-bottom: solid 6px #09e2deba !important;
        }

        .border-bottom-purple {
            border-bottom: solid 6px #5f38a7 !important;
        }

        a:hover .text-inherit-purple {
            color: #6f42c1 !important
        }

        a:hover .text-inherit-green {
            color: #09e2deba !important
        }


        .accordion-button:not(.collapsed)::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath fill-rule='evenodd' d='M5.5,13a.5.5,0,0,1-.5-.5v-1a.5.5,0,0,1,.5-.5h13a.5.5,0,0,1,.5.5v1a.5.5,0,0,1-.5.5Z'/%3e%3c/svg%3e");
        }

        .accordion-button.collapsed::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e") !important;
        }

    </style>

</head>

<body class="bg-dark-theme">
    <!-- ========== HEADER ========== -->
    @include('web.modules.header')
    <!-- ========== END HEADER ========== -->

    <!-- ========== COOKIE ========== -->

    <!-- ========== END COOKIE ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main">

        @yield('content')
        <!-- ========== FOOTER ========== -->
        <footer class="bg-dark">
            <div class="container pb-1 pb-lg-2">
                <div class="row content-space-t-1">
                    <div class="col-lg-3 mb-7 mb-lg-0">
                        <!-- Logo -->
                        <div class="mb-5">
                            <a class="navbar-brand" href="./index.html" aria-label="Space">
                                <span class="font-weight-900 text-white" style="font-size: 30px">UNIT <i
                                        class="bi bi-box text-success" style="font-size: 30px"></i> BOX </span>
                            </a>
                        </div>
                        <!-- End Logo -->

                        <!-- List -->
                        <ul class="list-unstyled list-py-2">
                            <h6>VAMOS TOMAR UM CAFÉ? </h6>
                            <li> <a class="link-sm" href="mailto:contato@unitbox.com.br"><i
                                        class="bi bi-envelope me-1"></i> contato@unitbox.com.br</a>
                            </li>
                            <li>
                                <a class="btn small btn-theme-purple rounded-pill slidelink" href="#faleconoscoSection"
                                    style="font-weight:900; font-size: 12px">FALE CONOSCO<span
                                        class="bi-chevron-right small ms-1"></span>
                                </a>
                            </li>

                        </ul>
                        <!-- End List -->

                    </div>
                    <!-- End Col -->

                    <div class="col-sm mb-7 mb-sm-0">
                        <h5 class="mb-3 ">LINKS RÁPIDOS</h5>

                        <!-- List -->
                        <ul class="list-unstyled list-py-1 mb-0">
                            <li><a class="link-sm link-secondary font-weight-bolder" href="#">PÁGINA PRINCIPAL</a></li>
                            <li><a class="link-sm link-secondary" href="#">PORTIFÓLIO
                                </a></li>
                            <li><a class="link-sm link-secondary" href="#">BLOG</a></li>
                            <li><a class="link-sm link-secondary" href="#">SOBRE NÓS</a></li>
                            {{-- <li><a class="link-sm link-secondary" href="#">TRABALHE CONOCOSCO</a></li> --}}
                        </ul>
                        <!-- End List -->
                    </div>
                    <!-- End Col -->

                    <div class="col-sm mb-7 mb-sm-0">
                        <h5 class="mb-3 ">ALGUNS PROJETOS</h5>

                        <!-- List -->
                        <ul class="list-unstyled list-py-1 mb-0">
                            <li><a class="link-sm link-secondary" href="#">MIMICS ARCADE </a></li>
                            <li><a class="link-sm link-secondary" href="#">WAY BOX</a></li>
                            <li><a class="link-sm link-secondary" href="#">CHATBOT</a></li>
                            <li><a class="link-sm link-secondary" href="#">LANDING PAGE</a></li>
                        </ul>
                        <!-- End List -->
                    </div>
                    <!-- End Col -->

                    <div class="col-sm">
                        <h5 class="mb-3 ">PLATAFORMA</h5>
                        <!-- List -->
                        <ul class="list-unstyled list-py-1 mb-5">
                            <li><a class="link-sm link-secondary" href="#"><i class="bi-person-circle me-1"></i>
                                    ENTRAR</a>
                            </li>
                            <li><a class="link-sm link-secondary" href="#"><i class="bi-question-circle-fill me-1"></i>
                                    CENTRAL DE AJUDA</a></li>
                        </ul>
                        <h5 class="mb-3 ">NOSSOS INTEGRANTES</h5>
                        <div class="col-auto mt-3">
                            <!-- Avatar Group -->
                            <div class="avatar-group avatar-group-sm mb-1">
                                <span class="avatar avatar-circle">
                                    <img class="avatar-img" src="../assets/img/160x160/img10.jpg"
                                        alt="Image Description">
                                </span>
                                <span class="avatar avatar-dark avatar-circle">
                                    <span class="avatar-initials">A</span>
                                </span>
                                <span class="avatar avatar-circle">
                                    <img class="avatar-img" src="../assets/img/160x160/img3.jpg"
                                        alt="Image Description">
                                </span>
                                <span class="avatar avatar-primary avatar-circle">
                                    <span class="avatar-initials">2+</span>
                                </span>
                            </div>
                            <!-- End Avatar Group -->
                        </div>
                        <!-- End List -->
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->

                <div class="border-top my-7"></div>

                <div class="row mb-7">
                    <div class="col-sm mb-3 mb-sm-0">
                        <!-- Socials -->
                        <ul class="list-inline list-separator mb-0">
                            <li class="list-inline-item">
                                <a class="text-body" href="{{ route('web.privacidade') }}">Política de
                                    Privacidade
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-body" href="{{ route('web.termos') }}">Termos de Uso</a>
                            </li>
                        </ul>
                        <!-- End Socials -->
                    </div>

                    <div class="col-sm-auto">
                        <!-- Socials -->
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a class="btn p-4 btn-soft-secondary btn-xs btn-icon" href="#">
                                    <i class="bi-facebook " style="font-size: 1.5rem;"></i>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a class="btn p-4 btn-soft-secondary btn-xs btn-icon" href="#">
                                    <i class="bi-google " style="font-size: 1.5rem;"></i>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a class="btn p-4 btn-soft-secondary btn-xs btn-icon" href="#">
                                    <i class="bi-twitter " style="font-size: 1.5rem;"></i>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a class="btn p-4 btn-soft-secondary btn-xs btn-icon" href="#">
                                    <i class="bi-github " style="font-size: 1.5rem;"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- End Socials -->
                    </div>
                </div>

                <!-- Copyright -->
                <div class="w-md-85 text-lg-center mx-lg-auto">
                    <p class="text-muted small">Feito com <i class="bi bi-heart text-danger"></i> por &copy; UNITBOX
                        <?php echo date('Y'); ?></p>
                    <p class="text-muted small">Todos os direitos reservados</p>
                </div>
                <!-- End Copyright -->
            </div>
        </footer>
        <!-- ========== END FOOTER ========== -->
    </main>
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- Go To -->
    <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;" data-hs-go-to-options='{
       "offsetTop": 700,
       "position": {
         "init": {
           "right": "2rem"
         },
         "show": {
           "bottom": "2rem"
         },
         "hide": {
           "bottom": "-2rem"
         }
       }
     }'>
        <i class="bi-chevron-up"></i>
    </a>
    <!-- ========== END SECONDARY CONTENTS ========== -->

    <!-- JS Global Compulsory  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!-- JS Implementing Plugins -->
    <script src="{{ asset('assets/vendor/hs-header/dist/hs-header.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/hs-go-to/dist/hs-go-to.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/dist/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/fslightbox/index.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-validate/validate.js') }}"></script>

    <!-- JS Front -->
    <script src="{{ asset('assets/js/theme.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme-custom.js') }}"></script>

    @hasSection('js')
        @yield('js')
    @endif

    @if (session()->exists('message'))
        <script>
            $(function() {
                var subject = "{{ session()->get('message') }}";
                var tipo = "{{ session()->get('status') }}";

                getapp.message(tipo, subject, '');
            });
        </script>
    @endif

    <!-- JS Plugins Init. -->
    <script>
        (function() {

            short.init();
            short.checkCookie();

            // INITIALIZATION OF HEADER
            // =======================================================
            new HSHeader('#header').init()

            // INITIALIZATION OF BOOTSTRAP DROPDOWN
            // =======================================================
            HSBsDropdown.init()

            // INITIALIZATION OF GO TO
            // =======================================================
            new HSGoTo('.js-go-to')

            // INITIALIZATION OF AOS
            // =======================================================
            AOS.init({
                duration: 650,
                once: true
            });

            $("li.nav-item .nav-link, .slidelink").click(function(e) {
                e.preventDefault();

                $('.navbar-nav .nav-item a.active').removeClass('active');

                $(this).addClass('active');
                var aid = $(this).attr("href");
                console.log(aid);

                if (aid.length > 2 && aid.indexOf("#") >= 0) {
                    $('html,body').animate({
                        scrollTop: $(aid).offset().top
                    }, 'slow');
                    $('.navbar-collapse').collapse('hide');
                }
            });

            $(".btn_cookie").click(function() {

                const days = 10;
                short.setCookie("cookie_funcional", true, days);
                short.setCookie("cookie_otimizacao", $('input[name="otimizacao"]').is(':checked'), days);
                short.setCookie("cookie_estatistica", $('input[name="otimizacao"]').is(':checked'), days);

            });

        })()
    </script>
</body>

</html>
