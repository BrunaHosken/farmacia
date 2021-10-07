@extends('principal')
@section('conteudo')
<div class="divCenter">
    <h1>Novo Cliente</h1>
    <form action="salvacliente">
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
        <a href="inicio">Voltar</a>
        
    </div>
</div>
@endsection