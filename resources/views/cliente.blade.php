@extends('principal')
@section('conteudo')
    <div class="jumbotron text-center">
        <h1>Relatório de Clientes</h1>
    </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cliente as $clientes )
                <tr>
                    <td>{{$clientes->id}}</td>
                    <td>{{$clientes->nome}}</td>
                </tr>

                @endforeach
            </tbody>
        </table>
        <div>
        {{$cliente->links()}}
    </div>
    </div>
    <div class="links text-center">
        <a href="funcionario">Voltar</a>
    </div>
@endsection
