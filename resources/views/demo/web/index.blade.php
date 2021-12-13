@extends('demo.master.web')
@section('title', 'Tickets')

@section('content')
    <!-- Hero Section -->
    {{-- <div class="container space-top-2 space-top-md-4 space-top-lg-3">
        <div class="border-bottom">
            <div class="w-lg-75 text-center mx-lg-auto">
                <div class="mb-9">
                    <h1 class="display-3 mb-4">Crie seu site em 1 minuto</h1>
                    <p class="lead">Descubra a plataforma que oferece a liberdade de criar, gerenciar e
                        desenvolver
                        sua presença na web exatamente como você deseja</p>
                    <a href="/onboarding" class="btn btn-lg btn-primary btn-pill ">Teste grátis por 7 dias</a>
                    <p class="small mt-2">* Não é necessário cartão de crédito.</p>
                </div>
            </div>
            <!-- Nav -->
            <div class="text-center">
                <ul class="nav nav-segment nav-pills scrollbar-horizontal mb-7" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-one-code-features-tab" data-toggle="pill"
                            href="#pills-one-code-features" role="tab" aria-controls="pills-one-code-features"
                            aria-selected="true">Landing Pages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-two-code-features-tab" data-toggle="pill"
                            href="#pills-two-code-features" role="tab" aria-controls="pills-two-code-features"
                            aria-selected="false">Loja virtual</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-three-code-features-tab" data-toggle="pill"
                            href="#pills-three-code-features" role="tab" aria-controls="pills-three-code-features"
                            aria-selected="false">Portfólio e Currículo</a>
                    </li>
                </ul>
            </div>
            <!-- End Nav -->

            <!-- Tab Content -->
            <div class="tab-content pr-lg-4">
                <div class="tab-pane fade active show" id="pills-one-code-features" role="tabpanel"
                    aria-labelledby="pills-one-code-features-tab">
                    <!-- Device Mockup -->
                    <div class="device-wrapper">
                        <div class="device">
                            <img class="img-fluid" src="./assets/svg/components/macbook.svg" alt="Image Description">
                            <img class="device-macbook-screen" src="./assets/img/1618x1010/img2.jpg"
                                alt="Image Description">
                        </div>
                        <div class="device device-iphone-x">
                            <img class="device-iphone-x-frame" src="./assets/svg/components/iphone-x.svg"
                                alt="Image Description">
                            <img class="device-iphone-x-screen" src="./assets/img/407x867/img2.jpg" alt="Image Description">
                        </div>
                    </div>
                    <!-- End Device Mockup -->
                </div>

                <div class="tab-pane fade" id="pills-two-code-features" role="tabpanel"
                    aria-labelledby="pills-two-code-features-tab">
                    <!-- Device Mockup -->
                    <div class="device-wrapper">
                        <div class="device">
                            <img class="img-fluid" src="./assets/svg/components/macbook.svg" alt="Image Description">
                            <img class="device-macbook-screen" src="./assets/img/1618x1010/img1.jpg"
                                alt="Image Description">
                        </div>
                        <div class="device device-iphone-x">
                            <img class="device-iphone-x-frame" src="./assets/svg/components/iphone-x.svg"
                                alt="Image Description">
                            <img class="device-iphone-x-screen" src="./assets/img/407x867/img4.jpg" alt="Image Description">
                        </div>
                    </div>
                    <!-- End Device Mockup -->
                </div>

                <div class="tab-pane fade" id="pills-three-code-features" role="tabpanel"
                    aria-labelledby="pills-three-code-features-tab">
                    <!-- Device Mockup -->
                    <div class="device-wrapper">
                        <div class="device">
                            <img class="img-fluid" src="./assets/svg/components/macbook.svg" alt="Image Description">
                            <img class="device-macbook-screen" src="./assets/img/1618x1010/img3.jpg"
                                alt="Image Description">
                        </div>
                        <div class="device device-iphone-x">
                            <img class="device-iphone-x-frame" src="./assets/svg/components/iphone-x.svg"
                                alt="Image Description">
                            <img class="device-iphone-x-screen" src="./assets/img/407x867/img3.jpg" alt="Image Description">
                        </div>
                    </div>
                    <!-- End Device Mockup -->
                </div>
            </div>
            <!-- End Tab Content -->
        </div>
    </div> --}}
    <!-- End Hero Section -->

    <!-- Hero -->
    <div class="container overflow-hidden content-space-t-4">



    </div>
    <!-- End Hero -->

    <!-- Articles Section -->
    <div class="container content-space-t-2">
        <!-- Title -->
        <div class="w-md-90 w-lg-80 text-center mx-md-auto mb-5 mb-md-9">
            <h1 class="display-5">Veja como é fácil criar uma página na internet!</h1>
        </div>
        <!-- End Title -->
        <!-- Features -->
        <div class="overflow-hidden">
            <div class="row justify-content-lg-between align-items-lg-center">
                <div class="col-lg-6 mb-9 mb-lg-0">
                    <div class="position-relative mx-auto" style="max-width: 20rem;">
                        <!-- Mobile Device -->
                        <figure class="device-mobile mx-auto">
                            <div class="device-mobile-frame">
                                <img class="device-mobile-img" src="./assets/img/407x867/img7.jpg" alt="Image Description">
                            </div>
                        </figure>
                        <!-- End Mobile Device -->

                        <!-- Image -->
                        <div class="position-absolute top-0 end-0 zi-2 me-n10 mt-9" style="width: 16rem;">
                            <img class="img-fluid shadow-lg rounded-2" src="./assets/img/407x115/img1.jpg"
                                alt="Image Description">
                        </div>
                        <!-- End Image -->

                        <!-- Image -->
                        <div class="position-absolute bottom-0 start-0 zi-2 ms-n10 mb-10" style="width: 16rem;">
                            <img class="img-fluid shadow-lg rounded-2" src="./assets/img/480x320/img26.jpg"
                                alt="Image Description">
                        </div>
                        <!-- End Image -->

                        <!-- SVG Shape -->
                        <div class="position-absolute bottom-0 end-0 zi-n1 mx-auto" style="width: 20rem;">
                            <img class="img-fluid" src="./assets/svg/components/shape-1.svg" alt="SVG">
                        </div>
                        <!-- End SVG Shape -->
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-lg-5">
                    <!-- Heading -->
                    <div class="mb-5">
                        <h2>Advanced analytics easy to understand</h2>
                    </div>
                    <!-- End Heading -->

                    <!-- Step -->
                    <ul class="step step-dashed mb-7">

                        <li class="step-item">
                            <div class="step-content-wrapper">
                                <span class="step-icon step-icon-xs step-icon-soft-primary">1</span>
                                <div class="step-content">
                                    <h4 class="step-title">Industry-leading documentation</h4>
                                    <p><a class="link" href="./documentation/index.html">Our documentation</a> and
                                        extensive Client libraries contain everything a business needs to build a custom
                                        integration in a fraction of the time.</p>
                                </div>
                            </div>
                        </li>

                        <li class="step-item">
                            <div class="step-content-wrapper">
                                <span class="step-icon step-icon-xs step-icon-soft-primary">2</span>
                                <div class="step-content">
                                    <h4 class="step-title">Support for the developer community</h4>
                                    <p class="mb-0">We actively contribute to open-source projects—giving back to
                                        the community through development, patches, and sponsorships.</p>
                                </div>
                            </div>
                        </li>
                        <li class="step-item mb-0">
                            <div class="step-content-wrapper">
                                <span class="step-icon step-icon-xs step-icon-soft-primary">3</span>
                                <div class="step-content">
                                    <h4 class="step-title">Support for the developer community</h4>
                                    <p class="mb-0">We actively contribute to open-source projects—giving back to
                                        the community through development, patches, and sponsorships.</p>
                                </div>
                            </div>
                        </li>

                    </ul>
                    <!-- End Step -->

                    <a class="btn btn-primary btn-transition" href="#">Request demo</a>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End Features -->
    </div>
    <!-- End Articles Section -->

    <div class="navbar-sidebar-aside-content content-space-1 content-space-md-2 px-lg-5 px-xl-10">
        <div class="container text-center content-space-t-3">
            <div class="pl-lg-12 pl-xl-12">
                <div class="mb-9">
                    <h2 class="h1">Escolha o template perfeito para o seu negócio</h2>
                </div>

                <div class="row">
                    <div class="col-sm-6 col-md-4 mb-5">
                        <!-- Card -->
                        <a class="card card-transition" href="../snippets/hero-blog-journal.html" target="_blank">
                            <img class="card-img-top p-1" src="../assets/img/900x460/img20.jpg" alt="Image Description">
                            <div class="card-body">
                                <h5 class="card-text text-inherit">Blog Journal</h5>
                            </div>
                        </a>
                        <!-- End Card -->
                    </div>
                    <!-- End Col -->

                    <div class="col-sm-6 col-md-4 mb-5">
                        <!-- Card -->
                        <a class="card card-transition" href="../snippets/hero-blog-metro.html" target="_blank">
                            <img class="card-img-top p-1" src="../assets/img/900x460/img21.jpg" alt="Image Description">
                            <div class="card-body">
                                <h5 class="card-text text-inherit">Blog Metro</h5>
                            </div>
                        </a>
                        <!-- End Card -->
                    </div>
                    <!-- End Col -->

                    <div class="col-sm-6 col-md-4 mb-5">
                        <!-- Card -->
                        <a class="card card-transition" href="../snippets/hero-portfolio-case-studies-branding.html"
                            target="_blank">
                            <img class="card-img-top p-1" src="../assets/img/900x460/img22.jpg" alt="Image Description">
                            <div class="card-body">
                                <h5 class="card-text text-inherit">Portfolio Case Studies: Branding</h5>
                            </div>
                        </a>
                        <!-- End Card -->
                    </div>
                    <!-- End Col -->

                    <div class="col-sm-6 col-md-4 mb-5">
                        <!-- Card -->
                        <a class="card card-transition"
                            href="../snippets/hero-portfolio-case-studies-branding-video-block.html" target="_blank">
                            <img class="card-img-top p-1" src="../assets/img/900x460/img23.jpg" alt="Image Description">
                            <div class="card-body">
                                <h5 class="card-text text-inherit">Portfolio Case Studies: Branding - Video Block</h5>
                            </div>
                        </a>
                        <!-- End Card -->
                    </div>
                    <!-- End Col -->

                    <div class="col-sm-6 col-md-4 mb-5">
                        <!-- Card -->
                        <a class="card card-transition"
                            href="../snippets/hero-portfolio-case-studies-product-video-block.html" target="_blank">
                            <img class="card-img-top p-1" src="../assets/img/900x460/img24.jpg" alt="Image Description">
                            <div class="card-body">
                                <h5 class="card-text text-inherit">Portfolio Case Studies: Product - Video Block</h5>
                            </div>
                        </a>
                        <!-- End Card -->
                    </div>
                    <!-- End Col -->

                    <div class="col-sm-6 col-md-4 mb-5">
                        <!-- Card -->
                        <a class="card card-transition" href="../snippets/hero-portfolio-case-studies-product-slider.html"
                            target="_blank">
                            <img class="card-img-top p-1" src="../assets/img/900x460/img25.jpg" alt="Image Description">
                            <div class="card-body">
                                <h5 class="card-text text-inherit">Portfolio Case Studies: Product - Slider</h5>
                            </div>
                        </a>
                        <!-- End Card -->
                    </div>
                    <!-- End Col -->

                </div>
                <!-- End Row -->

                <!-- Info -->
                <div class="position-relative z-index-2 text-center">
                    <div class="d-inline-block font-size-1 border bg-white text-center rounded-pill py-3 px-4">
                        Quer conhecer mais os Templates <a class="font-weight-bold ml-3" href="#">Clique aqui<span
                                class="fas fa-angle-right ml-1"></span></a>
                    </div>
                </div>
                <!-- End Info -->
            </div>
        </div>
    </div>

    <!-- Collapse -->
    <div class="container content-space-1">
        <div class="w-md-90 w-lg-80 text-center mx-md-auto mb-5 mb-md-9">
            <h1 class="display-5">Tem dúvidas sobre como fazer um site usando um construtor de sites? Nós
                temos as respostas.</h1>
        </div>

        <!-- Accordion -->
        <div class="accordion accordion-lg accordion-btn-icon-start" id="accordionBtnIconStartExample">
            <div class="accordion-item">
                <div class="accordion-header" id="btn-icon-start-headingOne">
                    <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse"
                        data-bs-target="#btn-icon-start-collapseOne" aria-expanded="false"
                        aria-controls="btn-icon-start-collapseOne">
                        <span class="ps-2">O que é um criador de sites?</span>
                    </a>
                </div>
                <div id="btn-icon-start-collapseOne" class="accordion-collapse collapse"
                    aria-labelledby="btn-icon-start-headingOne" data-bs-parent="#accordionBtnIconStartExample">
                    <div class="accordion-body">Para criar sites, normalmente é necessário saber um bocado sobre design
                        gráfico,
                        programação e marketing. Também é comum contratar especialistas nessas áreas para que eles façam
                        todo o trabalho por você – o que pode acabar custando muito dinheiro.Você também pode usar um
                        sistema
                        de gestão de conteúdo (CMS) para criar seu site sozinho, mas vai precisar de certo conhecimento
                        técnico.
                        Felizmente, você também pode escolher usar um criador de sites para economizar tempo e dinheiro ao
                        criar qualquer
                        tipo de site com suas próprias mãos.O Zyro é um construtor de site que permite criar um site
                        lindo e uma loja virtual potente em menos de uma hora. Você não precisa ter conhecimento prévio
                        algum
                        sobre criação e gerenciamento de sites.Isso porque a maior parte das tarefas da criação do site,
                        como montar layouts e dar estilo ao design,
                        já vêm prontas quando usamos um criador de sites.</div>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header" id="btn-icon-start-headingTwo">
                    <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse"
                        data-bs-target="#btn-icon-start-collapseTwo" aria-expanded="false"
                        aria-controls="btn-icon-start-collapseTwo">
                        <span class="ps-2">Preciso saber programação para
                            criar um site?</span>
                    </a>
                </div>
                <div id="btn-icon-start-collapseTwo" class="accordion-collapse collapse"
                    aria-labelledby="btn-icon-start-headingTwo" data-bs-parent="#accordionBtnIconStartExample">
                    <div class="accordion-body">Para criar sites, normalmente é necessário saber um bocado sobre design
                        gráfico, programação e marketing. Também é comum contratar especialistas nessas áreas para que eles
                        façam todo o trabalho por você – o que pode acabar custando muito dinheiro.Você também pode usar um
                        sistema de gestão de conteúdo (CMS) para criar seu site sozinho, mas vai precisar de certo
                        conhecimento técnico.Felizmente, você também pode escolher usar um criador de sites para economizar
                        tempo e dinheiro ao criar qualquer tipo de site com suas próprias mãos.O Zyro é um construtor de
                        site que permite criar um site lindo e uma loja virtual potente em menos de uma hora. Você não
                        precisa ter conhecimento prévio algum sobre criação e gerenciamento de sites.Isso porque a maior
                        parte das tarefas da criação do site, como montar layouts e dar estilo ao design, já vêm prontas
                        quando usamos um criador de sites.</div>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header" id="btn-icon-start-headingThree">
                    <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse"
                        data-bs-target="#btn-icon-start-collapseThree" aria-expanded="false"
                        aria-controls="btn-icon-start-collapseThree">
                        <span class="ps-2">Posso hospedar gratuitamente o
                            site que criei?</span>
                    </a>
                </div>
                <div id="btn-icon-start-collapseThree" class="accordion-collapse collapse"
                    aria-labelledby="btn-icon-start-headingThree" data-bs-parent="#accordionBtnIconStartExample">
                    <div class="accordion-body"> Sim. Todos os sites publicados com o Zyro ganham hospedagem de sites
                        rápida e
                        confiável, com servidores localizados em várias partes do mundo.
                        E sabe do melhor sobre nossa hospedagem de sites? Ela é gratuita. Não importa se
                        você tem um site que atende a clientes da sua região ou uma empresa digital
                        global: suas páginas sempre vão carregar rápido e estar disponíveis para todos
                        os visitantes.
                    </div>
                </div>
            </div>
        </div>
        <!-- End Accordion -->

    </div>
    <!-- End Collapse -->

    <!-- Testimonials Section -->
    <div class="container content-space-1">
        <!-- Title -->
        <div class="pl-lg-12 pl-xl-12">
            <div class="w-md-90 w-lg-80 text-center mx-md-auto mb-5 mb-md-9">
                <h1 class="display-5">Feito especialmente para você</h1>
            </div>
            <!-- End Title -->


            <!-- Testimonials -->
            <div class="row">
                <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
                    <!-- Card -->
                    <div class="card h-100">
                        <div class="card-body">
                            <!-- Rating -->
                            <div class="d-flex gap-1 mb-2">
                                <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                                <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                                <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                                <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                                <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                            </div>
                            <!-- End Rating -->

                            <div class="mb-auto">
                                <p class="card-text">With Front Pay, you can check out across the web and in apps
                                    without having to enter any payment information.</p>
                            </div>
                        </div>

                        <div class="card-footer pt-0">
                            <!-- Media -->
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img class="avatar avatar-circle" src="./assets/img/160x160/img8.jpg"
                                        alt="Image Description">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="card-title mb-0">Christina Kray</h5>
                                    <p class="card-text small">Business Manager</p>
                                </div>
                            </div>
                            <!-- End Media -->
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
                <!-- End Col -->

                <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
                    <!-- Card -->
                    <div class="card h-100">
                        <div class="card-body">
                            <!-- Rating -->
                            <div class="d-flex gap-1 mb-2">
                                <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                                <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                                <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                                <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                                <img src="./assets/svg/illustrations/star-half.svg" alt="Review rating" width="16">
                            </div>
                            <!-- End Rating -->

                            <div class="mb-auto">
                                <p class="card-text">From boarding passes to transit and movie tickets, there's
                                    pretty much nothing you can't store with Front Pay.</p>
                            </div>
                        </div>

                        <div class="card-footer pt-0">
                            <!-- Media -->
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img class="avatar avatar-circle" src="./assets/img/160x160/img9.jpg"
                                        alt="Image Description">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="card-title mb-0">Andrea Gardy</h5>
                                    <p class="card-text small">CEO at Slack</p>
                                </div>
                            </div>
                            <!-- End Media -->
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
                <!-- End Col -->

                <div class="col-sm-6 col-lg-4">
                    <!-- Card -->
                    <div class="card h-100">
                        <div class="card-body">
                            <!-- Rating -->
                            <div class="d-flex gap-1 mb-2">
                                <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                                <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                                <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                                <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                                <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                            </div>
                            <!-- End Rating -->

                            <div class="mb-auto">
                                <p class="card-text">I love Front Pay for cash back, reward points and fraud
                                    protection – just like when you're swiping your card.</p>
                            </div>
                        </div>

                        <div class="card-footer pt-0">
                            <!-- Media -->
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img class="avatar avatar-circle" src="./assets/img/160x160/img3.jpg"
                                        alt="Image Description">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="card-title mb-0">Philip Williams</h5>
                                    <p class="card-text small">Front Pay user</p>
                                </div>
                            </div>
                            <!-- End Media -->
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Testimonials -->

        </div>
    </div>
    <!-- End Testimonials Section -->

    <!-- Pricing -->
    <div id="pricingSection" class="container content-space-2">
        <!-- Heading -->
        <div class="w-lg-75 text-center mx-auto mb-5 mb-sm-9">
            <h2 class="h1">Conheça os planos</h2>
            <p>All kinds of plans that scale with your user growth</p>
        </div>
        <!-- End Heading -->

        <div class="w-lg-75 mx-lg-auto">
            <div class="row align-items-sm-end gx-3 mb-5 mb-md-7">
                <div class="col-sm-6 col-md-4 mb-3 mb-md-0">
                    <!-- Card -->
                    <div class="card card-bordered shadow-none" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-header text-center pb-0">
                            <span class="svg-icon svg-icon-sm text-primary mb-3">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.85"
                                        d="M15.9999 25.6C21.3018 25.6 25.5999 21.302 25.5999 16C25.5999 10.6981 21.3018 6.40002 15.9999 6.40002C10.698 6.40002 6.3999 10.6981 6.3999 16C6.3999 21.302 10.698 25.6 15.9999 25.6Z"
                                        fill="#377dff" />
                                </svg>

                            </span>

                            <h4 class="card-title">Starter</h4>
                            <h3 class="card-title">Free</h3>
                        </div>

                        <div class="card-body">
                            <ul class="list-checked list-checked-primary">
                                <li class="list-checked-item">Community support</li>
                                <li class="list-checked-item">400+ pages</li>
                            </ul>
                        </div>

                        <div class="card-footer pt-0">
                            <div class="d-grid">
                                <button type="button" class="btn btn-primary btn-sm btn-transition">Create account</button>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
                <!-- End Col -->

                <div class="col-sm-6 col-md-4 mb-3 mb-md-0">
                    <!-- Card -->
                    <div class="card card-bordered shadow-none" data-aos="fade-up" data-aos-delay="50">
                        <div class="card-header text-center pb-0">
                            <span class="svg-icon text-primary mb-3">
                                <svg width="56" height="56" viewBox="0 0 56 56" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.85"
                                        d="M28 44.8C37.2783 44.8 44.7999 37.2784 44.7999 28C44.7999 18.7216 37.2783 11.2 28 11.2C18.7216 11.2 11.2 18.7216 11.2 28C11.2 37.2784 18.7216 44.8 28 44.8Z"
                                        fill="#377dff" />
                                </svg>

                            </span>

                            <h4 class="card-title">Individual</h4>
                            <h3 class="card-title">$59</h3>
                        </div>

                        <div class="card-body">
                            <ul class="list-checked list-checked-primary">
                                <li class="list-checked-item">Community support</li>
                                <li class="list-checked-item">400+ pages</li>
                                <li class="list-checked-item">100+ header variations</li>
                            </ul>
                        </div>

                        <div class="card-footer pt-0">
                            <div class="d-grid">
                                <button type="button" class="btn btn-primary btn-sm btn-transition">Try free for
                                    14-days</button>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
                <!-- End Col -->

                <div class="col-sm-6 col-md-4">
                    <!-- Card -->
                    <div class="card card-bordered shadow-none" data-aos="fade-up">
                        <div class="card-header text-center pb-0">
                            <span class="svg-icon text-primary mb-3">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                        <path opacity="0.85"
                                            d="M9.6 20.2C14.9019 20.2 19.2 15.9019 19.2 10.6C19.2 5.29807 14.9019 1 9.6 1C4.29807 1 0 5.29807 0 10.6C0 15.9019 4.29807 20.2 9.6 20.2Z"
                                            fill="#377dff" />
                                        <path opacity="0.85"
                                            d="M22.4 20.2C27.702 20.2 32 15.9019 32 10.6C32 5.29807 27.702 1 22.4 1C17.0981 1 12.8 5.29807 12.8 10.6C12.8 15.9019 17.0981 20.2 22.4 20.2Z"
                                            fill="#377dff" />
                                        <path opacity="0.85"
                                            d="M16.2001 31C21.502 31 25.8001 26.7019 25.8001 21.4C25.8001 16.0981 21.502 11.8 16.2001 11.8C10.8982 11.8 6.6001 16.0981 6.6001 21.4C6.6001 26.7019 10.8982 31 16.2001 31Z"
                                            fill="#377dff" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect width="32" height="32" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>

                            </span>

                            <h4 class="card-title">Enterprise</h4>
                            <h3 class="card-title">$599</h3>
                        </div>

                        <div class="card-body">
                            <ul class="list-checked list-checked-primary">
                                <li class="list-checked-item">Community support</li>
                                <li class="list-checked-item">400+ pages</li>
                                <li class="list-checked-item">100+ header variations</li>
                                <li class="list-checked-item">20+ home page options</li>
                            </ul>
                        </div>

                        <div class="card-footer pt-0">
                            <div class="d-grid">
                                <button type="button" class="btn btn-primary btn-sm btn-transition">Try free for
                                    14-days</button>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->

            <!-- Card Info -->
            <div class="text-center" data-aos="fade-up">
                <div class="card card-info-link card-sm mb-5 mb-md-0">
                    <div class="card-body">
                        Need custom plan? <a class="card-link ms-2" href="#">Contact us <span
                                class="bi-chevron-right small ms-1"></span></a>
                    </div>
                </div>
            </div>
            <!-- End Card Info -->
        </div>
    </div>
    <!-- End Pricing -->

@endsection
