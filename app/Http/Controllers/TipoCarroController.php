<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoCarro;
class TipoCarroController extends Controller
{
    
    public function index(){
    	$datos=TipoCarro::all();
    	return view('adminlte::tipoCarro', compact('datos'));
    }

	public function dele($id){
		$tipo=TipoCarro::find($id);
		$tipo->delete();
		return redirect()->action('TipoCarroController@index');
	}
	public function editar($id){
		$tipos=TipoCarro::find($id);
	
		return view('adminlte::editar', compact('tipos'));
	}
    public function update(Request $request, $id){
		
		$tipos=TipoCarro::find($id);
		$tipos->tipo=$request->tipo;
		$tipos->save();
		return redirect()->action('TipoCarroController@index');
	}

    public function guardar(Request $request){
    	$tipo= new TipoCarro();
    	$tipo->tipo=$request->tipo;
    	$tipo->save();
		return redirect()->action('TipoCarroController@index');
		
    }

}
