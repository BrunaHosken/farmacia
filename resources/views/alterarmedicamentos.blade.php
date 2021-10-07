@extends('principal')
@section('conteudo')
<div class="divCenter">
    <h1>Alterar Medicamento</h1>
    <form action="alterarmedicamento">
        <label for="nome">De: </label>
        <input type="text" name="nome" id="nome">
        <br>
        <label for="novonome">Para: </label>
        <input type="text" name="novonome" id="novonome">
        @error('nome')
        <span style="color:red">
        {{$message}}
        </span>
        @enderror
        @error('novonome')
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