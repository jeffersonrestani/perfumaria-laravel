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


                                    <h1>Lista de Perfumes</h1>
                                    <br/>
                                    @if (isset($perfumes))
                                    <table class = "table table-hover">
                                        <tr align="center">
                                            <th>ID</th>
                                            <th>Nome</th>
                                            <th>Ano de Lançamento</th>
                                            <th>Marca</th>
                                            <th colspan="2">Ações</th>
                                        </tr>
                                        @foreach ($perfumes as $p)
                                            <tr align="center">
                                                <td>{{ $p->id }}</td>
                                                <td>{{ $p->name }}</td>
                                                <td>{{ $p->fabrication }}</td>
                                                <td>{{ $p->brand->name }}</td>
                                                <td align="center"> <a href="{{ route('perfume.show', $p->id) }}">Exibir</a> </td>
                                                <td align="center"> <a href="{{ route('perfume.edit', $p->id) }}">Editar</a> </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                    <div class="row">
                                        {{$perfumes->links('pagination::bootstrap-5')}}
                                    </div>
                                @else
                                    <h3>Não há perfumes cadastrados!</h3>
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
