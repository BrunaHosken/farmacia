<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Compra;
use Illuminate\Support\Facades\DB;


class CompraController extends Controller
{
public function index(){

$compra = DB::table('compra')
->join('cliente', 'cliente_id', '=', 'cliente.id')
->join('medicamento', 'medicamento_cod', '=', 'medicamento.cod')
->select('compra.*', 'cliente.*', 'medicamento.*')
->paginate(5);
return view('compra', ['compra' => $compra]);
}
}
