<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoria;

class categoriacontroller extends Controller
{
    //metodo get
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
        $categoria = categoria::where('cat_nom', $cat_nom)->get();
        if($categoria->isEmpty()){
            return response()->json(['Mensaje' => 'Categoria cat_nom no encontrada'],404);
        }
        return response()->json($categoria,200);
    }

    //metodo post
    public function insterCategoria(Request $request){
        $categoria = categoria::create($request->all());
        return response($categoria,200);
    } 

    //metodo put
    public function updateCategoria(Request $request, $id){
        $categoria = categoria::find($id);
        if(is_null($categoria)){
            return response()->json(['Mensaje' => 'Categoria ID no encontrada'],404);
        }
        $categoria->update($request->all());
        return response($categoria,200);
    }
    
    //metodo delete
    public function deleteCategoria($id){
        $categoria = categoria::find($id);
        if(is_null($categoria)){
            return response()->json(['Mensaje' => 'Categoria ID no encontrada'],404);
        }
        $categoria->delete();
        return response()->json(['mensaje'=>'se elimino el registro'],200);
    }

}
