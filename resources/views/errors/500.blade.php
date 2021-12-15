@extends('errors::minimal')

@section('title', __('Server Error'))
@section('code', '500')
@section('message')
    <div class="container content-space-t-3 content-space-lg-4 content-space-md-4 content-space-b-1">
        <!-- ========== MAIN CONTENT ========== -->

        <!-- Content -->
        <div class="container text-center">
            <div class="mb-3">
                <h1 class="display-1">500</h1>
            </div>

            <div class="mb-4">
                <p class="fs-4 mb-0 text-white">Whoops! No momento estamos com problemas para efetuar essa requisição, por favor tente novamente 
                    mais tarde! Obrigado.
                </p>
            </div>
            <a class="btn btn-theme-purple " href="{{ route('web.home') }}">VOLTAR PARA HOME</a>
        </div>
        <!-- End Content -->
    </div>
@endsection
