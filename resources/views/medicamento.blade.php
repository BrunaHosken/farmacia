@extends('principal')
@section('conteudo')
    <div class="jumbotron text-center">
        <h1>Relatório de Medicamentos</h1>
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
                @foreach ($medicamento as $medicamentos )
                <tr>
                    <td>{{$medicamentos->cod}}</td>
                    <td>{{$medicamentos->m_nome}}</td>
                </tr>

                @endforeach
            </tbody>
        </table>
        <div>
            {{$medicamento->links()}}
        </div>
    </div>
    <div class="links text-center">
        <a href="opcaomedicamentos">Voltar</a>
    </div>
@endsection
