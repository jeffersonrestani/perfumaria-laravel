@extends('base')

@section('content-here')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-12 col-md-8">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-4">
                    <div class="justify-content-center">
                        <div class="col-lg-12">
                            <div class="content p-1">

                                <h2>Dados Perfume</h2>
                                <hr>
                                <p><strong>Nome:</strong> {{ $brand->name }} </p>
                                <p><strong>Descrição:</strong> {{ $brand->description }} </p>
                                <a href="{{ route('brand.index') }}">Voltar</a>

                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
