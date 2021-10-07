<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\UsuarioFuncionario;

class UsuarioFuncionarioController extends Controller
{

    public function create(){
        return view('novofuncionario');
    } 

    public function salvafuncionario(Request $request){
        $nome = $request->input('nome');
        $senha = $request->input('senha');
        $request->validate([
            'nome'=>'required | min:3 | max:255',
            'senha'=>'required | min:3 | max:255'
        ]);
        DB::insert('insert into users (nome,password) values (?,md5(?))', array($nome,$senha)); 
        return view('funcionariosalvo');
        
        }
       
    }

