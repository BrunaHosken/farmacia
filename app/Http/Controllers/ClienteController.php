<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $cliente = DB::table('cliente')->paginate(5);
        return view('cliente',['cliente'=>$cliente]);

    }

    public function create(){
        return view('novocliente');
    } 

    public function salvacliente(Request $request){
        $request->validate([
            'nome'=>'required | min:3 | max:255'
        ]);

        $nome = $request->input('nome');
        DB::insert('insert into cliente (nome) values (?)', array($nome)); 
        return view('salvo');
        
        }
}
