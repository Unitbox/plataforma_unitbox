<!-- Cookie Alert -->
<div class="container position-fixed bottom-0 start-0 end-0 zi-3 notification_cookie" style="display: none;">
    <div class="alert alert-white w-lg-75 shadow-sm mx-auto " role="alert">
        <h5 class="text-dark">Este website utiliza cookies</h5>
        <p class="small">
            A Unitbox utiliza cookies para personalizar e aprimorar a experiência, além de fornecer funcionalidades de redes sociais e analisar o nosso tráfego.
            Você poderá consentir o uso de tais tecnologias ao usar o botão <strong>“Aceitar”</strong>. 
            <a href="{{ route('web.privacidade') }}">Clique aqui</a> para saber mais.</p>
            
        <div class="row align-items-sm-center ">
            <div class="col-sm-8 mb-3 mb-sm-0 cookies_checkbox">
                <div class="form-check form-check-inline">
                    <input class="form-check-input " type="checkbox" id="funcional" name="funcional" value="funcional" checked
                        disabled>
                    <label class="form-check-label small" for="funcional">Estritamente necessário</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="otimizacao" name="otimizacao" value="otimizacao">
                    <label class="form-check-label small" for="otimizacao">Otimização da experiência</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="estatistica" name="estatistica" value="estatistica">
                    <label class="form-check-label small" for="estatistica">Estatísticas</label>
                </div>
            </div>
            <!-- End Col -->

            <div class="col-sm-4 text-sm-end">  
                <button type="button" class="btn btn-theme-purple btn-transition font-weight-900 btn_cookie" data-bs-dismiss="alert"
                    aria-label="Close">ACEITAR!</button>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->
    </div>
</div>
<!-- End Cookie Alert -->
