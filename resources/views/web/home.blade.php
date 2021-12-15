@extends('web.master')
@section('title', 'Página Principal')

@section('content')

    <!-- tools -->
    <div class="message-toast"></div>
    <!-- end tools -->

    <!-- ABERTURA -->
    <div class="container content-space-t-3 content-space-lg-4 content-space-md-4 content-space-b-1" data-aos="fade-right">
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
                        <a class="btn btn-theme-purple btn-transition font-weight-600 slidelink me-2"
                            href="#faleconoscoSection">
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
