@extends('demo.master.auth')
@section('title', 'Tickets')

@section('content')

    <!-- Form -->
    <div class="container content-space-3 content-space-t-lg-3 content-space-b-lg-3">
        <div class="flex-grow-1 mx-auto" style="max-width: 28rem;">
            <!-- Heading -->
            <div class="text-center mb-5 mb-md-7">
                <h1 class="h2">Faça Login no Indica-me</h1>
                <p>Sua primeira vez aqui? Crie uma conta. <a href="" class="font-size-1 ">Junte-se ao
                        Indica.me</a> </p>
            </div>
            <!-- End Heading -->

            <div class="social-login">
                <a href="javascript:void(0)" target="_blank" class="btn btn-md rounded-pill mb-3 w-100 btn-google">
                    <img src="https://preview.keenthemes.com/start-react/media/svg/social-icons/google.svg"
                        class="float-left mt-1" alt=""> Entrar com o Google
                </a>

                <a href="javascript:void(0)" target="_blank" class="btn btn-md rounded-pill mb-3 btn-twitter w-100">
                    <img src="https://i.imgur.com/sO5Y2aG.png" class="float-left " alt="">
                    Entrar com o Twitter </a>

                <a href="javascript:void(0)" target="_blank" class="btn btn-md btn-rounded mb-3 btn-fb w-100">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_facebook.png" class="float-left"
                        alt="">
                    Entrar com o Facebook </a>

            </div>
            <span class="divider-center my-2">OU</span>

            <!-- Form -->
            <form class="js-validate needs-validation" novalidate>
                <!-- Form -->
                <div class="mb-4">
                    <label class="form-label" for="signupSimpleLoginEmail">Seu email</label>
                    <input type="email" class="form-control form-control-lg" name="email" id="signupSimpleLoginEmail"
                        placeholder="email@site.com" aria-label="email@site.com" required>
                    <span class="invalid-feedback">Please enter a valid email address.</span>
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="mb-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <label class="form-label" for="signupSimpleLoginPassword">Sua senha</label>

                        <a class="form-label-link" href="./page-reset-password-simple.html">Esqueceu sua senha?</a>
                    </div>

                    <div class="input-group input-group-merge" data-hs-validation-validate-class>
                        <input type="password" class="js-toggle-password form-control form-control-lg" name="password"
                            id="signupSimpleLoginPassword" placeholder="8+ characters required"
                            aria-label="8+ characters required" required minlength="8" data-hs-toggle-password-options='{
                                 "target": "#changePassTarget",
                                 "defaultClass": "bi-eye-slash",
                                 "showClass": "bi-eye",
                                 "classChangeTarget": "#changePassIcon"
                               }'>
                        <a id="changePassTarget" class="input-group-append input-group-text" href="javascript:void(0);">
                            <i id="changePassIcon" class="bi-eye"></i>
                        </a>
                    </div>

                    <span class="invalid-feedback">Please enter a valid password.</span>
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="mb-4">
                    <input type="checkbox" class="form-check-input" id="signupHeroFormPrivacyCheckEg1"
                        name="signupFormPrivacyCheck">
                    <label class="form-check-label small" for="signupHeroFormPrivacyCheckEg1">
                        Manter conectado
                    </label>
                </div>
                <!-- Form -->
                <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-primary btn-lg rounded-pill">Entrar</button>
                </div>
            </form>
            <!-- End Form -->
        </div>
    </div>
    <!-- Form -->
@endsection
