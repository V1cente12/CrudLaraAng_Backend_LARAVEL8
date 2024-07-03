<?php

use App\Models\categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('categoria','App\Http\Controllers\categoriacontroller@getCategoria');

Route::get('categoriaid/{id}','App\Http\Controllers\categoriacontroller@getCategoriabyId');

Route::get('categoriacat_nom/{cat_nom}','App\Http\Controllers\categoriacontroller@getCategoriabyCat_nom');

Route::post('addCategoria','App\Http\Controllers\categoriacontroller@insterCategoria');

Route::put('updateCategoria/{id}','App\Http\Controllers\categoriacontroller@updateCategoria');

Route::delete  ('deleteCategoriabyid/{id}','App\Http\Controllers\categoriacontroller@deleteCategoria');