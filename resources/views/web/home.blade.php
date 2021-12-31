@extends('web.master')
@section('title', 'Soluções em tecnologia ideal para o seu negócio')

@section('content')

    @php
    date_default_timezone_set('America/Sao_Paulo');
    setlocale(LC_ALL, 'pt_BR.utf-8', 'ptb', 'pt_BR', 'portuguese-brazil', 'portuguese-brazilian', 'bra', 'brazil', 'br');
    setlocale(LC_TIME, 'pt_BR.utf-8', 'ptb', 'pt_BR', 'portuguese-brazil', 'portuguese-brazilian', 'bra', 'brazil', 'br');
    @endphp

    <!-- tools -->
    <div class="message-toast"></div>
    <!-- end tools -->

    <div  class="gradient-x-overlay-sm-primary position-relative overflow-hidden">
        <div id="home" class="container content-space-t-3 content-space-t-lg-4 content-space-b-2">
            <div class="w-lg-65 text-center mx-lg-auto">
                <!-- Heading -->
                <div class="mb-5">
                    <span class="text-cap text-success">PENSE FORA DA CAIXA</span>
                    <h1 class="display-4 mb-3 display-4 mb-3 font-weight-900">
                        Somos especialistas no desenvolvimento de<br>

                        <span class="text-primary text-highlight-warning">
                            <span class="js-text-animation" data-hs-typed-options='{
                                                          "strings": ["Software Web.", "Aplicativos Mobile.", "Automações."],
                                                          "typeSpeed": 100,
                                                          "loop": true,
                                                          "backSpeed": 30,
                                                          "backDelay": 2500
                                                        }'></span>
                        </span>
                    </h1>

                    <p class="lead text-white-70">
                        Precisa de uma solução customizada para sua empresa? </p>
                </div>
                <!-- End Heading -->

                <div class="d-grid d-sm-flex justify-content-sm-center align-items-sm-center gap-3">
                    <a class="btn btn-theme-purple btn-transition font-weight-600 slidelink me-2" href="{{ route('web.home') }}/#faleconosco">FALE CONOSCO <i
                            class="bi-chevron-right small ms-1"></i></a>

                    <small class="text-white">ou</small>

                    {{-- <a class="video-player btn btn-white btn-transition" href="https://www.youtube.com/watch?v=d4eDWc8g0e0"
                        role="button" data-fslightbox="youtube-video">
                        SAIBA MAIS <i class="bi-play-circle-fill me-1"></i>
                    </a> --}}

                     <a class="btn btn-white btn-transition" href="{{ route('web.home') }}/#servicos">
                        SAIBA MAIS <i class="bi-play-circle-fill me-1"></i>
                    </a>



                </div>
            </div>
        </div>

        <!-- Mockup -->
        <div class="container content-space-b-1 content-space-b-lg-1">
            <div class="position-relative text-center mx-lg-auto">
                <!-- Devices -->
                <div class="devices">
                    <!-- Mobile Device -->
                    <figure class="device-mobile rotated-3d-right">
                        <div class="device-mobile-frame">
                            <img class="device-mobile-img" src="{{ asset('assets/img/web/connect_celular_.png') }}"
                                alt="Mobile Connect">
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
                            <div class="device-browser-header-browser-bar">https://unitbox.com.br</div>
                        </div>

                        <div class="device-browser-frame">
                            <img class="device-browser-img" src="{{ asset('assets/img/web/connect.png') }}"
                                alt="Desktop Connect">
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

    <div id="servicos" class="container content-space-t-2 content-space-b-md-2 content-space-lg-3">
        <!-- Heading -->
        <div class="text-center mx-md-auto mb-5 mb-md-9">
            <h2 class="h1">O que esperar de resultados <br> com as soluções <span
                    class="text-primary">Unitbox</span>
            </h2>
            <p class="lead text-white-70"></p>
        </div>
        <!-- End Heading -->

        <div class="row gx-3">
            <div class="col-sm-6 col-lg-4 mb-3 mb-lg-0">
                <!-- Card -->
                <a class="card card-sm card-transition h-100 bg-dark text-center shadow-none border-bottom-purple" href="{{ route('web.home') }}/#faleconosco">
                    <div class="card-header" style="background-color: rgb(224, 224, 228)!important">
                        <img class="img-fluid" src="{{ asset('assets/svg/illustrations/oc-building-apps.svg') }}" alt="Image Description" style="height: 9rem;">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title mt-3">EQUIPE ESPECIALIZADA</h3>
                        <p class="lead text-white-70">Equipes especializadas e com foco total na experiência do cliente.</p>
                    </div>

                    <div class="card-footer pt-0">
                        <span class="card-link">Saiba mais <i class="bi-chevron-right small ms-1"></i></span>
                    </div>
                </a>
                <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="col-sm-6 col-lg-4 mb-3 mb-lg-0">
                <!-- Card -->
                <a class="card card-sm card-transition h-100 bg-dark text-center shadow-none border-bottom-green" href="{{ route('web.home') }}/#faleconosco">
                    <div class="card-header" style="background-color: rgb(224, 224, 228)!important">
                        <img class="img-fluid" src="{{ asset('assets/svg/illustrations/oc-money-profits.svg') }}" alt="Image Description" style="height: 9rem;">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title mt-3">CUSTO DE IMPLANTAÇÃO</h3>
                        <p class="lead text-white-70">
                            Dimensionamento de recursos na medida certa para atender seu projeto.</p>
                    </div>

                    <div class="card-footer pt-0">
                        <span class="card-link">Saiba mais <i class="bi-chevron-right small ms-1"></i></span>
                    </div>
                </a>
                <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="col-sm-6 col-lg-4 mb-3 mb-lg-0">
                <!-- Card -->
                <a class="card card-sm card-transition h-100 bg-dark text-center shadow-none border-bottom-purple" href="{{ route('web.home') }}/#faleconosco">
                    <div class="card-header" style="background-color: rgb(224, 224, 228)!important">
                        <img class="img-fluid" src="{{ asset('assets/svg/illustrations/oc-collaboration.svg') }}" alt="Image Description" style="height: 9rem;">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title mt-3">GARANTIA EXTENDIDA</h3>
                        <p class="lead text-white-70">
                            Acompanhamos todos os nossos projetos após sua implantação.</p>
                    </div>

                    <div class="card-footer pt-0">
                        <span class="card-link">Saiba mais <i class="bi-chevron-right small ms-1"></i></span>
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
            <h2 class="h1 mb-3 text-white ">Cases de sucesso
            </h2>
            <p class="lead text-white-70">Linhas de softwares e serviços especialmente projetados para cada segmento.</p>
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

    <!-- blog -->
    <div id="blog" class="container content-space-2 content-space-lg-3 content-space-md-1 content-space-b-2">
        <div class="w-md-90 w-lg-80 text-center mx-md-auto mb-5 mb-md-9">
            <h2 class="display-5 mb-3 text-white font-weight-900">Insights do nosso time
            </h2>
            <p class="lead text-white-70 ">

                Conheça o nosso canal de notícias e fique por dentro do universo tecnológico para comunicação,
                desenvolvimento de software, linguagens e muito mais para apoiar o seu time na operação e
                estratégia de negócio.

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
    <!--fim blog -->

    <!--saiba mais -->
    <div id="saibamais" class="container content-space-1 content-space-lg-1 mb-5 content-space-md-1 content-space-b-2">
        <div class="w-md-90 w-lg-80 text-center mx-md-auto mb-5 mb-md-9">
            <h2 class="h1 mb-3 text-white font-weight-900">Saiba mais
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
                <h2 class="text-white lh-base">Ficou com alguma dúvida? Precisa de ajuda, ou quer trabalhar com a gente?
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
