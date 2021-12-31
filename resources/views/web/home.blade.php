@extends('web.master')
@section('title', 'Página Principal')

@section('content')

    @php
    date_default_timezone_set('America/Sao_Paulo');
    setlocale(LC_ALL, 'pt_BR.utf-8', 'ptb', 'pt_BR', 'portuguese-brazil', 'portuguese-brazilian', 'bra', 'brazil', 'br');
    setlocale(LC_TIME, 'pt_BR.utf-8', 'ptb', 'pt_BR', 'portuguese-brazil', 'portuguese-brazilian', 'bra', 'brazil', 'br');
    @endphp

    <!-- tools -->
    <div class="message-toast"></div>
    <!-- end tools -->

    <div class="gradient-x-overlay-sm-primary position-relative overflow-hidden">
        <div class="container content-space-t-3 content-space-t-lg-4 content-space-b-2">
            <div class="w-lg-65 text-center mx-lg-auto">
                <!-- Heading -->
                <div class="mb-5">
                    <span class="text-cap text-success">PENSE FORA DA CAIXA</span>
                    <h1 class="display-4 mb-3 display-4 mb-3 font-weight-900">
                        Somos especialistas no desenvolvimento de Softwares <br>

                        <span class="text-primary text-highlight-warning">
                            <span class="js-text-animation" data-hs-typed-options='{
                                                  "strings": ["WEB.", "Aplicativos Mobile.", "de Automação de processos."],
                                                  "typeSpeed": 90,
                                                  "loop": true,
                                                  "backSpeed": 30,
                                                  "backDelay": 2500
                                                }'></span>
                        </span>
                    </h1>

                    <p class="lead text-white-70">
                        Precisa de uma solução customizada para sua empresa?
                </div>
                <!-- End Heading -->

                <div class="d-grid d-sm-flex justify-content-sm-center align-items-sm-center gap-3">
                    <a class="btn btn-theme-purple btn-transition font-weight-600 slidelink me-2" href="#">FALE CONOSCO <i
                            class="bi-chevron-right small ms-1"></i></a>

                    <small class="text-white">ou</small>

                    <a class="video-player btn btn-white btn-transition" href="https://www.youtube.com/watch?v=d4eDWc8g0e0"
                        role="button" data-fslightbox="youtube-video">
                        <i class="bi-play-circle-fill me-1"></i> SAIBA
                        MAIS
                    </a>
                </div>
            </div>
        </div>

        <!-- Mockup -->
        <div class="container content-space-b-2 content-space-b-lg-3">
            <div class="position-relative text-center mx-lg-auto">
                <!-- Devices -->
                <div class="devices">
                    <!-- Mobile Device -->
                    <figure class="device-mobile rotated-3d-right">
                        <div class="device-mobile-frame">
                            <img class="device-mobile-img" src="../assets/img/407x867/img1.jpg" alt="Image Description">
                        </div>
                    </figure>
                    <!-- End Mobile Device -->

                    <!-- Browser Device -->
                    <figure class="device-browser">
                        <div class="device-browser-header">
                            <div class="device-browser-header-btn-list">
                                <span class="device-browser-header-btn-list-btn"></span>
                                <span class="device-browser-header-btn-list-btn"></span>
                                <span class="device-browser-header-btn-list-btn"></span>
                            </div>
                            <div class="device-browser-header-browser-bar">www.htmlstream.com/front/</div>
                        </div>

                        <div class="device-browser-frame">
                            <img class="device-browser-img" src="../assets/img/1618x1010/img1.jpg" alt="Image Description">
                        </div>
                    </figure>
                    <!-- End Browser Device -->
                </div>
                <!-- End Devices -->

                <!-- SVG Shape -->
                <figure class="position-absolute top-0 end-0 mt-n10 me-n10 aos-init aos-animate" style="width: 12rem;"
                    data-aos="fade-up" data-aos-delay="100" data-aos-offset="-50">
                    <img class="img-fluid" src="./assets/svg/components/dots-lg.svg" alt="Image Description">
                </figure>
                <!-- End SVG Shape -->

                <!-- SVG Shape -->
                <figure class="position-absolute bottom-0 start-0 mb-n7 ms-n7 aos-init aos-animate" style="width: 10rem;"
                    data-aos="fade-up">
                    <img class="img-fluid" src="./assets/svg/components/dots.svg" alt="Image Description">
                </figure>
                <!-- End SVG Shape -->
            </div>
        </div>
        <!-- End Mockup -->
    </div>

    <div id="featuresSection" class="container content-space-t-2 content-space-b-md-2 content-space-lg-3">
        <!-- Heading -->
        <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
            <h2 class="h1">O que esperar de resultados com as soluções <span class="text-primary">Unitbox</span> 
            </h2>
            <p class="lead text-white-70">Linhas de softwares e serviços especialmente projetados para cada segmento.</p>
        </div>
        <!-- End Heading -->

        <div class="row gx-3">
            <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
                <!-- Card -->
                <a class="card card-sm card-transition h-100" href="#">
                    <div class="card-body">
                        <span class="svg-icon text-primary mb-3">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 21C6 21.6 6.4 22 7 22H17C17.6 22 18 21.6 18 21V20H6V21Z" fill="#035A4B"></path>
                                <path opacity="0.3" d="M17 2H7C6.4 2 6 2.4 6 3V20H18V3C18 2.4 17.6 2 17 2Z" fill="#035A4B">
                                </path>
                                <path d="M12 4C11.4 4 11 3.6 11 3V2H13V3C13 3.6 12.6 4 12 4Z" fill="#035A4B"></path>
                            </svg>

                        </span>

                        <h4 class="card-title">Responsive</h4>
                        <p class="card-text text-body">Front is an incredibly beautiful, fully responsive, and mobile-first
                            projects on the web.</p>
                    </div>

                    <div class="card-footer pt-0">
                        <span class="card-link">Learn more <i class="bi-chevron-right small ms-1"></i></span>
                    </div>
                </a>
                <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
                <!-- Card -->
                <a class="card card-sm card-transition h-100" href="#">
                    <div class="card-body">
                        <span class="svg-icon text-primary mb-3">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                    fill="#035A4B"></path>
                                <path opacity="0.3"
                                    d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                    fill="#035A4B"></path>
                            </svg>

                        </span>

                        <h4 class="card-title">Customizable</h4>
                        <p class="card-text text-body">Front template can be easily customized with its cutting-edge
                            components and features.</p>
                    </div>

                    <div class="card-footer pt-0">
                        <span class="card-link">Learn more <i class="bi-chevron-right small ms-1"></i></span>
                    </div>
                </a>
                <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="col-sm-6 col-lg-3 mb-3 mb-sm-0">
                <!-- Card -->
                <a class="card card-sm card-transition h-100" href="#">
                    <div class="card-body">
                        <span class="svg-icon text-primary mb-3">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M4 4L11.6314 2.56911C11.875 2.52343 12.125 2.52343 12.3686 2.56911L20 4V11.9033C20 15.696 18.0462 19.2211 14.83 21.2313L12.53 22.6687C12.2057 22.8714 11.7943 22.8714 11.47 22.6687L9.17001 21.2313C5.95382 19.2211 4 15.696 4 11.9033L4 4Z"
                                    fill="#035A4B"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11.175 14.75C10.9354 14.75 10.6958 14.6542 10.5042 14.4625L8.58749 12.5458C8.20415 12.1625 8.20415 11.5875 8.58749 11.2042C8.97082 10.8208 9.59374 10.8208 9.92915 11.2042L11.175 12.45L14.3375 9.2875C14.7208 8.90417 15.2958 8.90417 15.6792 9.2875C16.0625 9.67083 16.0625 10.2458 15.6792 10.6292L11.8458 14.4625C11.6542 14.6542 11.4146 14.75 11.175 14.75Z"
                                    fill="#035A4B"></path>
                            </svg>

                        </span>

                        <h4 class="card-title">Premium <span class="badge badge-success badge-pill ml-1">sketch</span>
                        </h4>
                        <p class="card-text text-body">Front is not only for developers but also for designers, and includes
                            a Sketch file.</p>
                    </div>

                    <div class="card-footer pt-0">
                        <span class="card-link">Learn more <i class="bi-chevron-right small ms-1"></i></span>
                    </div>
                </a>
                <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="col-sm-6 col-lg-3">
                <!-- Card -->
                <a class="card card-sm card-transition h-100" href="#">
                    <div class="card-body">
                        <span class="svg-icon text-primary mb-3">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M4.85714 1H11.7364C12.0911 1 12.4343 1.12568 12.7051 1.35474L17.4687 5.38394C17.8057 5.66895 18 6.08788 18 6.5292V19.0833C18 20.8739 17.9796 21 16.1429 21H4.85714C3.02045 21 3 20.8739 3 19.0833V2.91667C3 1.12612 3.02045 1 4.85714 1ZM7 13C7 12.4477 7.44772 12 8 12H15C15.5523 12 16 12.4477 16 13C16 13.5523 15.5523 14 15 14H8C7.44772 14 7 13.5523 7 13ZM8 16C7.44772 16 7 16.4477 7 17C7 17.5523 7.44772 18 8 18H11C11.5523 18 12 17.5523 12 17C12 16.4477 11.5523 16 11 16H8Z"
                                    fill="#035A4B"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M6.85714 3H14.7364C15.0911 3 15.4343 3.12568 15.7051 3.35474L20.4687 7.38394C20.8057 7.66895 21 8.08788 21 8.5292V21.0833C21 22.8739 20.9796 23 19.1429 23H6.85714C5.02045 23 5 22.8739 5 21.0833V4.91667C5 3.12612 5.02045 3 6.85714 3ZM7 13C7 12.4477 7.44772 12 8 12H15C15.5523 12 16 12.4477 16 13C16 13.5523 15.5523 14 15 14H8C7.44772 14 7 13.5523 7 13ZM8 16C7.44772 16 7 16.4477 7 17C7 17.5523 7.44772 18 8 18H11C11.5523 18 12 17.5523 12 17C12 16.4477 11.5523 16 11 16H8Z"
                                    fill="#035A4B"></path>
                            </svg>

                        </span>

                        <h4 class="card-title">Documentation</h4>
                        <p class="card-text text-body">Every component and plugin is well documented with live examples.</p>
                    </div>

                    <div class="card-footer pt-0">
                        <span class="card-link">Learn more <i class="bi-chevron-right small ms-1"></i></span>
                    </div>
                </a>
                <!-- End Card -->
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->
    </div>

    <!-- ABERTURA -->
    <figure class="position-absolute bottom-0 start-0 zi-n1 mb-n10 me-n10" style="width: 21rem;">
        <svg viewBox="0 0 451 902" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.125" d="M0 82C203.8 82 369 247.2 369 451C369 654.8 203.8 820 0 820"
                stroke="url(#paint1_linear)" stroke-width="164" stroke-miterlimit="10"></path>
            <defs>
                <linearGradient id="paint1_linear" x1="323.205" y1="785.242" x2="-97.6164" y2="56.3589"
                    gradientUnits="userSpaceOnUse">
                    <stop offset="0" stop-color="white" stop-opacity="0"></stop>
                    <stop offset="1" stop-color="#377dff"></stop>
                </linearGradient>
            </defs>
        </svg>
    </figure>

    <!-- End ABERTURA -->

    <!-- PRODUTOS -->
    <div id="produtos" class="container content-space-2 content-space-lg-2 content-space-md-2 content-space-b-2 ">
        <div class="w-md-90 w-lg-80 text-center mx-md-auto mb-5 mb-md-9">
            <h2 class="display-5 mb-3 text-white ">Cases de sucesso
            </h2>
            <p class="lead text-white">Confira as soluções que desenvolvemos</p>
        </div>
        <div class="row mb-5 mb-md-0 d-flex justify-content-center">
            <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0 ">
                <!-- Card -->
                <a class="card card-transition card-sm h-100 shadow-none bg-dark border-bottom-green"
                    href="https://uniplay.com.br" target="_blank" data-aos="fade-up" data-aos-delay="50">

                    <div class="p-2">
                        <img class="card-img"
                            src="{{ asset('/assets/img/web/boneco-celular-mimicas-mimics-uniplay.png') }}"
                            alt="Mimics Arcade">
                    </div>

                    <div class="card-body">
                        <h2 class="card-title text-inherit text-white display-7 font-weight-900">Mimics
                            Arcade</h2>
                        <p class="lead text-white-70">Jogo de mímicas gratuíto para jogar em qualquer lugar utilizando um
                            dispositivo conectado a internet.</p>

                        <span class="text-white-50 fs--2">Contribuições:</span>
                        <div class="col-auto mt-3">
                            <!-- Avatar Group -->
                            <div class="avatar-group avatar-group-sm mb-0">
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
                    </div>
                    <div>
                        <button class="btn btn-link">SAIBA MAIS<i class="bi-chevron-right small ms-1"></i>
                        </button>
                    </div>

                </a>
                <!-- End Card -->
            </div>

        </div>
        {{-- <div class="col-lg-12 text-center mt-7">
            <a class="btn btn-lg btn-theme-success btn-transition rounded-pill font-weight-900" href=""
                target="_blank">CONFIRA
                TODOS OS NOSSOS PROJETOS <span class="bi-chevron-right small ms-1"></span></a>
        </div> --}}
        <!-- Card Info -->

        <!-- End Card Info -->
        <!-- End Row -->
    </div>
    <!-- End PRODUTOS -->

    <div id="blog" class="container content-space-2 content-space-lg-3 content-space-md-1 content-space-b-2">
        <div class="w-md-90 w-lg-80 text-center mx-md-auto mb-5 mb-md-9">
            <h2 class="display-5 mb-3 text-white font-weight-900">Insights do nosso time
            </h2>
            <p class="lead text-white-70">Obtenha insights do nosso time de especialistas sobre metodologias de
                desenvolvimento de software, linguagens, tecnologia e muito mais para apoiar o seu time na operação e
                estratégia de negócio.
            
                Conheça o nosso canal de notícias e fique por dentro do universo tecnológico para comunicação. Objetivo deste canal é fornecer informação útil para o seu dia a dia.
            </p>
        </div>

        <div class="row d-flex justify-content-center">

            @if (!empty($posts))
                @foreach ($posts as $post)

                    @php
                        $dt = Carbon\Carbon::createFromTimeString($post->published_pub);
                        $dtConvertida = $dt->formatLocalized('%A %d %B %Y');
                        
                    @endphp

                    <div class="col-sm-6 col-lg-4 mb-4">
                        <!-- Card -->
                        <a class="card card-transition card-sm h-100 shadow-none border-1 bg-dark"
                            href="{{ $post->url_post }}" target="_blank" data-aos="fade-up" data-aos-delay="50">

                            <div class="shape-container">
                                <img class="card-img-top" src="{{ $post->url_image }}" alt="Image Description"
                                    style="height: 280px !important; object-fit: cover;">
                                <!-- Shape -->
                                <div class="shape shape-bottom zi-1" style="margin-bottom: -.25rem">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
                                        <path fill="#232e3c" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"></path>
                                    </svg>
                                </div>
                                <!-- End Shape -->
                            </div>

                            <div class="card-body">
                                <h2 class="card-title text-inherit text-white display-7 font-weight-900">
                                    {{ $post->title }}</h2>

                            </div>
                            <!-- Card Footer -->
                            <div class="card-footer text-white-70">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 avatar-group avatar-group-xs">
                                        <span class="avatar avatar-circle" href="#" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="{{ $post->author }}">
                                            <img class="avatar-img" src="{{ $post->url_avatar_author }}"
                                                alt="Image Description">
                                        </span>
                                    </div>

                                    <div class="flex-grow-1">
                                        <div class="d-flex justify-content-end">
                                            <p class="card-text text-white-70">{{ $dtConvertida }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Card Footer -->
                        </a>
                        <!-- End Card -->
                    </div>
                    <!-- End Col -->
                @endforeach
            @endif

        </div>
        <!-- End Row -->
    </div>
    <!--fim saiba mais -->

    <div id="saibamais" class="container content-space-1 content-space-lg-1 mb-5 content-space-md-1 content-space-b-2">
        <div class="w-md-90 w-lg-80 text-center mx-md-auto mb-5 mb-md-9">
            <h2 class="display-5 mb-3 text-white font-weight-900">Tire suas dúvidas
            </h2>
            <p class="lead text-white">Está com dúvidas sobre nós? </p>
        </div>

        <div class="card bg-dark shadow-none">
            <div class="card-body ">
                <div class="w-lg-100 mx-lg-auto">
                    <!-- Accordion -->
                    <div class="accordion accordion-flush accordion-lg" id="accordionFAQ">
                        <!-- Accordion Item -->
                        <div class="accordion-item bg-dark" style="border-bottom: solid 1px #09e2deba !important;">
                            <div class="accordion-header" id="headingCuriousOne">
                                <a class="accordion-button bg-dark text-white" role="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    SOBRE NÓS
                                </a>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse show bg-dark"
                                aria-labelledby="headingCuriousOne" data-bs-parent="#accordionFAQ">
                                <div class="accordion-body bg-dark text-white-70">
                                    Mais do que pensar, pensamos fora da caixa!

                                    Nossa empresa foi criada em 2019 com o objetivo claro de oferecer soluções inovadoras em
                                    Softwares
                                    que geram otimização e segurança para o seu negócio. <br>
                                    <br>

                                    Temos paixão em apresentar alternativas que garantem o sucesso de nossos clientes no
                                    ambiente digital. Com amplo conhecimento e experiências
                                    em desenvolvimento de sistemas, oferecemos soluções em Softwares práticos, ágeis,
                                    seguros e eficazes alinhando a TI à estratégia
                                    do negócio.
                                </div>
                            </div>
                        </div>
                        <!-- End Accordion Item -->

                        <!-- Accordion Item -->
                        <div class="accordion-item bg-dark" style="border-bottom: solid 1px #09e2deba !important;">
                            <div class="accordion-header" id="headingCuriousTwo">
                                <a class="accordion-button collapsed bg-dark text-white" role="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    PARA QUAL EMPRESA ESSAS SOLUÇÕES SÃO ADEQUADAS?
                                </a>
                            </div>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingCuriousTwo"
                                data-bs-parent="#accordionFAQ">
                                <div class="accordion-body text-white-70">
                                    Nossas soluções atendem desde os maiores clientes no ramo alimentício, como mercados,
                                    prestadores de serviço, redes de comércios, entre outros.
                                    Em suma, qualquer negócio que queira preservar a qualidade e segurança de suas
                                    informações e alto padrão de atendimento e performance. <br>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item bg-dark" style="border-bottom: solid 1px #09e2deba !important;">
                            <div class="accordion-header" id="headingCuriousThree">
                                <a class="accordion-button collapsed text-white bg-dark" role="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    PRECISO COMPRAR TODO O PROJETO OU POSSO SOLICITAR APENAS UMA SOLUÇÃO ESPECÍFICA?
                                </a>
                            </div>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="headingCuriousThree" data-bs-parent="#accordionFAQ">
                                <div class="accordion-body text-white-70">
                                    A UNITBOX está preparada para atender a sua empresa desde uma demanda pontual de suporte
                                    técnico até projetos complexos que envolve diferentes soluções e mão de obra
                                    especializada.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--fim saiba mais -->

    <!--fale conosco -->
    <div class="bg-dark" style="background-image: url(./assets/svg/components/wave-pattern-light.svg);"
        id="faleconosco">

        <div class="container content-space-t-2 content-space-t-lg-3 content-space-b-1">
            <!-- Heading -->
            <div class="w-lg-50 text-center mx-lg-auto mb-7"
                style="background-image: url(./assets/svg/components/isometric-squares-light.svg);">
                <span class="text-cap text-white-70">Fale Conosco</span>
                <h2 class="text-white lh-base">Ficou com alguma dúvida? Precisa de ajuda, ou quer trabalhar c a gente?
                    <br> <span class="text-green">Let's chat.</span>
                </h2>
            </div>
            <!-- End Heading -->

            <div class="mx-auto" style="max-width: 35rem;">
                <!-- Card -->
                <div class="card zi-2">
                    <div class="card-body">
                        <!-- Form -->
                        <small class="text-small">Para entrar em contato conosco, preencha o formulário abaixo. Nós
                            respondemos a quase todos dentro de um dia útil e estamos animados com seu contato.</small>
                        <hr>
                        <form action="{{ route('web.interacao.store') }}" method="POST" name="form_faleconosco"
                            data-grecaptcha-action="contato">
                            @csrf
                            <input type="hidden" name="grecaptcha" id="grecaptcha">
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- Form -->
                                    <div class="mb-3">
                                        <label class="form-label" for="name">Nome *</label>
                                        <input type="text" class="form-control form-control-lg" name="name" id="name"
                                            placeholder="Digite seu nome" aria-label="Digite seu nome" value="" required>
                                    </div>
                                    <!-- End Form -->
                                </div>
                            </div>
                            <!-- End Row -->

                            <div class="mb-3">
                                <label class="form-label" for="email">E-mail *</label>
                                <input type="email" class="form-control form-control-lg" name="email" id="email"
                                    placeholder="ex. email@site.com" aria-label="email@site.com" value="" required>
                            </div>
                            <!-- End Form -->

                            <!-- Form -->
                            <div class="mb-3">
                                <label class="form-label" for="companyname">Nome da Empresa<span
                                        class="form-label-secondary"> (Opcional)</span></label>
                                <input type="text" class="form-control form-control-lg" name="company_name"
                                    id="company_name" placeholder="Digite o nome da empresa"
                                    aria-label="Digite o nome da empresa" value="" required>
                            </div>
                            <!-- End Form -->

                            <!-- Select -->
                            <div class="mb-3">
                                <label class="form-label" for="subject">Seu Interesse *</label>
                                <select id="subject" class="form-select form-select-lg" name="subject"
                                    aria-label="Seu Interesse" required>
                                    <option value="" selected>Selecione..</option>
                                    <option value="duvida">Dúvidas</option>
                                    <option value="parceria">Parceria</option>
                                    <option value="orcamento">Orçamento</option>
                                    <option value="outros">Outros</option>
                                </select>
                            </div>
                            <!-- End Select -->

                            <!-- Form -->
                            <div class="mb-4">
                                <label class="form-label" for="message">Mensagem *</label>
                                <textarea class="form-control form-control-lg" name="message" id="message"
                                    placeholder="Digite sua mensagem" aria-label="Digite sua mensagem" required
                                    rows="4"></textarea>
                            </div>
                            <!-- End Form -->
                            <div class="form-check mb-4">
                                <input type="checkbox" class="form-check-input" id="aceite" name="aceite"
                                    data-msg="Campo obrigatório." required>
                                <label class="form-check-label" for="aceite"> Aceito compartilhar
                                    minhas informações com a <b>Unitbox</b> e estou ciente da
                                    <a href=./page-privacy.html>Política de Privacidade.</a></label>
                            </div>
                            <div class="d-grid mb-2">
                                <button type="submit"
                                    class="btn btn-theme-purple btn-lg btn-faleconosco font-weight-900">ENVIAR
                                    MENSAGEM</button>
                            </div>
                            <div class="text-center">
                                <span class="form-text"> <small>Fica tranquilo, também odeio SPAM!
                                        Seu e-mail está seguro comigo. ❤️</small></span>
                            </div>
                        </form>
                        <!-- End Form -->
                    </div>
                </div>
                <!-- End Card -->
            </div>
        </div>
    </div>
    <!-- fim fale conosco -->
@endsection
@section('js')
    <script>
        $(function() {

            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                }
            });

            $('form[name="form_faleconosco"]').submit(function(e) {
                e.preventDefault();

                if (!$(this).valid()) {
                    return false;
                }

                const form = $(this);
                const action = form.attr('action');
                const form_data = $(this).serialize();

                var button = $(".btn-faleconosco");

                button.addClass('disabled')
                    .html(
                        '<span class="spinner-border spinner-border-sm " role="status" aria-hidden="true"></span> ' +
                        button.text());

                $.post(action, form_data, 'json')
                    .done(function(response) {

                        short.message(response.status, response.subject, response.message);

                        $(button).removeClass('disabled').html(button.text());

                        $(form).trigger("reset");
                    })
                    .fail(function(xhr, status, error) {
                        if (xhr.status === 401 || xhr.status === 419) {
                            short.message('warning',
                                "Whoops, sua sessão expirou, você será redirecionado! Por favor aguarde.",
                                "");
                            setTimeout(function() {
                                window.location.reload();
                            }, 2000);
                            return false;
                        }
                        if (xhr.status === 422) {
                            var errors = xhr.responseJSON;

                            var errorsHtml = "";
                            $.each(errors, function(key, value) {
                                if ($.isPlainObject(value)) {
                                    $.each(value, function(key, value) {
                                        errorsHtml += "* " + value + "</br>";
                                    });
                                }
                            });
                            short.message("danger", "Whoops, Mensagem não enviada!", errorsHtml);
                        } else {
                            short.message("danger",
                                "Whoops, Estamos com problemas no momento, tente novamente mais tarde!",
                                "");
                        }

                        $(button).removeClass('disabled').html(button.text());
                    })
                    .always(function() {
                        recaptcha();
                    });
            });
        });
    </script>

@endsection
