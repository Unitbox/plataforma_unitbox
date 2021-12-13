<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>Home Page</title>
    <link rel="shortcut icon" href="./favicon.ico">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="./assets/vendor/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css">
    <link rel="stylesheet" href="./assets/vendor/aos/dist/aos.css">

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="./assets/css/theme.min.css">

    <style type="text/css">
        .btn-rounded {
            border-radius: 2em;
        }

        .btn-google {
            border-color: #888;
            color: #888;
        }

        .btn-google:hover {
            background-color: #f5f5f5;
            color: #888;

        }

        .btn-fb {
            background-color: #3b5998;
            color: #ffffff;

        }

        .btn-fb:hover {
            background-color: #334C80;
            color: #ffffff;

        }

        .btn-twitter {
            background-color: #1bb2e9;
            color: #ffffff;
        }

        .btn-twitter:hover {
            background-color: #1a91da;
            color: white;
        }

        .btn-login {
            background-color: #6f42c1;
            color: white;
            border-bottom: solid 5px #533190 !important;
        }

        .btn-login:hover {
            background-color: #533190;
            color: white;
            border-bottom: solid 5px #533190 !important;
        }

    </style>

</head>

<body>

    @include('demo.partials.banner')

    {{-- @include('demo.partials.cookie') --}}

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main" class="bg-light">
        @yield('content')

        <!-- ========== FOOTER ========== -->
        <footer class="bg-dark">
            <div class="container content-space-t-2 content-space-b-1">
                <div class="row mb-9">
                    <div class="col-lg-3 mb-5 mb-lg-0">
                        <!-- Logo -->
                        <a href="index.html" aria-label="Front">
                            <img class="brand" src="../assets/svg/logos/logo-white.svg" alt="Logo">
                        </a>
                        <!-- End Logo -->
                    </div>
                    <!-- End Col -->

                    <div class="col-6 col-md-3 col-lg-2 mb-5 mb-md-0">
                        <h5 class="text-white">Help and advice</h5>

                        <!-- Links -->
                        <ul class="list-unstyled list-py-1 mb-0">
                            <li><a class="link-sm link-light" href="#">Contact us</a></li>
                            <li><a class="link-sm link-light" href="#">FAQ</a></li>
                            <li><a class="link-sm link-light" href="#">Legal & Privacy</a></li>
                        </ul>
                        <!-- End Links -->
                    </div>
                    <!-- End Col -->

                    <div class="col-6 col-md-3 col-lg-2 mb-5 mb-md-0">
                        <h5 class="text-white">About us</h5>

                        <!-- Nav Links -->
                        <ul class="list-unstyled list-py-1 mb-0">
                            <li><a class="link-sm link-light" href="#">About Spec</a></li>
                            <li><a class="link-sm link-light" href="#">Careers</a></li>
                        </ul>
                        <!-- End Nav Links -->
                    </div>
                    <!-- End Col -->

                    <div class="col-md-6 col-lg-5">
                        <!-- Form -->
                        <form>
                            <h5 class="text-white">Stay up to date</h5>

                            <!-- Input Card -->
                            <div class="input-card mt-3">
                                <div class="input-card-form">
                                    <input type="text" class="form-control" placeholder="Enter email"
                                        aria-label="Enter email">
                                </div>
                                <button type="button" class="btn btn-primary">Submit</button>
                            </div>
                            <!-- End Input Card -->
                        </form>
                        <!-- End Form -->

                        <p class="form-text text-white-70">New UI kits or big discounts. Never spam.</p>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->

                <div class="row align-items-center">
                    <div class="col">
                        <p class="text-white-70 small mb-0">© Front. 2021 Htmlstream. All rights reserved.</p>
                    </div>
                    <!-- End Col -->

                    <div class="col-auto">
                        <!-- Socials -->
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a class="btn btn-ghost-light btn-sm btn-icon" href="#">
                                    <i class="bi-facebook"></i>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a class="btn btn-ghost-light btn-sm btn-icon" href="#">
                                    <i class="bi-google"></i>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a class="btn btn-ghost-light btn-sm btn-icon" href="#">
                                    <i class="bi-twitter"></i>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a class="btn btn-ghost-light btn-sm btn-icon" href="#">
                                    <i class="bi-github"></i>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a class="btn btn-ghost-light btn-sm btn-icon" href="#">
                                    <i class="bi-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- End Socials -->
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>
        </footer>
        <!-- ========== END FOOTER ========== -->
    </main>


   <!-- JS Global Compulsory  -->
   <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

   <!-- JS Implementing Plugins -->
   <script src="./assets/vendor/hs-header/dist/hs-header.min.js"></script>
   <script src="./assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.js"></script>
   <script src="./assets/vendor/hs-show-animation/dist/hs-show-animation.min.js"></script>
   <script src="./assets/vendor/hs-go-to/dist/hs-go-to.min.js"></script>
   <script src="./assets/vendor/aos/dist/aos.js"></script>
   <script src="./assets/vendor/typed.js/lib/typed.min.js"></script>
   <script src="./assets/vendor/hs-scrollspy/dist/hs-scrollspy.min.js"></script>
   <script src="./assets/vendor/leaflet/dist/leaflet.js"></script>
 
   <!-- JS Front -->
   <script src="./assets/js/theme.min.js"></script>


    <!-- JS Plugins Init. -->
    <script>
     (function() {
            // INITIALIZATION OF HEADER
            // =======================================================
            new HSHeader('#header').init()


            // INITIALIZATION OF MEGA MENU
            // =======================================================
            new HSMegaMenu('.js-mega-menu', {
                desktop: {
                    position: 'left'
                }
            })


            // INITIALIZATION OF SHOW ANIMATIONS
            // =======================================================
            new HSShowAnimation('.js-animation-link')


            // INITIALIZATION OF BOOTSTRAP VALIDATION
            // =======================================================
            HSBsValidation.init('.js-validate', {
                onSubmit: data => {
                    data.event.preventDefault()
                    alert('Submited')
                }
            })


            // INITIALIZATION OF GO TO
            // =======================================================
            new HSGoTo('.js-go-to')


            // INITIALIZATION OF AOS
            // =======================================================
            AOS.init({
                duration: 650,
                once: true
            });



            // SCROLLSPY
            // =======================================================
            new bootstrap.ScrollSpy(document.body, {
                target: '#navbarNavDropdownNav'
            })

            new HSScrollspy('#navbarNavDropdown', {
                breakpoint: 'lg',
                scrollOffset: -10
            })


            // INITIALIZATION OF BOOTSTRAP VALIDATION
            // =======================================================
            HSBsValidation.init('.js-validate', {
                onSubmit: data => {
                    data.event.preventDefault()
                    alert('Submited')
                }
            })

        })()
    </script>
</body>

</html>
