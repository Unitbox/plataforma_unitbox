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


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



    <!--[if lt IE 9]>
      <script src="https://cdn.scservicos.com.br/js/html5shiv.js"></script>
      <script src="https://cdn.scservicos.com.br/js/respond.min.js"></script>
    <![endif]-->


    <link rel="stylesheet" type="text/css" href="https://cdn.wpcc.io/lib/1.0.2/cookieconsent.min.css" />
    <script src="https://cdn.wpcc.io/lib/1.0.2/cookieconsent.min.js" defer></script>___scripts_6___
    <style type="text/css">
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
        .carousel-item {
            height: 32rem;
        }

        .carousel-item>img {
            position: absolute;
            top: 0;
            left: 0;
            min-width: 100%;
            height: 32rem;
        }


        /* RESPONSIVE CSS

        @media (min-width: 40em) {

            /* Bump up size of carousel content */
        .carousel-caption p {
            margin-bottom: 1.25rem;
            font-size: 1.25rem;
            line-height: 1.4;
        }

        .featurette-heading {
            font-size: 50px;
        }
        }

        @media (min-width: 62em) {
            .featurette-heading {
                margin-top: 7rem;
            }
        }

    </style>

    <style>
        h1,
        h3,
        h4 {
            font-family: 'Neucha', cursive;
            /* font-size: 35px; */
            color: #F15B22;
        }


        .text-banner {
            z-index: 9999;
            position: absolute;
            right: 10%;
            bottom: 0rem;
            left: 10%;
            padding-top: 1rem;
            padding-bottom: 0.20rem;
            color: #fff;
            text-align: center;
        }

        .text-orange {
            color: #F15B22;
        }

        a {
            color: #F15B22;
            text-decoration: underline;
        }

        a:hover {
            color: #f15b229e;
        }

        .active {
            color: #F15B22 !important;
            font-weight: 600 !important
        }

        .btn-sc {
            background-color: #f36531ca;
            color: white;
            border-bottom: solid 5px #f36631 !important;
        }

        .btn-sc:hover {
            background-color: #f36531ef;
            color: white;
            border-bottom: solid 5px #f36531 !important;
            border-color: 0 0 0 0.2rem #f3653152;
        }

        .bg-gradient-orange {
            background-color: #f36531ef;
        }

        #carousel-sc-banner .carousel-item {
            height: 30rem !important;
        }


        #CarouselClientes .carousel-item>img {
            position: absolute;
            top: 30%;
            left: 0;
            min-width: 100%;

        }

        #CarouselClientes .carousel-item {
            height: 25rem !important;
        }


        .bg-image-full {
            background: no-repeat center center scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover;
        }

        .asterisco {
            color: #ff6301;
        }


        @media screen and (max-width: 600px) {

            .label-sc {
                padding-bottom: 0rem !important;
                font-size: 16px !important;
            }

            #CarouselClientes .carousel-item>img {
                position: absolute;
                top: 20%;
                left: 0;
            }

            #CarouselClientes .carousel-item {
                height: 12rem !important;
            }
        }

        /*
        Privacidade e termos de uso
        */
        .text-content p,
        .text-content li {
            --bs-text-opacity: 1;
            color: rgba(255, 255, 255, .7) !important;
        }

         /*
        Privacidade e termos de uso
        */

    </style>
</head>

<body>


    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TKSRHG8" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="message-toast"></div>
    <!-- navbar-->
    <header class="container">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white">
            <div class="container py-0">
                <a class="navbar-brand py-0" href="home.aspx">
                    <img src="https://cdn-images.scservicos.com.br/view/0/solomon%7Csc%7Clogo.png" class=""
                        style="width: 4rem;" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse" style="margin-left: auto;">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="font-size: 18px;letter-spacing: 1.0px">
                        <li class="nav-item active">
                            <a class="nav-link active" aria-current="page"
                                href="#sobre">Sobre</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" aria-current="page"
                                href="#sobre">Serviços</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" aria-current="page"
                                href="#clientes">Clientes</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" aria-current="page" 
                                href="https://medium.com/scservicos" target="_blank">Acontece aqui</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " aria-current="page" target="_blank"
                                href="https://medium.com/curtas-sc">Curtas</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" aria-current="page" target="_blank"
                                href="https://solomon.scservicos.com.br">Entrar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- navbar-->

    <!-- Carousel -->
    <div id="carousel-sc-banner" class="carousel slide mb-0" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://cdn-images.scservicos.com.br/view/0/sc-institucional|banners|Banners_ST_analiseatendimento.jpg"
                    alt="">
                <div class="h4 text-banner label-sc">
                    Atendimento especializado, logística e análise de
                    amostra de consumidor
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://cdn-images.scservicos.com.br/view/0/sc-institucional%7Cbanners%7CBanners_ST_escuta.jpg"
                    alt="">
                <div class="h4 text-banner label-sc">
                    Escuta ativa com consumidores
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://cdn-images.scservicos.com.br/view/0/sc-institucional%7Cbanners%7CBanners_ST_estrategia.jpg"
                    alt="">
                <div class="h4 text-banner label-sc">
                    Estratégia de conteúdo e mídia digital
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://cdn-images.scservicos.com.br/view/0/sc-institucional|banners|Banners_ST_receitas.jpg"
                    alt="">
                <div class="h4 text-banner label-sc">
                    Desenvolvimento, fotos e vídeos de
                        receitas
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://cdn-images.scservicos.com.br/view/0/sc-institucional%7Cbanners%7CBanners_ST_sacgestao.jpg"
                    alt="">
                <div class="h4 text-banner label-sc">
                    SAC 2.0, CRM digital, gestão e monitoramento de
                    redes sociais
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel-sc-banner" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Voltar</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel-sc-banner" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
        </button>
    </div>
    <!-- Fim Carousel -->

    <!-- sobre -->
    <section id="sobre" class="py-5 bg-light ">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-lg-start text-center">Sobre</h1>
                    <p class="mt-4" style="font-size: 20px">SC – Serviços ao Consumidor é uma agência
                        especializada em comunicação e relacionamento um a um.
                        No mercado há mais de 25 anos, nasceu para a era do diálogo, abrindo canais de comunicação e
                        criando estruturas para que “a voz do consumidor seja ouvida”. Está ao lado das grandes
                        empresas, acompanhando a transformação nas relações de consumo, nesse universo rico em
                        oportunidades para aqueles que se dispõem a ouvir, entender e falar com seu público.
                    </p>

                    <div class="text-lg-start text-center mb-4">
                        <a href="https://www.facebook.com/scservicos/" target="_blank" class="text-orange pe-2 "><i
                                class="fab fa-3x fa-facebook-square"></i></a>
                        <a href="https://www.instagram.com/scservicos/" target="_blank" class="text-orange pe-2"><i
                                class="fab fa-3x fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/company/sc-servicos-ao-consumidor/" target="_blank"
                            class="text-orange"><i class="fab fa-3x fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <div>&nbsp;</div>
                    <img class="img-fluid"
                        src="https://cdn-images.scservicos.com.br/view/0/sc-institucional|sobre.png" alt="Sobre a SC" />
                    <div>&nbsp;</div>
                </div>
            </div>
        </div>
    </section>

    <!-- servicos -->
    <section id="servicos" class="py-5">
        <div class="container">
            <h1 class="text-center mb-5">Serviços</h1>
            <div class="row ml-3" style="font-size: 17px">
                <div class="col-md-4 mb-2">
                    <h3 class="text-lg-start text-center">Atendimento ao Consumidor</h3>
                    <div>&nbsp;</div>
                    <ul class="ps-lg-3">
                        <li>Acolhida personalizada e identificação imediata do consumidor.</li>
                        <li>Equipes especializadas com formação em nutrição.</li>
                        <li>Identificação de segmentos e relatórios estratégicos de escuta de consumidor.</li>
                        <li>Gestão de crises e de problemas emergentes.</li>
                        <li>Coleta e tratamento de amostras do consumidor, com avaliação das ocorrências e análise das
                            situações de consumo.</li>
                    </ul>
                </div>
                <div class="col-md-4 mb-2">
                    <h3 class="text-lg-start text-center">Redes Sociais</h3>
                    <div>&nbsp;</div>
                    <ul class="ps-lg-3">
                        <li>Monitoramento de produtos, marcas e consumidores.</li>
                        <li>Estratégia para mídias digitais.</li>
                        <li>Gestão de redes sociais e criação de pautas a partir da escuta do consumidor.</li>
                        <li>Criação de conteúdos multimídia para relacionamento com consumidor e divulgação da marca.
                        </li>
                        <li>SAC 2.0 e CRM digital: interação em redes sociais.</li>
                    </ul>
                </div>
                <div class="col-md-4 mb-2">
                    <h3 class="text-lg-start text-center">Cozinha Experimental</h3>
                    <div>&nbsp;</div>
                    <ul class="ps-lg-3">
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
    <!-- fim Serviços -->

    <!-- banner clientes -->
    <div id="clientes" class="container-fluid mb-0 pb-0">
        <h1 class="text-center mb-0 pb-0">Clientes</h1>
        <div id="CarouselClientes" class="carousel slide mb-0 pb-0" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://cdn-images.scservicos.com.br/view/0/sc-institucional|clientes|Banner_clientes_.png"
                        alt="" style="width:100%; height: 40%">

                </div>
                <div class="carousel-item">
                    <img src="https://cdn-images.scservicos.com.br/view/0/sc-institucional|clientes|Banner_clientes_2.png"
                        alt="" style="width:100%; height: 40%">

                </div>
                <div class="carousel-item">
                    <img src="https://cdn-images.scservicos.com.br/view/0/sc-institucional|clientes|Banner_clientes_3.png"
                        style="width:100%; height: 40%" alt="">
                </div>
                <div class="carousel-item">
                    <img src="https://cdn-images.scservicos.com.br/view/0/sc-institucional|clientes|Banner_clientes_4.png"
                        style="width:100%; height: 40%" alt="">
                </div>
                <div class="carousel-item">
                    <img src="https://cdn-images.scservicos.com.br/view/0/sc-institucional|clientes|Banner_clientes_5.png"
                        style="width:100%; height: 40%" alt="">
                </div>
                <div class="carousel-item">
                    <img src="https://cdn-images.scservicos.com.br/view/0/sc-institucional|clientes|Banner_clientes_6.png"
                        style="width:100%; height: 40%" alt="">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#CarouselClientes" data-bs-slide="prev">
                <i class="fas fa-angle-left icones-mobile-sc" id="teste" style="color: black; font-size: 40px;"></i>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#CarouselClientes" data-bs-slide="next">
                <i class="fas fa-angle-right icones-mobile-sc" style="color: black; font-size: 40px;"></i>
                <span class="sr-only">Next</span>
            </button>
        </div>
    </div>
    <!-- fim banner clientes -->

    <!-- banner midias sociais -->
    <div class="img-fluid mt-0 pt-0 bg-image-full"
        style="background-image: url('https://cdn-images.scservicos.com.br/view/0/sc-institucional|midiassociais.png'); margin-top: 1px; object-fit: cover !important;">
        <div style="height: 280px !important; object-fit: cover !important;">
        </div>
    </div>
    <!-- banner midias sociais -->

    <!-- formulario de contato -->
    <div id="contatos" class="py-5">
        <div class="container">
            <h1 class="text-center mb-5">Quer conhecer mais de perto o seu consumidor? Vem falar com a gente!</h1>

            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 mb-2 " id="formulario">
                    <form class="needs-validation" method="POST" name="form_faleconosco">
                        <div class="col-lg-10">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nome <span
                                        class="asterisco">*</span></label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Digite aqui seu nome" required>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email <span
                                        class="asterisco">*</span></label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Digite aqui seu email" required>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="mb-3">
                                <label for="telefone" class="form-label">Telefone <span
                                        class="asterisco">*</span></label>
                                <input type="text" class="form-control" id="telefone" name="telefone"
                                    placeholder="(XX)X XXXX-XXXX" required>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="mb-3">
                                <label for="telefone" class="form-label">Empresa <span
                                        class="asterisco">*</span></label>
                                <input type="text" class="form-control" id="empresa" name="empresa"
                                    placeholder="Digite aqui o nome da empresa">
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="mb-3">
                                <label for="mensagem" class="form-label">Mensagem:<span
                                        class="asterisco">*</span></label>
                                <textarea class="form-control" id="mensagem" name="mensagem" rows="6"
                                    required></textarea>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="form-check mb-4">
                                <input type="checkbox" class="form-check-input" id="aceite" name="aceite"
                                    data-msg="Campo obrigatório." required="" aria-required="true">
                                <label class="form-check-label" for="aceite"> Aceito compartilhar
                                    minhas informações com a <b>SC Serviços ao Consumidor</b> e estou ciente da
                                    <a href="./page-privacy.html">Política de Privacidade.</a></label>
                            </div>
                        </div>
                        <div class="col-lg-12 ">
                            <button type="submit" class="btn btn-sc btn-faleconosco">Enviar Mensagem</button>
                        </div>
                    </form>
                </div>

                <div class="col-md-6">
                    <p class="font-weight-bold">
                        Rua Alvarenga, 2147 – Butantã<br />
                        São Paulo - SP<br />
                        CEP: 05509-005<br />
                        <a href="tel:113095-8460">+55 11 3095-8460</a>
                    </p>

                    <div>

                    </div>
                    <iframe width="100%" height="60%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB2ijhS1lu0hLHxA_jQYtKIA6TiPJu6F9Q &q=SC Serviços ao Consumidor"
                        allowfullscreen></iframe>


                    <div>&nbsp;</div>

                    <div class="text-lg-start text-center mb-4">
                        <a href="https://www.facebook.com/scservicos/" target="_blank" class="text-orange pe-2 "><i
                                class="fab fa-3x fa-facebook-square"></i></a>
                        <a href="https://www.instagram.com/scservicos/" target="_blank" class="text-orange pe-2"><i
                                class="fab fa-3x fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/company/sc-servicos-ao-consumidor/" target="_blank"
                            class="text-orange"><i class="fab fa-3x fa-linkedin"></i></a>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- fim formulario de contato -->

    <footer id="footer" class="bg-gradient-orange text-white mt-5">
        <div class="container py-5">
            <div class="row pb-5">
                <div class="col-lg-4 col-12">
                    <a class="navbar-brand text-white post" href="https://www.scservicos.com.br">
                        <img src="https://cdn-images.scservicos.com.br/view/0/solomon%7Csc%7Clogo.png"
                            style="width: 4rem; display: block" alt="">
                        SC <strong>Serviços ao Consumidor</strong>
                    </a>
                    <small class="d-block mb-3 text-white font-weight-light">© 2022</small>
                </div>
                <div class="col-lg-4 col-12">
                    <h5>Contato</h5>
                    <ul class="list-unstyled text-small">
                        <li class="mb-1" style="font-weight: 200">contato@scservicos.com.br</li>
                        <li class="mb-1">
                            <a class="text-white text-decoration-none" href="https://www.instagram.com/scservicos/"
                                target="_blank"><i class="fab fa-2x fa-instagram mr-2" aria-hidden="true"></i></a>
                            &nbsp;
                            <a class="text-white text-decoration-none" href="https://www.facebook.com/scservicos/"
                                target="_blank"><i class="fab fa-2x fa-facebook-square mr-2"
                                    aria-hidden="true"></i></a>
                            &nbsp;
                            <a class="text-white text-decoration-none"
                                href="https://www.linkedin.com/company/sc-servicos-ao-consumidor/" target="_blank"><i
                                    class="fab fa-2x fa-linkedin mr-2" aria-hidden="true"></i></a>
                        </li>

                    </ul>
                </div>
                <div class="col-lg-4 col-12">
                    <h5>Políticas</h5>
                    <ul class="list-unstyled text-small">
                        <li class="mb-1"><a class="post text-white text-decoration-none"
                                href="">Privacidade</a></li>
                        <li class="mb-1"><a class="post text-white text-decoration-none" href="">Termos</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row made-by">
                <div class="col-md-12 text-center text-white small">
                    <hr>
                    <span>Made with <i class="fas fa-heart text-white" aria-hidden="true"></i> by <a target="_blank"
                            class="text-decoration-underline text-white" href="https://www.scservicos.com.br">SC
                            Serviços</a></span>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.scservicos.com.br/js/jquery.3.3.1.min.js?v.01"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.scservicos.com.br/js/bootstrap-notify.min.js?v.01"></script>
    <script>
        $(function() {


            $("li.nav-item .nav-link, .slidelink").click(function(e) {
                e.preventDefault();

                $('.navbar-nav .nav-item a.active').removeClass('active');

                $(this).addClass('active');
                var url = $(this).attr("href");

                var hash = url.substring(url.indexOf("#") + 1);
                window.location.href = url;

                $('.navbar-collapse').collapse('hide');
            });

            $('form[name="form_faleconosco"]').submit(function(e) {
                e.preventDefault();

                const form = $(this);
                const action = form.attr('action');
                const form_data = $(this).serialize();

                var button = $(".btn-faleconosco");

                button.addClass('disabled')
                    .html(
                        '<span class="spinner-border spinner-border-sm " role="status" aria-hidden="true"></span> ' +
                        button.text());


                $.notify({
                    message: 'Email enviado com sucesso!'
                }, {
                    type: 'success',
                    z_index: 99999,
                });


                $(button).removeClass('disabled').html(button.text());

                // $.post(action, form_data, 'json')
                //     .done(function(response) {

                //         short.message(response.status, response.subject, response.message);

                //         $(button).removeClass('disabled').html(button.text());

                //         $(form).trigger("reset");
                //     })
                //     .fail(function(xhr, status, error) {
                //         if (xhr.status === 401 || xhr.status === 419) {
                //             short.message('warning',
                //                 "Whoops, sua sessão expirou, você será redirecionado! Por favor aguarde.",
                //                 "");
                //             setTimeout(function() {
                //                 window.location.reload();
                //             }, 2000);
                //             return false;
                //         }
                //         if (xhr.status === 422) {
                //             var errors = xhr.responseJSON;

                //             var errorsHtml = "";
                //             $.each(errors, function(key, value) {
                //                 if ($.isPlainObject(value)) {
                //                     $.each(value, function(key, value) {
                //                         errorsHtml += "* " + value + "</br>";
                //                     });
                //                 }
                //             });
                //             short.message("danger", "Whoops, Mensagem não enviada!", errorsHtml);
                //         } else {
                //             short.message("danger",
                //                 "Whoops, Estamos com problemas no momento, tente novamente mais tarde!",
                //                 "");
                //         }

                //         $(button).removeClass('disabled').html(button.text());
                //     })
                //     .always(function() {
                //         recaptcha();
                //     });
            });
        });
    </script>

</body>

</html>
