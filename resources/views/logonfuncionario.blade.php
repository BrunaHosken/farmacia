@extends('principal')
@section('conteudo')
<div class="divCenter">
    <h1>Login Funcionário</h1>
    <form action="login">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome">
        <br>
        @error('nome')
        <span style="color:red">
        {{$message}}
        </span>
        @enderror
        <label for="senha">Senha: </label>
        <input type="text" name="senha" id="senha">
        @error('senha')
        <span style="color:red">
        {{$message}}
        </span>
        @enderror
        <input type="submit" value="Enviar">
    </form>
    <div class="links text-center">
        <a href="funcionarioIndex">Voltar</a>
        
    </div>
</div>
@endsection

