@extends('web.master')
@section('title', 'Página Principal')

@section('content')

    <!-- tools -->
    <div class="message-toast"></div>
    <!-- end tools -->

    <!-- ABERTURA -->
    <div id="homeSection" class="container content-space-t-3 content-space-lg-4 content-space-md-4 content-space-b-1"
        data-aos="fade-right">
        <div class="row">
            <div class="col-md-6 col-lg-6 mb-7 mb-md-0 text-lg-start text-md-start text-center">
                <!-- TEXT ABERTURA -->
                <div class="mb-5 ">
                    <span class="text-cap text-success">PENSE FORA DA CAIXA</span>
                    <h1 class="display-4 mb-3 text-white font-weight-900">Desenvolvemos Soluções que melhoram o seu
                        negócio</h1>
                    <p class="lead font-weight-900" style="font-size: 35px;">
                        <span class="text-purple">PENSE.</span>
                        <span class="text-primary">CRIE.</span>
                        <span class="text-green">APRIMORE.</span>
                    </p>
                    <div class="text-lg-start text-md-start text-center gap-3">
                        <a class="btn btn-theme-purple btn-transition font-weight-600  me-2"
                            href="./page-login-simple.html">
                            FALE CONOSCO <i class="bi-chevron-right small ms-1"></i>
                        </a>

                        <a class="video-player btn btn-white btn-transition"
                            href="https://www.youtube.com/watch?v=d4eDWc8g0e0" role="button"
                            data-fslightbox="youtube-video">
                            <i class="bi-play-circle-fill me-1"></i> <span class="d-none d-md-inline-block">SAIBA
                                MAIS</span>
                        </a>
                    </div>
                </div>
                <!-- End TEXT ABERTURA -->
            </div>
            <!-- End Col -->
            <!-- IMAGEM ABERTURA -->
            <div class="col-md-6 ">
                <div class="position-relative p-0">
                    <img class="img-fluid rounded-2"
                        src="https://lzctrl.com/_next/static/images/lzHero-806d116c1e687af68dca75834b30dbef.png"
                        alt="Image Description">
                </div>
            </div>
            <!-- END IMAGEM ABERTURA -->
            <!-- End Col -->
        </div>

    </div>
    <!-- End ABERTURA -->

    <!-- Card Grid -->
    <div id="produtosSection" class="container content-space-2 content-space-lg-2 content-space-md-2 content-space-b-2">
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
            <a class="btn btn-theme-purple btn-transition rounded-pill font-weight-900" href="" target="_blank">CONFIRA
                TODOS OS NOSSOS PROJETOS <span class="bi-chevron-right small ms-1"></span></a>
        </div>
        <!-- Card Info -->

        <!-- End Card Info -->
        <!-- End Row -->
    </div>
    <!-- End Card Grid -->

    <div id="blogSection" class="container content-space-2 content-space-lg-3 content-space-md-1 content-space-b-2">
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

    <div id="saibaMaisSection"
        class="container content-space-1 content-space-lg-1 mb-5 content-space-md-1 content-space-b-2">
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

    <!--fale conosco -->
    <div class="bg-dark" style="background-image: url(./assets/svg/components/wave-pattern-light.svg);" id="faleconoscoSection">
        <div class="container content-space-t-2 content-space-t-lg-3 content-space-b-1">
            <!-- Heading -->
            <div class="w-lg-50 text-center mx-lg-auto mb-7">
                <span class="text-cap text-white-70">Fale Conosco</span>
                <h2 class="text-white lh-base">Ficou com alguma dúvida? Precisa de ajuda, ou quer trabalhar a gente?
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
                        <form action="{{ route('web.faleconosco.store') }}" method="POST" name="form_faleconosco">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- Form -->
                                    <div class="mb-3">
                                        <label class="form-label" for="name">Nome *</label>
                                        <input type="text" class="form-control form-control-lg" name="name" id="name"
                                            placeholder="Digite seu nome" aria-label="Digite seu nome" value="Leonarrod"
                                            required>
                                    </div>
                                    <!-- End Form -->
                                </div>
                            </div>
                            <!-- End Row -->

                            <div class="mb-3">
                                <label class="form-label" for="email">E-mail *</label>
                                <input type="email" class="form-control form-control-lg" name="email" id="email"
                                    placeholder="ex. email@site.com" aria-label="email@site.com"
                                    value="leonardo.silva@sconline.com.br" required>
                            </div>
                            <!-- End Form -->

                            <!-- Form -->
                            <div class="mb-3">
                                <label class="form-label" for="companyname">Nome da Empresa<span
                                        class="form-label-secondary"> (Opcional)</span></label>
                                <input type="text" class="form-control form-control-lg" name="companyname" id="companyname"
                                    placeholder="Digite o nome da empresa" aria-label="Digite o nome da empresa"
                                    value="Teste" required>
                            </div>
                            <!-- End Form -->

                            <!-- Select -->
                            <div class="mb-3">
                                <label class="form-label" for="subject">Seu Interesse *</label>
                                <select id="subject" class="form-select form-select-lg" name="subject"
                                    aria-label="Seu Interesse" required>
                                    <option>Selecione..</option>
                                    <option value="duvida" selected>Dúvidas</option>
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
                                    placeholder="Digite sua mensagem" aria-label="Digite sua mensagem"
                                    rows="4">dasdasdasdsa</textarea>
                            </div>
                            <!-- End Form -->

                            <!-- Check -->
                            <div class="form-check mb-4">
                                <input type="checkbox" class="form-check-input" id="aceite" name="aceite"
                                    data-msg="Campo obrigatório.">
                                <label class="form-check-label" for="aceite"> Aceito compartilhar
                                    minhas informações com a <b>Unitbox</b> e estou ciente da
                                    <a href=./page-privacy.html>Política de Privacidade.</a></label>
                            </div>
                            <!-- End Check -->

                            <div class="d-grid mb-2">
                                <button type="submit"
                                    class="btn btn-theme-purple btn-lg btn-faleconosco font-weight-900">Enviar
                                    Mensagem</button>
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

                        $(button).removeClass('disabled').html(button.text());
                    })
                    .fail(function(xhr, status, error) {
                        if (xhr.status === 401 || xhr.status === 419) {
                            getapp.message(
                                "Whoops, sua sessão expirou, você será redirecionado! Por favor aguarde.",
                                "warning");
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
                                "Whoops, Estamos com problemas no momento, tente novamente mais tarxe!",
                                "");
                        }

                        $(button).removeClass('disabled').html(button.text());
                    })
                    .always(function() {});
            });
        });
    </script>

@endsection
