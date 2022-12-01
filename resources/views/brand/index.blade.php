@extends('base')

@section('content-here')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-4">
                        <div class="justify-content-center">
                            <div class="col-lg-12">
                                <div class="content p-1">

                                    <h1>Lista de Marcas</h1>
                                    <br />
                                    @if (isset($brands))
                                        <table class="table table-hover table-sm">
                                            <tr align="center">
                                                <th>ID</th>
                                                <th>Nome</th>
                                                <th>Descrição</th>
                                                <th colspan="2" align="center">Ações</th>
                                            </tr>
                                            @foreach ($brands as $b)
                                                <tr align="center">
                                                    <td>{{ $b->id }} </td>
                                                    <td>{{ $b->name }} </td>
                                                    <td>{{ $b->description }}</td>
                                                    <td> <a href="{{ route('brand.show', $b->id) }}">Exibir</a> </td>
                                                    <td> <a href="{{ route('brand.edit', $b->id) }}">Editar</a> </td>
                                                </tr>
                                            @endforeach
                                        </table>
                                        {{-- creating the links to pagination --}}
                                        <div class="row">
                                             {{-- {{ $brands->links('pagination::bootstrap-5') }} --}}
                                        </div>
                                    @else
                                        <h3>Não há marcas cadastradas!</h3>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
