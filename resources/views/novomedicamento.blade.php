@extends('principal')
@section('conteudo')
<div class="divCenter">
    <h1>Novo Medicamento</h1>
    <form action="salvamedicamento">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome">
        @error('nome')
        <span style="color:red">
        {{$message}}
        </span>
        @enderror
        <input type="submit" value="Enviar">
    </form>
    <div class="links text-center">
        <a href="opcaomedicamentos">Voltar</a>
        
    </div>
</div>
@endsection