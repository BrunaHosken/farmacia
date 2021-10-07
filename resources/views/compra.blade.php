@extends('principal')
@section('conteudo')
    <div class="jumbotron text-center">
        <h1>Relatório de Compras</h1>
    </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                   <th>Código Cliente</th>
                   <th>Código Medicamento</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($compra as $compras )
                <tr>
                    <td>{{$compras->nome}}</td>
                    <td>{{$compras->m_nome}}</td>
                </tr>

                @endforeach

            
            </tbody>
        </table>
        <div>
            {{$compra->links()}}
        </div>
    </div>
    <div class="links text-center">
        <a href="funcionario">Voltar</a>
    </div>
@endsection