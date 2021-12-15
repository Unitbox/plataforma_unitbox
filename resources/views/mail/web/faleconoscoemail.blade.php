@component('mail::message')

<h2>Olá, você recebeu uma nova mensagem do site.</h2>

<p>Devido a nova lei de proteção de dados, os dados do interessado(a) estarão disponíveis apenas no portal. Clique no link abaixo para acessar.</p>

@component('mail::button', ['url' => url('login'), 'color' => 'success'])
Acessar portal 
@endcomponent

Enviado por Mail Box.<br>
@endcomponent


