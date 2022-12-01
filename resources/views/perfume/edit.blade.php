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

                                    <h2>Cadastrar Perfume</h2>
                                    <hr>
                                    <form method="POST" action="{{ route('perfume.update', $perfume->id) }}">
                                        @csrf
                                        @method('PUT')

                                        <div class="form-group">
                                            <label for="name">Nome</label>
                                            <input type="text" name="name" id="name" class="form-control"
                                                value="{{ old('name') ? old('name') : $perfume->name }}">
                                            @error('name')
                                                <div style="color:red">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="fabrication">Ano de Fabricação:</label>
                                            <input type="text" name="fabrication" id="fabrication" class="form-control"  maxlength="4"
                                                value="{{ old('fabrication') ? old('fabrication') : $perfume->fabrication }}">
                                            @error('fabrication')
                                                <div style="color:red">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <select name="brand" id="brand" class="form-control">
                                                @if ($brands)
                                                    @foreach ($brands as $brand)
                                                        <option {{ $perfume->brand_id == $brand->id ? 'selected' : '' }}
                                                            value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>

                                        <input type="submit" class="btn btn-primary btn-user btn-block" value="Salvar">
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
