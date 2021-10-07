<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Medicamento;

class MedicamentoController extends Controller
{
    public function create(){ 
       
        return view('novomedicamento');
    } 
    public function altera(){ 
       
        return view('alterarmedicamentos');
    } 
    public function exclui(){ 
       
        return view('excluirmedicamentos');
    } 

    public function salvamedicamento(Request $request){
        $request->validate([
            'nome'=>'required | min:3 | max:255'
        ]);

        $m_nome = $request->input('nome');
        DB::insert('insert into medicamento (m_nome) values (?)', array($m_nome)); 
        return view('tarefa');
        
        }

        public function index()
    {
        $medicamento = DB::table('medicamento')->paginate(5);
        return view('medicamento',['medicamento'=>$medicamento]);

    }

    public function alterarmedicamento(Request $request){
        $nome = $request->input('nome');
        $novonome = $request->input('novonome');
        $request->validate([
            'nome'=>'required | min:3 | max:255',
            'novonome'=>'required | min:3 | max:255'
        ]);
        DB::table('medicamento')
        ->where('m_nome', $nome)
        ->update(['m_nome' => $novonome]);
        return view('tarefa');

}

public function excluirmedicamento(Request $request){
    $nome = $request->input('nome');
    $request->validate([
        'nome'=>'required | min:3 | max:255'
    ]);
    DB::table('medicamento')->where('m_nome', $nome)->delete();
    return view('tarefa');
    }
}

