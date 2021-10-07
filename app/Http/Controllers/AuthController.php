<?php namespace App\Http\Controllers;

use Auth;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Users;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller {

    public function authenticate(Request $request)
    {
        $nome = $request->input('nome');
        $password = $request->input('senha');
        $request->validate([
            'nome'=>'required | min:3 | max:255',
            'senha'=>'required | min:3 | max:255',
        ]);


        $funcionario = DB::table('users')
        ->select('nome')
        ->where('nome',$nome)
        ->where('password',md5($password))->first();

       if($cliente=$nome){
           echo('Olá '.$nome.' !');
           return view('funcionario');
        }else{
            echo('Não existe funcionário com esse usuário. <br/>Cadastre um novo usuário!');
            return view('logonFuncionario');
        }
    }

    public function getSair()
    {
        Auth::logout();
        return view('inicio');
    }

}//SELECT * from users where nome ='ana' and password=md5('1234')
//$compra = DB::table('compra')
//->join('cliente', 'cliente_id', '=', 'cliente.id')
//->join('medicamento', 'medicamento_cod', '=', 'medicamento.cod')
//->select('compra.*', 'cliente.*', 'medicamento.*')
//->paginate(5);