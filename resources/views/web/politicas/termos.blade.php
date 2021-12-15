@extends('web.master')
@section('title', 'Termos de Uso')
@section('content')

@section('css')

    <style>
        .text-content p,
        .text-content li {
            --bs-text-opacity: 1;
            color: rgba(255, 255, 255, .7) !important;
        }

    </style>
@endsection


<div class="container content-space-3 content-space-lg-4">
    <!-- Card -->
    <div class="card card-lg bg-dark">
        <!-- Header -->
        <div class="card-header bg-dark">
            <h1 class="text-success font-weight-900">
                Termos de Uso
            </h1>
            <p class="card-text text-white">Última modificação: 15 de dezembro de 2021</p>
        </div>
        <!-- End Header -->

        <!-- Card Body -->
        <div class="card-body">
            <div class="text-content">
                <ul class="list-group list-group-flush">
                    <h2 class="blog-title mb-3">1. Termos</h2>
                    <p>Ao acessar ao site <a href="{{ route('web.home') }}">Unitbox</a>, você concorda em cumprir
                        estes
                        termos de serviço, todas as leis e regulamentos aplicáveis ​​e concorda que é responsável pelo
                        cumprimento de todas as leis locais aplicáveis. Se você não concordar com algum desses termos,
                        está proibido de usar ou acessar este site. Os materiais contidos neste site são protegidos
                        pelas leis de direitos autorais e marcas comerciais aplicáveis.</p> <br>
                    <h2 class="blog-title mb-3">2. Uso de Licença</h2>
                    <p>É concedida permissão para baixar temporariamente uma cópia dos materiais (informações ou
                        software) no site Unitbox , apenas para visualização transitória pessoal e não comercial.
                        Esta é a concessão de uma licença, não uma transferência de título e, sob esta licença, você não
                        pode:&nbsp;</p>
                    <ul class="list-group list-group-flush ul-blog">
                        <li class="list-group-item bg-dark">1. modificar ou copiar os materiais;&nbsp; </li>
                        <li class="list-group-item bg-dark">2. usar os materiais para qualquer finalidade comercial ou
                            para
                            exibição pública (comercial ou
                            não comercial);&nbsp; </li>
                        <li class="list-group-item bg-dark">3. tentar descompilar ou fazer engenharia reversa de
                            qualquer
                            software contido no site Unitbox;&nbsp; </li>
                        <li class="list-group-item bg-dark">4. remover quaisquer direitos autorais ou outras notações de
                            propriedade dos materiais;
                        </li>
                        <li class="list-group-item bg-dark">5. transferir os materiais para outra pessoa ou 'espelhar'
                            os
                            materiais em qualquer outro
                            servidor.</li>
                    </ul> <br>
                    <p>Esta licença será automaticamente rescindida se você violar alguma dessas restrições e poderá ser
                        rescindida por Unitbox a qualquer momento. Ao encerrar a visualização desses materiais ou
                        após o término desta licença, você deve apagar todos os materiais baixados em sua posse, seja em
                        formato eletrónico ou impresso.</p> <br>
                    <h2 class="blog-title mb-3">3. Isenção de responsabilidade</h2>
                    <ul class="list-group list-group-flush ul-blog">
                        <li class="list-group-item bg-dark">1. Os materiais no site da Unitbox são fornecidos 'como
                            estão'. Unitbox não oferece
                            garantias, expressas ou implícitas, e, por este meio, isenta e nega todas as outras
                            garantias, incluindo, sem limitação, garantias implícitas ou condições de comercialização,
                            adequação a um fim específico ou não violação de propriedade intelectual ou outra violação
                            de direitos. </li>
                        <li class="list-group-item bg-dark">2. Além disso, o Unitbox não garante ou faz qualquer
                            representação relativa à precisão,
                            aos resultados prováveis ​​ou à confiabilidade do uso dos materiais em seu site ou de outra
                            forma relacionado a esses materiais ou em sites vinculados a este site.</li>
                    </ul> <br>
                    <h2 class="blog-title mb-3">4. Limitações</h2>
                    <p>Em nenhum caso o Unitbox ou seus fornecedores serão responsáveis ​​por quaisquer danos
                        (incluindo, sem limitação, danos por perda de dados ou lucro ou devido a interrupção dos
                        negócios) decorrentes do uso ou da incapacidade de usar os materiais em Unitbox, mesmo que
                        Unitbox ou um representante autorizado da Unitbox tenha sido notificado oralmente ou
                        por escrito da possibilidade de tais danos. Como algumas jurisdições não permitem limitações em
                        garantias implícitas, ou limitações de responsabilidade por danos conseqüentes ou incidentais,
                        essas limitações podem não se aplicar a você.</p> <br>
                    <h2>5. Precisão dos materiais</h2>
                    <p>Os materiais exibidos no site da Unitbox podem incluir erros técnicos, tipográficos ou
                        fotográficos. Unitbox não garante que qualquer material em seu site seja preciso, completo
                        ou atual. Unitbox pode fazer alterações nos materiais contidos em seu site a qualquer
                        momento, sem aviso prévio. No entanto, Unitbox não se compromete a atualizar os materiais.
                    </p> <br>
                </ul>
                <h2 class="blog-title mb-3">6. Links</h2>
                <p>O Unitbox não analisou todos os sites vinculados ao seu site e não é responsável pelo
                    conteúdo de nenhum site vinculado. A inclusão de qualquer link não implica endosso por Unitbox
                <p></p> <br>
                <h3>Modificações</h3>
                <p>O Unitbox pode revisar estes termos de serviço do site a qualquer momento, sem aviso
                    prévio. Ao usar este site, você concorda em ficar vinculado à versão atual desses termos de
                    serviço.</p>
                <h3>Lei aplicável</h3>
                <p>Estes termos e condições são regidos e interpretados de acordo com as leis do Unitbox e
                    você se submete irrevogavelmente à jurisdição exclusiva dos tribunais naquele estado ou
                    localidade.</p> <br>
                <p>
                    Se tiver dúvidas sobre este termo, você pode nos contatar no e-mail <a
                        href="mailto:contato@unitbox.com.br">contato@unitbox.com.br</a>.
                </p>

                <li class="list-group-item bg-dark">1. modificar ou copiar os materiais;&nbsp; </li>
                <li class="list-group-item bg-dark">2. usar os materiais para qualquer finalidade comercial ou para
                    exibição
                    pública
                    (comercial ou
                    não comercial);&nbsp; </li>
                <li class="list-group-item bg-dark">3. tentar descompilar ou fazer engenharia reversa de qualquer
                    software
                    contido
                    no site Unitbox;&nbsp; </li>
                <li class="list-group-item bg-dark">4. remover quaisquer direitos autorais ou outras notações de
                    propriedade
                    dos
                    materiais;
                </li>
                <li class="list-group-item bg-dark">5. transferir os materiais para outra pessoa ou 'espelhar' os
                    materiais
                    em
                    qualquer outro
                    servidor.</li>
                </ul> <br>
                <p>
                    Se tiver dúvidas sobre este termo, você pode nos contatar no e-mail <a
                        href="mailto:contato@unitbox.com.br">contato@unitbox.com.br</a>.
                </p>
            </div>
        </div>
    </div>
    <!-- End Card Body -->
</div>
<!-- End Card -->
</div>

@endsection
