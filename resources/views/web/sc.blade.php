{{-- <%@ Page Language="C#" AutoEventWireup="true" CodeBehind="home.aspx.cs" Inherits="www.home" %> --}}

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TKSRHG8');
    </script>
    <!-- End Google Tag Manager -->

    <title>SC Serviços ao Consumidor</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="ouvir, entender, falar, consumidor, atendimento, 0800, email, carta, tecnologia, sac, ou de atendimento ao consumidor, cozinha experimental, foto, fotografia, produção, filme de receita, aula de culinária">
    <meta name="description"
        content="A SC surgiu como uma empresa na contramão de sua época, buscando as soluções tecnológicas como apoio para uma comunicação única, efetiva e direta. Seu foco estava no conhecimento do consumidor, no entendimento de suas contradições e nas razões que o levavam a fazer suas escolhas.">
    <meta name="author" content="Scservicos" />
    <meta name="robots" content="index, follow" />
    <!-- SEO -->
    <link rel="icon" href="favicon.png" />
    <link rel="canonical" href="https://www.scservicos.com.br" />

    <meta property="og:site_name" content="Scservicos" />
    <meta property="og:type" content="article" />
    <meta property="og:locale" content="pt_BR" />
    <meta property="og:title" content="Scservicos" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://www.scservicos.com.br" />
    <meta property="og:image" content="" />
    <meta property="og:description"
        content="A SC surgiu como uma empresa na contramão de sua época, buscando as soluções tecnológicas como apoio para uma comunicação única, efetiva e direta. Seu foco estava no conhecimento do consumidor, no entendimento de suas contradições e nas razões que o levavam a fazer suas escolhas." />
 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Neucha" rel="stylesheet" />
    
    <link href="https://cdn.scservicos.com.br/css/solomon/tema.css?v.02" rel="stylesheet" />
    <link href="https://cdn.scservicos.com.br/css/bootstrap.min.css?v.02" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous" />
    <link href="https://cdn.scservicos.com.br/css/animate.css?v.02" rel="stylesheet" />
    <link href="https://cdn.scservicos.com.br/css/switch.css?v.02" rel="stylesheet" />
    <link href="https://cdn.scservicos.com.br/css/carousel.css" rel="stylesheet" />

    <!--[if lt IE 9]>
      <script src="https://cdn.scservicos.com.br/js/html5shiv.js"></script>
      <script src="https://cdn.scservicos.com.br/js/respond.min.js"></script>
    <![endif]-->
    <script src="https://cdn.scservicos.com.br/js/jquery.3.3.1.min.js?v.01"></script>
    <script src="https://cdn.scservicos.com.br/js/popper.min.js?v.01"></script>
    <script src="https://cdn.scservicos.com.br/js/bootstrap.min.js?v.01"></script>
    <script src="https://cdn.scservicos.com.br/js/bootstrap-notify.min.js?v.01"></script>
    <script src="https://cdn.scservicos.com.br/js/loadingoverlay.min.js?v.01"></script>
    <script src="https://cdn.scservicos.com.br/js/jquery.datatables.min.js?v.01"></script>
    <script src="https://cdn.scservicos.com.br/js/datatables.bootstrap4.min.js?v.01"></script>

    <!-- // TODO: css file -->
    <style type="text/css">
        .bg-image-full {
            background: no-repeat center center scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover;
        }

        .menu {
            font-family: 'Open Sans', sans-serif;
            font-size: 17px;
            font-weight: bold;
            line-height: 4.5em;
            float: right;
            margin-right: 1%;
        }

        h1,
        h3,
        h4 {
            font-family: 'Neucha', cursive;
            /* font-size: 35px; */
            color: #F15B22;
        }

        body {
            font-family: 'Open Sans', sans-serif;
        }

        i {
            color: #F15B22;
        }

        #clientesCarousel .carousel-item {
            height: 10rem;
        }

        #clientesCarousel .carousel-item>img {
            height: 10rem;
        }

        .asterisco {
            color: #ff0000;
        }

        .sc {
            color: #28a745;
            background-color: transparent;
            background-image: none;
            border-color: #ff6301;
        }

        }

        .labels {
            display: block;
            font-weight: 700;
            font-size: 16px;
            float: none;
            line-height: 1.3;
            margin: 0 0 4px 0;
            padding: 0;
        }

        .bg-sc-light {
            background-color: #ffa489;
        }

        .bg-sc {
            background-color: #f76531;
        }

        .btn-sc {
            color: #fff;
            background-color: #f76531;
            border-color: #f76531;
        }

        .btn-sc:focus,
        .btn-sc.focus {
            color: #fff;
            background-color: #e24912;
            border-color: #e24912;
        }

        .btn-sc:hover {
            color: #fff;
            background-color: #e24912;
            border-color: #e24912;
        }

        .btn-sc:active,
        .btn-sc.active,
        .open>.dropdown-toggle.btn-sc {
            color: #fff;
            background-color: #f76531;
            border-color: #f76531;
        }

        .btn-sc:active:hover,
        .btn-sc.active:hover,
        .open>.dropdown-toggle.btn-sc:hover,
        .btn-sc:active:focus,
        .btn-sc.active:focus,
        .open>.dropdown-toggle.btn-sc:focus,
        .btn-sc:active.focus,
        .btn-sc.active.focus,
        .open>.dropdown-toggle.btn-sc.focus {
            color: #fff;
            background-color: #e24912;
            border-color: #e24912;
        }

        .btn-sc:active,
        .btn-sc.active,
        .open>.dropdown-toggle.btn-sc {
            background-image: none;
        }

        .btn-sc.disabled:hover,
        .btn-sc[disabled]:hover,
        fieldset[disabled] .btn-sc:hover,
        .btn-sc.disabled:focus,
        .btn-sc[disabled]:focus,
        fieldset[disabled] .btn-sc:focus,
        .btn-sc.disabled.focus,
        .btn-sc[disabled].focus,
        fieldset[disabled] .btn-sc.focus {
            background-color: #e24912;
            border-color: #e24912;
        }

        .btn-sc .badge {
            color: #f76531;
            background-color: #fff;
        }

        .btn-outline-sc {
            color: #f76531;
            background-color: #fff;
            border-color: #f76531;
        }

        .btn-outline-sc:focus,
        .btn-outline-sc.focus {
            color: #fff;
            background-color: #e24912;
            border-color: #e24912;
        }

        .btn-outline-sc:hover {
            color: #fff;
            background-color: #e24912;
            border-color: #e24912;
        }

        .border-sc {
            border-color: #f15b22;
        }

        .img-fluids {
            max-width: 100%;
            height: auto;
        }

        label-sc {
            /* display: inline-block; */
            margin-bottom: 0px;
        }


        /* CUSTOMIZE THE CAROUSEL


        /* Carousel base class */
        .carousel {
            margin-bottom: 4rem;
        }

        /* Since positioning the image, we need to help out the caption */
        .carousel-caption {
            bottom: 3rem;
            z-index: 10;
        }

        /* Declare heights because of positioning of img element */
        .carousel-items {
            background-color: #777;
        }

        .carousel-items>img {
            position: absolute;
            top: 0;
            left: 0;
            min-width: 100%;
        }

        .list-group-item-sc {
            position: relative;
            display: block;
            padding: .75rem 1.25rem;
            margin-bottom: -1px;
            background-color: #fff;
            border: 1px solid #f765318c;
        }

        .list-group-flush .list-group-item-sc {
            border-right: 0;
            border-left: 0;
            border-radius: 0;
        }

        .carousel-caption {
            bottom: 0;
            z-index: 10;
            text-align: center;
            padding-bottom: 9px;
            left: 0px;
            right: 0px;
        }

        .label-sc {
            /* display: inline-block; */
            margin-bottom: 0px;
            line-height: 0px !important;
            padding-bottom: 0px !important;
            font-size: 27px;
        }

        .img-logo-sc {
            width: 60px;
        }


        @media screen and (max-width: 600px) {

            .carousel-item {
                height: 105px;
                background-color: #777;
            }

            #clientesCarousel .carousel-item {
                height: auto;
                margin-bottom: 10px;
            }


            .carousel-inners {
                height: 50px;
            }

            .img-fluids {
                max-width: 100%;
                height: 105px;
            }

            .img-fluid {
                max-width: 100%;
                height: 105px;
            }

            .carousel-item>img {
                position: absolute;
                top: 0;
                left: 0;
                min-width: 100%;
                height: 105px;
                margin-bottom: 15px;
            }

            #clientesCarousel .carousel-item>img {
                width: 360px;
                height: auto;
            }

            .icones-mobile-sc {
                font-size: 20px;
            }

            .carrossel {
                background-color: orange;
            }

            .label-sc {
                /* display: inline-block; */
                margin-bottom: 0px;
                line-height: 0px !important;
                padding-bottom: 0px !important;
                font-size: 10px !important;
            }


            .carousel-caption {
                bottom: -3px;
                z-index: 10;
                text-align: center;
                padding-bottom: 0px !important;
            }

            .img-logo-sc {
                width: 40px;
            }
        }

    </style>


    <style type="text/css">
        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 999;
            top: 0;
            left: 0;
            background-color: #fff;
            overflow-x: hidden;
            transition: 0.1s;
            padding-top: 60px;
        }

    </style>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TKSRHG8" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <!-- menu -->
    <div id="mySidenav" class="sidenav" style="z-index: 999999;">

        <div class="container">
            <!-- <a href="home-logged.html"><img src="https://placehold.it/200x200" alt="" class="rounded-circle pull-left" style="width: 60px; margin-top: -60px;"></a> -->
            <a href="/home.aspx">
                <img src="https://cdn-images.scservicos.com.br/view/0/solomon|sc|logo.png" alt=""
                    class="pull-left rounded-circle img-logo-sc" style="margin-top: -60px;" /></a>

            <div>&nbsp;</div>
            <div class="container profile">
                <strong>Sc Serviços</strong>
            </div>
        </div>
        <a href="javascript:void(0)" class="closebtn" style="text-decoration: none;"
            onclick="closeNav()">&times;</a>
        <hr />

        <div class="a-sidenav">
            <a onclick="closeNav()" href="#sobre">Sobre</a>
            <a onclick="closeNav()" href="#servicos">Serviços</a>
            <a onclick="closeNav()" href="#clientes">Clientes</a>
            <a onclick="closeNav()" href="https://medium.com/scservicos" target="_blank">Acontece aqui</a>
            <a onclick="closeNav()" href="https://medium.com/curtas-sc" target="_blank">Curtas</a>
            <a onclick="closeNav()" href="https://www.scservicos.com.br/scweb" target="_blank">SCWeb</a>
        </div>

    </div>
    <!-- menu -->


    <!-- navbar-->
    <nav class="navbar navbar-expand-md navbar-light bg-white border-bottom fixed-top">

        <a class="navbar-brand" href="home.aspx">
            <img src="https://cdn-images.scservicos.com.br/view/0/solomon|sc|logo.png"
                class="mb-1 mt-1 rounded-circle img-logo-sc" /></a>



        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbarx"
            onclick="openNav();">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto font-weight-bold px-2 mb-0 menu">
                <li class="nav-item active">
                    <a class="nav-link" href="#sobre">Sobre <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#servicos">Serviços</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#clientes">Clientes</a>
                </li>
                <li>
                    <a class="nav-link" href="https://medium.com/scservicos">Acontece aqui<span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contato">Contato</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://medium.com/curtas-sc" target="_blank">Curtas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.scservicos.com.br/scweb" target="_blank">SCWeb</a>
                </li>
            </ul>

        </div>
    </nav>
    <!-- navbar-->



    <!-- carousel -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <%--        
        <ol class="carousel-indicators mb-0">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>--%>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide img-fluids"
                    src="https://cdn-images.scservicos.com.br/view/0/sc-institucional|banners|Banners_ST_analiseatendimento.jpg"
                    alt="First slide" />
                <div class="carousel-caption">
                    <label class="label-sc" style="color: #FFF;">Atendimento especializado, logística e análise de
                        amostra de consumidor</label>
                </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide img-fluids"
                    src="https://cdn-images.scservicos.com.br/view/0/sc-institucional|banners|Banners_ST_escuta.jpg"
                    alt="Second slide" />
                <div class="carousel-caption">
                    <label class="label-sc" style="color: #FFF;">Escuta ativa com consumidores</label>
                </div>
            </div>
            <div class="carousel-item">
                <img class="third-slide img-fluids"
                    src="https://cdn-images.scservicos.com.br/view/0/sc-institucional|banners|Banners_ST_estrategia.jpg"
                    alt="Third slide" />
                <div class="carousel-caption ">
                    <label class="label-sc" style="color: #FFF;">Estratégia de conteúdo e mídia digital</label>
                </div>
            </div>
            <div class="carousel-item">
                <img class="fourth-slide img-fluids"
                    src="https://cdn-images.scservicos.com.br/view/0/sc-institucional|banners|Banners_ST_receitas.jpg"
                    alt="Fourth slide" />
                <div class="carousel-caption">
                    <label class="label-sc" style="color: #FFF;">Desenvolvimento, fotos e vídeos de
                        receitas</label>
                </div>
            </div>
            <div class="carousel-item">
                <img class="fifth-slide img-fluids"
                    src="https://cdn-images.scservicos.com.br/view/0/sc-institucional|banners|Banners_ST_sacgestao.jpg"
                    alt="Fifth slide" />
                <div class="carousel-caption ">
                    <label class="label-sc" style="color: #FFF;">SAC 2.0, CRM digital, gestão e monitoramento de
                        redes sociais</label>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon small" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon text-siz" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>


    <!-- sobre -->
    <section id="sobre" class="py-5 bg-light" style="margin-top: -60px;">

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Sobre</h1>
                    <div>&nbsp;</div>
                    <p>SC – Serviços ao Consumidor é uma agência especializada em comunicação e relacionamento um a um.
                        No mercado há mais de 25 anos, nasceu para a era do diálogo, abrindo canais de comunicação e
                        criando estruturas para que “a voz do consumidor seja ouvida”. Está ao lado das grandes
                        empresas, acompanhando a transformação nas relações de consumo, nesse universo rico em
                        oportunidades para aqueles que se dispõem a ouvir, entender e falar com seu público.</p>
                    <div>&nbsp;</div>
                    <a href="https://www.facebook.com/scservicos/" target="_blank"><i
                            class="fab fa-3x fa-facebook-square"></i></a>
                    <a href="https://www.instagram.com/scservicos/" target="_blank"><i
                            class="fab fa-3x fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/company/sc-servicos-ao-consumidor/" target="_blank"><i
                            class="fab fa-3x fa-linkedin"></i></a>
                    <div>&nbsp;</div>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <div>&nbsp;</div>
                    <img class="img-fluid"
                        src="https://cdn-images.scservicos.com.br/view/0/sc-institucional|sobre.png" alt="Sobre a SC" />
                    <div>&nbsp;</div>
                </div>
            </div>
        </div>
        <div>&nbsp;</div>
    </section>

    <!-- servicos -->
    <section id="servicos" class="py-5">

        <div class="container">
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <h1>Serviços</h1>
                </div>
            </div>
            <div>&nbsp;</div>
            <div>&nbsp;</div>


            <div class="row ml-3">
                <div class="col-md-4">
                    <h3>Atendimento ao Consumidor</h3>
                    <div>&nbsp;</div>
                    <ul class="pl-3">
                        <li>Acolhida personalizada e identificação imediata do consumidor.</li>
                        <li>Equipes especializadas com formação em nutrição.</li>
                        <li>Identificação de segmentos e relatórios estratégicos de escuta de consumidor.</li>
                        <li>Gestão de crises e de problemas emergentes.</li>
                        <li>Coleta e tratamento de amostras do consumidor, com avaliação das ocorrências e análise das
                            situações de consumo.</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3>Redes Sociais</h3>
                    <div>&nbsp;</div>
                    <ul class="pl-3">
                        <li>Monitoramento de produtos, marcas e consumidores.</li>
                        <li>Estratégia para mídias digitais.</li>
                        <li>Gestão de redes sociais e criação de pautas a partir da escuta do consumidor.</li>
                        <li>Criação de conteúdos multimídia para relacionamento com consumidor e divulgação da marca.
                        </li>
                        <li>SAC 2.0 e CRM digital: interação em redes sociais.</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3>Cozinha Experimental</h3>
                    <div>&nbsp;</div>
                    <ul class="pl-3">
                        <li>Estudo de produtos: testes e análises de usos culinários</li>
                        <li>Escuta ativa: encontro com segmentos de consumidores engajados com a marca para
                            identificação de oportunidades de comunicação, melhorias e desenvolvimento de novos
                            produtos.</li>
                        <li>Desenvolvimento de protótipos.</li>
                        <li>Criação e desenvolvimento de receitas.</li>
                        <li>Fotos e vídeos de receitas.</li>
                        <li>Oficinas culinárias, aulas demonstrativas e eventos.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- banner clientes -->
    <div id="clientes" class="container">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <h1>Clientes</h1>
            </div>
        </div>
    </div>

    <div>&nbsp</div>


    <!-- logos clientes -->
    <div id="clientesCarousel" class="mb-0 carousel slide" data-ride="carousel">
        <div class="carousel-inners">
            <div class="carousel-item active">
                <img class="first-slide img-fluids"
                    src="https://cdn-images.scservicos.com.br/view/0/sc-institucional|clientes|Banner_clientes_.png"
                    alt="First slide" />
            </div>
            <div class="carousel-item">
                <img class="first-slide img-fluids"
                    src="https://cdn-images.scservicos.com.br/view/0/sc-institucional|clientes|Banner_clientes_2.png"
                    alt="First slide" />
            </div>
            <div class="carousel-item">
                <img class="first-slide img-fluids"
                    src="https://cdn-images.scservicos.com.br/view/0/sc-institucional|clientes|Banner_clientes_3.png"
                    alt="First slide" />
            </div>
            <div class="carousel-item">
                <img class="first-slide img-fluids"
                    src="https://cdn-images.scservicos.com.br/view/0/sc-institucional|clientes|Banner_clientes_4.png"
                    alt="First slide" />
            </div>
            <div class="carousel-item">
                <img class="first-slide img-fluids"
                    src="https://cdn-images.scservicos.com.br/view/0/sc-institucional|clientes|Banner_clientes_5.png"
                    alt="First slide" />
            </div>
            <div class="carousel-item">
                <img class="first-slide img-fluids"
                    src="https://cdn-images.scservicos.com.br/view/0/sc-institucional|clientes|Banner_clientes_6.png"
                    alt="First slide" />
            </div>
            <a class="carousel-control-prev" href="#clientesCarousel" role="button" data-slide="prev">
                <i class="fas fa-angle-left icones-mobile-sc" id="teste" style="color: black; font-size: 40px;"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#clientesCarousel" role="button" data-slide="next">
                <i class="fas fa-angle-right icones-mobile-sc" style="color: black; font-size: 40px;"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- banner midias sociais -->
    <section class="mt-3 py-1 bg-image-full img-fluid"
        style="background-image: url('https://cdn-images.scservicos.com.br/view/0/sc-institucional|midiassociais.png'); margin-top: 1px;">
        <div style="height: 300px;">
        </div>
    </section>

    <div>&nbsp;</div>

    <section id="contato" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <h1>Quer conhecer mais de perto o seu consumidor? Vem falar com a gente!</h1>
                </div>
            </div>
            <div>&nbsp;</div>
            <div>&nbsp;</div>

            <div class="row">
                <%--Essa classe começa escondida--%>
                <div class="col-md-6" id="incluirformulario">
                    <div class="col-lg-5 ">
                        <button type="button" class="form-control  btn btn-outline-primary" onclick="mostrar();">Novo
                            envio </button>
                    </div>
                </div>
                <div class="col-md-6 mb-2" id="formulario">
                    <form class="needs-validation" novalidate>
                        <div class="col-lg-10">
                            <label class="labels">Nome:<span class="asterisco">*</span></label>
                            <input class="form-control" id="nome" placeholder="Digite aqui seu nome" required />
                            <div class="invalid-feedback">
                                Por favor insira o nome
                            </div>
                        </div>
                        <div>&nbsp;</div>
                        <div class="col-lg-10">
                            <label class="labels">Email:<span class="asterisco">*</span></label>
                            <input class="form-control" placeholder="Digite aqui seu email" id="email" required />
                            <div class="invalid-feedback">
                                Por favor insira um email valido
                            </div>
                        </div>
                        <div>&nbsp;</div>
                        <div class="col-lg-10">
                            <label class="labels">Telefone:<span class="asterisco">*</span></label>
                            <input class="form-control" placeholder="(XX)X XXXX-XXXX" id="telefone" required />
                            <div class="invalid-feedback">
                                Por favor insira o numero de telefone
                            </div>
                        </div>
                        <div>&nbsp;</div>
                        <div class="col-lg-10">
                            <label class="labels">Empresa:<span class="asterisco">*</span></label>
                            <input class="form-control" placeholder="Digite aqui o nome da empresa" id="empresa"
                                required />
                            <div class="invalid-feedback">
                                Por favor insira o nome da empresa
                            </div>
                        </div>
                        <div>&nbsp;</div>
                        <div class="col-lg-10">
                            <label class="labels">Mensagem:<span class="asterisco">*</span></label>
                            <textarea class="form-control" rows="6" placeholder="Digite aqui seu nome" id="mensagem"
                                required></textarea>
                            <div class="invalid-feedback">
                                Por favor insira uma mensagem
                            </div>
                        </div>
                        <div>&nbsp;</div>
                        <div class="col-lg-3 ">
                            <button type="submit" class="form-control  btn btn-outline-sc"
                                onclick="Enviar();">Enviar</button>
                        </div>
                    </form>
                </div>

                <div class="col-md-5">
                    <p class="font-weight-bold">
                        Rua Alvarenga, 2147 – Butantã<br />
                        São Paulo - SP<br />
                        CEP: 05509-005<br />
                        +55 11 3095-8460

                    </p>
                    <iframe width="440" height="350" frameborder="0" style="border: 0"
                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB2ijhS1lu0hLHxA_jQYtKIA6TiPJu6F9Q &q=SC Serviços ao Consumidor"
                        allowfullscreen></iframe>
                    <div>&nbsp;</div>

                    <a href="https://www.facebook.com/scservicos/" target="_blank"><i
                            class="fab fa-3x fa-facebook-square"></i></a>
                    <a href="https://www.instagram.com/scservicos/" target="_blank"><i
                            class="fab fa-3x fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/company/sc-servicos-ao-consumidor/" target="_blank"><i
                            class="fab fa-3x fa-linkedin"></i></a>

                </div>
            </div>
        </div>
        <div>&nbsp;</div>
    </section>


    <script src="https://www.scservicos.com.br/home.js?v=2021SCV66"></script>
    <!-- // fim conteudo -->
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>

    <!-- footer -->
    <footer class="py-5 bg-dark text-white">
        <div style="height: 100px;"></div>
        <div class="container">
            <p>&copy; 2018 SC Serviços ao Consumidor.<a href="#">&nbsp;</a><a href="#">&nbsp;</a></p>
        </div>
        <!-- /.container -->
    </footer>
    <!-- // footer -->
    <div id="overlay" onclick="closeNav();"></div>

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "350px";
            document.getElementById("overlay").style.display = "block";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("overlay").style.display = "none";
        }
    </script>


</body>

</html>
