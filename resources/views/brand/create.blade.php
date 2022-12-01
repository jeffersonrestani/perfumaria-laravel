@extends('dashboard')

@section('content-here')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-12 col-md-8">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-4">
                    <div class="justify-content-center">
                        <div class="col-lg-12">
                            <div class="content p-1">

                                <h2>Cadastrar Marca</h2>
                                <hr>
                                <form method="POST" action="{{ route('brand.store') }}">
                                    {{-- protection against cross-site request forgering --}}
                                    @csrf

                                    <div class="form-group">
                                        <label for="name">Nome: </label>
                                        <input type="text" name="name" id="name" class="form-control" required value="{{old('name')}}">
                                        @error('name')
                                            <div style="color:red">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <br/>

                                    <div class="form-group">
                                        <label for="description">Descrição: </label>
                                        <input type="text" name="description" id="description" class="form-control" required value="{{old('description')}}">
                                        @error('description')
                                            <div style="color:red">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <br/>

                                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Salvar">
                                    <input type="reset" class="btn btn-primary btn-user btn-block" value="Limpar">
                                </form>

                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
