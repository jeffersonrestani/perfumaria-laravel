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
                                                <th></th>
                                            </tr>
                                            @foreach ($brands as $b)
                                                <tr align="center">
                                                    <td>{{ $b->id }} </td>
                                                    <td>{{ $b->name }} </td>
                                                    <td>{{ $b->description }}</td>
                                                    <td> <a class="btn btn-info" href="{{ route('brand.show', $b->id) }}">Exibir</a> </td>
                                                    <td> <a class="btn btn-warning" href="{{ route('brand.edit', $b->id) }}">Editar</a> </td>
                                                    <td>
                                                        <form action="{{ route('brand.destroy', $b->id) }}" method="post">

                                                            @csrf
                                                            @method('DELETE')
                                                            <input class="btn btn-danger" type="submit" value="Excluir">
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </table>
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
