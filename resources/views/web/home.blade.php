@extends('web.master')
@section('title', 'Página Principal')

@section('content')

    <!-- ABERTURA -->
    <div class="container content-space-2 content-space-lg-4 content-space-md-4 content-space-b-2" data-aos="fade-right">
        <div class="row">
            <div class="col-md-7 col-lg-7 mb-7 mb-md-0 text-lg-start text-md-start text-center">
                <!-- TEXT ABERTURA -->
                <div class="mb-5 ">
                    <span class="text-cap text-success">TIRE SUA IDEIA DO PAPEL</span>
                    <h1 class="display-4 mb-3 text-white font-weight-900">Desenvolvemos Soluções que melhoram o seu
                        negócio</h1>
                    <p class="lead font-weight-900" style="font-size: 35px;">
                        <span class="text-purple">PENSE.</span>
                        <span class="text-white">CRIE.</span>
                        <span class="text-green">APRIMORE.</span>
                    </p>
                    <div class="text-lg-start text-md-start text-center gap-3">
                        <a class="px-2 py-3 btn btn-theme-success btn-transition rounded-pill font-weight-600 "
                            href="#">AUMENTE O NÍVEL DO SEU NEGÓCIO <span class="bi-chevron-right small ms-1"></span></a>
                    </div>
                </div>
                <!-- End TEXT ABERTURA -->
            </div>
            <!-- End Col -->
            <!-- IMAGEM ABERTURA -->
            <div class="col-md-5">
                <div class="position-relative">
                    <img class="img-fluid rounded-2" src="./assets/svg/components/card-10.svg" alt="Image Description">
                    <div class="position-absolute top-0 end-0 w-100 h-100 bg-soft-primary rounded-2 zi-n1 mt-5 me-n5">
                    </div>
                </div>
            </div>


            <!-- END IMAGEM ABERTURA -->
            <!-- End Col -->
        </div>
        <!-- End Row -->
    </div>
    <!-- End ABERTURA -->

    <!-- O QUE FAZEMOS -->
    <div class="container content-space-1 content-space-lg-1 content-space-md-1 content-space-b-2" data-aos="fade-up">
        <div class="w-md-90 w-lg-80 mx-md-auto mb-5 mb-md-9">
            <span class="text-cap text-center">
                <i class="bi bi-box text-success font-weight-900" style="font-size: 60px"></i>
            </span>
            <h2 class="display-4 mb-3 text-white font-weight-900 text-center">
                <span class="px-3">
                    O que podemos fazer por você
                </span>
            </h2>
            <p class="lead text-white text-center">Saiba mais sobre os serviços que ofereço, de sites a videogames e
                aplicativos.</p>
        </div>

        <!-- SVG Shape -->
        <div class="position-absolute bottom-0 start-0 d-none d-lg-block" style="width: 10rem; margin-left: -9rem;">
            <img class="img-fluid" src="{{ asset('assets/svg/illustrations/oc-peeking.svg') }}" alt="SVG">
        </div>
        <!-- End SVG Shape -->
        <!-- End Card Grid -->

        <div class="row gx-lg-7 gx-md-7 gy-lg-7 ">
            <div class="col-lg-6 col-xl-6 col-sm-12 mb-3">

                <a class="card shadow bg-dark border-bottom-green h-100" href="#" target="_blank">
                    <div class="card-body">
                        <div class="mb-5">
                            <img class="img-fluid rounded-2" src="./assets/img/1200x900/img1.jpg" alt="Image Description">
                        </div>
                        <h3 class="display-6 font-weight-900 text-inherit-green">Criação de site e
                            aplicativos Mobile</h3>
                        <p class="card-text lead text-white">Se você está procurando <span
                                class="text-green font-weight-900">atualizar seu site ou construir
                                um novo</span>,
                            podemos ajudá-lo a encontrar uma solução que se adapte à sua marca e às suas
                            necessidades.
                            Desenvolvemos sites em pouco tempo e que se destacam da multidão.</p>
                    </div>
                    <div class="col-lg-12 text-center">
                        <button class="btn btn-theme-success btn-transition rounded-pill mb-4 font-weight-900" href="" target="_blank">SAIBA MAIS <span class="bi-chevron-right small ms-1"></span></button>
                    </div>
                </a>
                <!-- End Card -->
            </div>

            <div class="col-lg-6 col-xl-6 col-sm-12 mb-3">
                <a class="card shadow bg-dark border-bottom-green h-100" href="#" target="_blank">
                    <div class="card-body">
                        <div class="mb-5">
                            <img class="img-fluid rounded-2" src="./assets/img/1200x900/img3.jpg" alt="Image Description">
                        </div>

                        <h3 class="display-6 font-weight-900 text-inherit-green">
                            Marketing Digital</h3>
                        <p class="card-text lead text-white">Se você está procurando <span>atualizar seu site ou
                                construir
                                um novo</span> ,
                            posso ajudá-lo a encontrar uma solução que se adapte à sua marca e às suas
                            necessidades.
                            Eu desenho e desenvolvo sites que se destacam da multidão.</p>
                    </div>
                    <div class="col-lg-12 text-center">
                        <button class="btn btn-theme-success btn-transition rounded-pill mb-4 font-weight-900" href="" target="_blank">SAIBA MAIS <span class="bi-chevron-right small ms-1"></span></button>
                    </div>
                </a>
            </div>
            <!-- End Col -->

            <div class="col-lg-6 col-xl-6 col-sm-12 mb-3">

                <!-- Card -->
                <a class="card  shadow bg-dark border-bottom-purple h-100" href="#" target="_blank">
                    <div class="card-body">
                        <div class="mb-5">
                            <img class="img-fluid rounded-2" src="./assets/img/1200x900/img2.jpg" alt="Image Description">
                        </div>

                        <h3 class="display-6 font-weight-900 text-inherit-purple">Solução de negócio</h3>
                        <p class="card-text lead text-white">Se você está procurando <span>atualizar seu site ou
                                construir
                                um novo</span> ,
                            posso ajudá-lo a encontrar uma solução que se adapte à sua marca e às suas
                            necessidades.
                            Eu desenho e desenvolvo sites que se destacam da multidão.</p>

                    </div>
                    <div class="col-lg-12 text-center">
                        <button class="btn btn-theme-purple btn-transition rounded-pill mb-4 font-weight-900" href="" target="_blank">SAIBA MAIS <span class="bi-chevron-right small ms-1"></span></button>
                    </div>
                </a>
                <!-- End Card -->
            </div>

            <div class="col-lg-6 col-xl-6 col-sm-12 mb-3">
                <!-- Card -->
                <a class="card shadow bg-dark border-bottom-purple h-100" href="#" target="_blank">
                    <div class="card-body">
                        <div class="mb-5">
                            <img class="img-fluid rounded-2" src="./assets/img/1200x900/img4.jpg" alt="Image Description">
                        </div>

                        <h3 class="display-6 font-weight-900 text-inherit-purple">Produção de
                            fotografia e video</h3>
                        <p class="card-text lead text-white">Se você está procurando atualizar seu site ou construir
                            um novo</span> ,
                            posso ajudá-lo a encontrar uma solução que se adapte à sua marca e às suas
                            necessidades.
                            Eu desenho e desenvolvo sites que se destacam da multidão.</p>

                    </div>
                    <div class="col-lg-12 text-center mb-4">
                        <button class="btn btn-theme-purple btn-transition rounded-pill font-weight-900" href="" target="_blank">SAIBA MAIS <span class="bi-chevron-right small ms-1"></span></button>
                    </div>
                </a>
                <!-- End Card -->

            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->
    </div>
    <!-- End O QUE FAZEMOS -->

    <!-- Card Grid -->
    <div class="container content-space-1 content-space-lg-1 content-space-md-1 content-space-b-2">
        <div class="w-md-90 w-lg-80 text-center mx-md-auto mb-5 mb-md-9">
            <h1 class="display-4 mb-3 text-white font-weight-900">Projetos que desenvolvemos
            </h1>
            <p class="lead text-white">Confira os sites que criamos para colocar sorrisos no rosto de outras
                pessoas..</p>
        </div>


        <div class="text-center mb-10">
            <!-- List Checked -->
            <ul class="list-inline list-checked list-checked-primary">
                <li class="list-inline-item list-checked-item">Projetos entregue antes do prazo</li>
                <li class="list-inline-item list-checked-item">Clientes 100% satisfeitos</li>
                <li class="list-inline-item list-checked-item">Acompanhamento dos projetos em tempo real</li>
            </ul>
            <!-- End List Checked -->
        </div>

        <div class="row mb-5 mb-md-0">
            <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
                <!-- Card -->
                <div class="card card-sm h-100 shadow-sm bg-dark border-bottom-green" data-aos="fade-up">
                    <div class="p-2">
                        <img class="card-img" src="./assets/img/web/boneco-celular-mimicas-mimics-uniplay.png"
                            alt="Image Description">
                    </div>

                    <div class="card-body">
                        <h2 class="card-title text-inherit text-white display-7 font-weight-900">Mimics
                            Arcade</h2>
                        <p class="lead text-white-70">Jogo de mímicas para jogar em qualquer lugar utilizando um
                            dispositivo conectado a internet.</p>

                        <!-- List Pointer -->
                        <ul class="list-pointer mb-0">
                            <li class="list-pointer-item">Website, game, design, mímicas</li>
                        </ul>
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

                        <!-- End Row -->
                        <!-- End List Pointer -->
                    </div>

                    <a class="card-footer card-link border-top" href="#">Saiba mais<i
                            class="bi-chevron-right small ms-1"></i></a>
                </div>
                <!-- End Card -->
            </div>
            <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
                <!-- Card -->
                <div class="card card-sm h-100 bg-dark border-bottom-green" data-aos="fade-up" data-aos-delay="100">
                    <div class="p-2">
                        <img class="card-img" src="./assets/img/900x450/img1.jpg" alt="Image Description"
                            style="height: 350px !important; object-fit: cover;
                                                                                                                            object-position: top;">
                    </div>

                    <div class="card-body">
                        <h2 class="card-title text-inherit text-white display-7 font-weight-900">Way
                            Box
                        </h2>
                        <p class="lead text-white-70">Plataforma de gestão de time e acompanhamento de projetos.</p>

                        <!-- List Pointer -->
                        <ul class="list-pointer mb-0">
                            <li class="list-pointer-item">Cost Transformation</li>
                        </ul>
                        <!-- End List Pointer -->
                    </div>

                    <a class="card-footer card-link border-top" href="#">Saiba mais <i
                            class="bi-chevron-right small ms-1"></i></a>
                </div>
                <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="col-sm-6 col-lg-4">
                <!-- Card -->
                <div class="card card-sm h-100 bg-dark border-bottom-green" data-aos="fade-up" data-aos-delay="150">
                    <div class="p-2">
                        <img class="card-img" src="./assets/img/900x450/img13.jpg" alt="Image Description"
                            style="height: 350px !important; object-fit: cover;
                                                                                                                            object-position: top;">
                    </div>

                    <div class="card-body">
                        <h2 class="card-title text-inherit text-white display-7 font-weight-900">
                            Chatbox
                            box One</h2>
                        <p class="lead text-white-70">IA de conversação realista com agentes virtuais de última
                            geração.</p>
                        <!-- List Pointer -->
                        <ul class="list-pointer mb-0">
                            <li class="list-pointer-item">Enterprise Technology</li>
                        </ul>
                        <!-- End List Pointer -->
                    </div>

                    <a class="card-footer card-link border-top" href="#">Saiba mais<i
                            class="bi-chevron-right small ms-1"></i></a>
                </div>
                <!-- End Card -->
            </div>
            <!-- End Col -->
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a class="btn btn-theme-purple btn-transition rounded-pill font-weight-900" href="" target="_blank">CONFIRA TODOS OS NOSSOS PROJETOS <span
                    class="bi-chevron-right small ms-1"></span></a>
        </div>
        <!-- Card Info -->

        <!-- End Card Info -->
        <!-- End Row -->
    </div>
    <!-- End Card Grid -->

    <div class="container content-space-1 content-space-lg-1 content-space-md-1 content-space-b-2">
        <div class="w-md-90 w-lg-80 text-center mx-md-auto mb-5 mb-md-9">
            <h1 class="display-4 mb-3 text-white font-weight-900">De uma olhada no nosso blog
            </h1>
            <p class="lead text-white">Confira algumas dicas, experiêcias que vivemos (algo nesse sentido)..</p>
        </div>

        <div class="row">

            <div class="order-lg-4 col-sm-6 col-lg-4 mb-3 mb-sm-7">
                <!-- Card -->
                <a class="card card-stretched-vertical card-transition bg-img-start gradient-y-overlay-sm-gray-900"
                    href="./blog-article.html"
                    style="background-image: url(./assets/img/400x500/img1.jpg); min-height: 25rem;">
                    <div class="card-header">
                        <span class="card-subtitle text-white">Business</span>
                    </div>

                    <div class="card-footer">
                        <h3 class="card-title text-white">Front Interview with a Lead Designer of the Hubble</h3>
                        <p class="card-link link-light">Read more <i class="bi-chevron-right small ms-1"></i></p>
                    </div>
                </a>
                <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="order-lg-5 col-sm-6 col-lg-4 mb-3 mb-sm-7">
                <!-- Card -->
                <a class="card card-stretched-vertical card-transition bg-img-start gradient-y-overlay-sm-gray-900"
                    href="./blog-article.html"
                    style="background-image: url(./assets/img/400x500/img4.jpg); min-height: 25rem;">
                    <div class="card-header">
                        <span class="card-subtitle text-white">Health</span>
                    </div>

                    <div class="card-footer">
                        <h3 class="card-title text-white">Better is when everything works together</h3>
                        <p class="card-link link-light">Read more <i class="bi-chevron-right small ms-1"></i></p>
                    </div>
                </a>
                <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="order-lg-last col-sm-6 col-lg-4 mb-3 mb-sm-7">
                <!-- Card -->
                <a class="card card-stretched-vertical card-transition bg-img-start gradient-y-overlay-sm-gray-900"
                    href="./blog-article.html"
                    style="background-image: url(./assets/img/400x500/img5.jpg); min-height: 25rem;">
                    <div class="card-header">
                        <span class="card-subtitle text-white">Stories</span>
                    </div>

                    <div class="card-footer">
                        <h3 class="card-title text-white">Should You Buy An Apple Pencil?</h3>
                        <p class="card-link link-light">Read more <i class="bi-chevron-right small ms-1"></i></p>
                    </div>
                </a>
                <!-- End Card -->
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->



    </div>
    <!--fim Features -->

    <div class="container content-space-1 content-space-lg-1 content-space-md-1 content-space-b-2">
        <div class="w-md-90 w-lg-80 text-center mx-md-auto mb-5 mb-md-9">
            <h1 class="display-4 mb-3 text-white font-weight-900">Tire suas dúvidas
            </h1>
            <p class="lead text-white">Está com dúvidas sobre nós? </p>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="w-lg-100 mx-lg-auto">
                    <!-- Accordion -->
                    <div class="accordion accordion-flush accordion-lg" id="accordionFAQ">
                        <!-- Accordion Item -->
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingCuriousOne">
                                <a class="accordion-button" role="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What methods of payments are supported?
                                </a>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingCuriousOne" data-bs-parent="#accordionFAQ">
                                <div class="accordion-body">
                                    You can purchase the themes on Bootstrap Themes via any major credit/debit card
                                    (via
                                    Stripe) or with your Paypal account. We don't support cryptocurrencies or
                                    invoicing
                                    at this time.
                                </div>
                            </div>
                        </div>
                        <!-- End Accordion Item -->

                        <!-- Accordion Item -->
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingCuriousTwo">
                                <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Can I cancel at anytime?
                                </a>
                            </div>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingCuriousTwo"
                                data-bs-parent="#accordionFAQ">
                                <div class="accordion-body">
                                    If you'd like a refund please reach out to us at <a
                                        href="#">themes@getbootstrap.com</a>. If you need technical help with the
                                    theme
                                    before a refund please reach out to the seller first and they can get in touch
                                    with
                                    us if they're unable to resolve the issue.
                                </div>
                            </div>
                        </div>
                        <!-- End Accordion Item -->

                        <!-- Accordion Item -->
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingCuriousThree">
                                <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How do I get a receipt for my purchase?
                                </a>
                            </div>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="headingCuriousThree" data-bs-parent="#accordionFAQ">
                                <div class="accordion-body">
                                    You'll receive an email from Bootstrap themes once your purchase is complete.
                                </div>
                            </div>
                        </div>
                        <!-- End Accordion Item -->

                        <!-- Accordion Item -->
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingCuriousFour">
                                <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Which license do I need?
                                </a>
                            </div>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingCuriousFour"
                                data-bs-parent="#accordionFAQ">
                                <div class="accordion-body">
                                    There are three license types - <a href="#">Standard</a>, <a href="#">Multisite</a>,
                                    and <a href="#">Extended</a>. We've provided the table below for a quick look at
                                    the
                                    difference between the them, as well as a few examples of ways each license
                                    could be
                                    used. If you'd like more of the nitty-gritty details you can find them below and
                                    always feel free to reach out with any questions you have at <a
                                        href="#">themes@getbootstrap.com</a>.
                                </div>
                            </div>
                        </div>
                        <!-- End Accordion Item -->
                    </div>
                    <!-- End Accordion -->
                </div>

            </div>
        </div>




    </div>
    <!--fim Features -->

    <!-- Clients -->
    <div class="container content-space-1 content-space-lg-1 content-space-md-1 content-space-b-2">
        <!-- Swiper Slider -->
        <div class="w-md-90 w-lg-80 text-center mx-md-auto mb-5 mb-md-9">
            <h4 class="mb-3 text-white display-6 font-weight-900">Alguns dos nossos parceiros
            </h4>
        </div>

        <!-- End Heading -->

        <div class="row justify-content-center text-center bg-white">
            <div class="col-4 col-sm-3 col-md-2 py-3">
                <img class="avatar avatar-lg avatar-4x3 avatar-centered" src="./assets/svg/brands/amazon-dark.svg"
                    alt="Logo">
            </div>
            <!-- End Col -->

            <div class="col-4 col-sm-3 col-md-2 py-3">
                <img class="avatar avatar-lg avatar-4x3 avatar-centered" src="./assets/svg/brands/kaplan-dark.svg"
                    alt="Logo">
            </div>
            <!-- End Col -->

            <div class="col-4 col-sm-3 col-md-2 py-3">
                <img class="avatar avatar-lg avatar-4x3 avatar-centered" src="./assets/svg/brands/google-dark.svg"
                    alt="Logo">
            </div>
            <!-- End Col -->

            <div class="col-4 col-sm-3 col-md-2 py-3">
                <img class="avatar avatar-lg avatar-4x3 avatar-centered" src="./assets/svg/brands/airbnb-dark.svg"
                    alt="Logo">
            </div>
            <!-- End Col -->

            <div class="col-4 col-sm-3 col-md-2 py-3">
                <img class="avatar avatar-lg avatar-4x3 avatar-centered" src="./assets/svg/brands/shopify-dark.svg"
                    alt="Logo">
            </div>
            <!-- End Col -->

            <div class="col-4 col-sm-3 col-md-2 py-3">
                <img class="avatar avatar-lg avatar-4x3 avatar-centered" src="./assets/svg/brands/vidados-dark.svg"
                    alt="Logo">
            </div>
            <!-- End Col -->

            <div class="col-4 col-sm-3 col-md-2 py-3">
                <img class="avatar avatar-lg avatar-4x3 avatar-centered" src="./assets/svg/brands/capsule-dark.svg"
                    alt="Logo">
            </div>
            <!-- End Col -->

            <div class="col-4 col-sm-3 col-md-2 py-3">
                <img class="avatar avatar-lg avatar-4x3 avatar-centered" src="./assets/svg/brands/forbes-dark.svg"
                    alt="Logo">
            </div>
            <!-- End Col -->

            <div class="col-4 col-sm-3 col-md-2 py-3">
                <img class="avatar avatar-lg avatar-4x3 avatar-centered"
                    src="./assets/svg/brands/business-insider-dark.svg" alt="Logo">
            </div>
            <!-- End Col -->

            <div class="col-4 col-sm-3 col-md-2 py-3">
                <img class="avatar avatar-lg avatar-4x3 avatar-centered" src="./assets/svg/brands/hubspot-dark.svg"
                    alt="Logo">
            </div>
            <!-- End Col -->

            <div class="col-4 col-sm-3 col-md-2 py-3">
                <img class="avatar avatar-lg avatar-4x3 avatar-centered" src="./assets/svg/brands/layar-dark.svg"
                    alt="Logo">
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->

        <!-- End Swiper Slider -->
    </div>
    <!-- End Clients -->

@endsection
