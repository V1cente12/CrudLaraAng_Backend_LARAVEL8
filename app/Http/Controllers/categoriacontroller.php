<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoria;

class categoriacontroller extends Controller
{
    public function getCategoria(){
        return response()->json(categoria::all(),200);
    }

    public function getCategoriabyId($id){
        $categoria = categoria::find($id);
        if(is_null($categoria)){
            return response()->json(['Mensaje' => 'Categoria ID no encontrada'],404);
        }
        return response()->json($categoria,200);
    }

    public function getCategoriabyCat_nom($cat_nom){
        $categoria = categoria::where('cat_nom', $cat_nom)->first();
        if(is_null($categoria)){
            return response()->json(['Mensaje' => 'Categoria cat_nom no encontrada'],404);
        }
        return response()->json($categoria,200);
    }
}
