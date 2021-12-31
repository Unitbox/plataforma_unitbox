<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords"
        content="Marketing Digital, criador de sites, desenvolvimento de aplicativos, desenvolvimento de soluções, criação de websites, criação de aplicativos, criação de app, criação de sites sp, melhores empresas desenvolvimento de sites e aplicativos, whatsApp, chatbot, medir interações, criação de sites profissionais, site já pronto, Unitbox">

    <meta name="description" content="">
    <meta content="Unitbox" name="author" />
    <meta property="og:title" content="Unitbox" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://unitbox.com.br" />
    <meta property="og:image" content="" />
    <meta property="og:description" content="" />
    <meta name="grecaptcha-key" content="{{ config('recaptcha.v3.public_key') }}">

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

    <script src="https://www.google.com/recaptcha/api.js?render={{ config('recaptcha.v3.public_key') }}"></script>

    @hasSection('css')
        @yield('css')
    @endif


    <style type="text/css">
        html {
            scroll-behavior: smooth;
        }

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
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        }

        .bg-dark-theme {
            background-color: #222529 !important;
        }

        .grecaptcha-badge {
            visibility: hidden;
        }

        .navbar-transparent {
            box-shadow: 0 1px 5px 0px rgb(0 0 0 / 20%);
            -moz-box-shadow: 0 1px 5px 0px rgba(0, 0, 0, 0.2);
            -webkit-box-shadow: 0 1px 5px 0px rgb(0 0 0 / 20%);
            -o-box-shadow: 0 1px 5px 0px rgba(0, 0, 0, 0.2);
            -ms-box-shadow: 0 1px 5px 0px rgba(0, 0, 0, 0.2);
            opacity: 0.9;
            transition: 0.4s;
        }

    </style>

</head>

<body class="bg-dark-theme">
    <!-- ========== HEADER ========== -->
    @include('web.modules.header')
    <!-- ========== END HEADER ========== -->

    <h1 style="display: none"></h1>


    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main">
        @yield('content')
    </main>
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- ========== COOKIE ========== -->
    @include('web.modules.notificationcookie')
    <!-- ========== END COOKIE ========== -->

    <!-- ========== FOOTER ========== -->
    <footer class="bg-dark">
        <div class="container pb-1 pb-lg-2">
            <div class="row content-space-t-1">
                <div class="col-lg-3 mb-7 mb-lg-0">
                    <!-- Logo -->
                    <div class="mb-5">
                        <a class="navbar-brand" href="{{ route('web.home') }}/#home" aria-label="Space">
                            <span class="font-weight-900 text-white" style="font-size: 24px">UNITBOX &nbsp;
                                <span class="svg-icon svg-icon-sm text-success" >
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" d="M5 8.04999L11.8 11.95V19.85L5 15.85V8.04999Z"
                                            fill="#035A4B" />
                                        <path
                                            d="M20.1 6.65L12.3 2.15C12 1.95 11.6 1.95 11.3 2.15L3.5 6.65C3.2 6.85 3 7.15 3 7.45V16.45C3 16.75 3.2 17.15 3.5 17.25L11.3 21.75C11.5 21.85 11.6 21.85 11.8 21.85C12 21.85 12.1 21.85 12.3 21.75L20.1 17.25C20.4 17.05 20.6 16.75 20.6 16.45V7.45C20.6 7.15 20.4 6.75 20.1 6.65ZM5 15.85V7.95L11.8 4.05L18.6 7.95L11.8 11.95V19.85L5 15.85Z"
                                            fill="#035A4B" />
                                    </svg>

                                </span>
                            </span>


                        </a>
                    </div>
                    <!-- End Logo -->

                    <!-- List -->
                    <ul class="list-unstyled list-py-2">
                        <h6>VAMOS TOMAR UM CAFÉ E CONVERAR? </h6>
                        <li> <a class="link-sm" href="mailto:contato@unitbox.com.br"><i
                                    class="bi bi-envelope me-1"></i> contato@unitbox.com.br</a>
                        </li>
                        <li>
                            <a class="btn small btn-theme-purple rounded-pill slidelink"
                                href="{{ route('web.home') }}/#faleconosco"
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
                        <li><a class="link-sm link-secondary font-weight-bolder"
                                href="{{ route('web.home') }}/#home">HOME</a></li>
                        <li><a class="link-sm link-secondary" href="{{ route('web.home') }}/#produtos">PRODUTOS
                            </a></li>
                        <li><a class="link-sm link-secondary" href="{{ route('web.home') }}/#blog">BLOG</a></li>
                        <li><a class="link-sm link-secondary" href="{{ route('web.home') }}/#saibamais">SOBRE NÓS</a>
                        </li>
                        {{-- <li><a class="link-sm link-secondary" href="#">TRABALHE CONOCOSCO</a></li> --}}
                    </ul>
                    <!-- End List -->
                </div>
                <!-- End Col -->

                <div class="col-sm mb-7 mb-sm-0">
                    <h5 class="mb-3 ">ALGUNS PROJETOS</h5>

                    <!-- List -->
                    <ul class="list-unstyled list-py-1 mb-0">
                        <li><a class="link-sm link-secondary" href="https://uniplay.com.br" target="_blank">MIMICS
                                ARCADE </a></li>
                    </ul>
                    <!-- End List -->
                </div>
                <!-- End Col -->

                <div class="col-sm">
                    <h5 class="mb-3 ">COLABORADORES</h5>
                    <div class="col-auto mt-3">
                        <!-- Avatar Group -->
                        <div class="avatar-group avatar-group-sm mb-1">
                            <span class="avatar avatar-circle"
                                onclick="window.open('https://www.linkedin.com/in/leonardo-augustus/', '_blank')">
                                <img class="avatar-img"
                                    src="{{ asset('assets/img/perfis/leonardo_1628340865587.jpeg') }}"
                                    alt="Image Description">
                            </span>
                            <span class="avatar avatar-circle"
                                onclick="window.open('https://www.linkedin.com/in/ferrerolan/', '_blank')">
                                <img class="avatar-img"
                                    src="{{ asset('assets/img/perfis/alan_1604883049174.jpeg') }}"
                                    alt="Image Description">
                            </span>
                            <span class="avatar avatar-circle"
                                onclick="window.open('https://www.linkedin.com/in/mauricio-freitas-a973b3141/', '_blank')">
                                <img class="avatar-img"
                                    src="{{ asset('assets/img/perfis/mauricio_1634892342100.jpeg') }}"
                                    alt="Image Description">
                            </span>
                            <span class="avatar avatar-circle"
                                onclick="window.open('https://www.linkedin.com/in/rafaelnanis/', '_blank')">
                                <img class="avatar-img"
                                    src="{{ asset('assets/img/perfis/rafa_1629135925566.jpeg') }}"
                                    alt="Image Description">
                            </span>
                            <span class="avatar avatar-circle"
                                onclick="window.open('https://www.linkedin.com/in/rubismar-souza/', '_blank')">
                                <img class="avatar-img"
                                    src="{{ asset('assets/img/perfis/rubis_1573603044622.jpeg') }}"
                                    alt="Image Description">
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
                            <a class="text-body" href="{{ route('web.privacidade') }}">Política de Privacidade
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
                                <i class="bi-twitch " style="font-size: 1.5rem;"></i>
                            </a>
                        </li>

                        <li class="list-inline-item">
                            <a class="btn p-4 btn-soft-secondary btn-xs btn-icon"
                                href="https://www.instagram.com/unitbox/">
                                <i class="bi-instagram " style="font-size: 1.5rem;"></i>
                            </a>
                        </li>

                        <li class="list-inline-item">
                            <a class="btn p-4 btn-soft-secondary btn-xs btn-icon" href="https://github.com/Unitibox">
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

    <!-- Go To -->
    <a class="js-go-to go-to position-fixed btn-theme-purple" href="javascript:;" style="visibility: hidden;"
        data-hs-go-to-options='{
       "offsetTop": 1000,
       "position": {
         "init": {
           "right": "8rem"
         },
         "show": {
           "bottom": "2rem"
         },
         "hide": {
           "bottom": "-2rem"
         }
       }
     }'>
        <i class="bi-chevron-up text-white"></i>
    </a>

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
    <script src="./assets/vendor/typed.js/lib/typed.min.js"></script>
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

            HSCore.components.HSTyped.init('.js-text-animation')

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
                var url = $(this).attr("href");

                var hash = url.substring(url.indexOf("#") + 1);
                window.location.href = url;

                $('.navbar-collapse').collapse('hide');
            });

            $(".btn_cookie").click(function() {
                const days = 10;
                short.setCookie("cookie_funcional", true, days);
                short.setCookie("cookie_otimizacao", $('input[name="otimizacao"]').is(':checked'), days);
                short.setCookie("cookie_estatistica", $('input[name="otimizacao"]').is(':checked'), days);
            });
        })()

        $(function() {
            recaptcha();
        });

        function recaptcha() {
            let grecaptchaKeyMeta = document.querySelector("meta[name='grecaptcha-key']");
            let grecaptchaKey = grecaptchaKeyMeta.getAttribute("content");

            grecaptcha.ready(function() {
                grecaptcha.execute(grecaptchaKey, {
                    action: 'contato'
                }).then(function(token) {
                    $("#grecaptcha").val(token);
                });
            });
        }
    </script>
</body>

</html>
