@extends('errors::illustrated-layout')

@section('title', __('Página não encontrada'))
{{-- @section('code', '404') --}}


@section('message')
    <div class="container content-space-t-3 content-space-lg-4 content-space-md-4 content-space-b-1">
        <!-- ========== MAIN CONTENT ========== -->

        <!-- Content -->
        <div class="container text-center">
            <div class="mb-3">
                <h1 class="display-1">404</h1>
            </div>

            <div class="mb-4">
                <p class="fs-4 mb-0 text-white">Whoops! Parece que o link que você entrou não está mais disponível..</p>
            </div>
            <a class="btn btn-theme-purple " href="{{ route('web.home') }}">VOLTAR PARA HOME</a>
        </div>
        <!-- End Content -->
    </div>
@endsection
{{-- @section('message', __('Página não encontrada')) --}}
