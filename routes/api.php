<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\galeria;
use Illuminate\Support\Facades\Storage;
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

Route::post('/borrarimagen', function (Request $request) {
    $data=$request->all();
    $galeria=galeria::where('id',$data['id'])->get();
    // Eliminar el archivo
    $galeria[0]->imagen=str_replace("//",'/',$galeria[0]->imagen);

if (Storage::delete(($galeria[0]->imagen))) {
    $borrado= "Archivo eliminado correctamente.";
} else {
    $borrado= "Error al eliminar el archivo.";
}
    $respuesta=galeria::where('id',$data['id'])->delete();

    return response()->json(['imagen'=>$galeria,'respuesta'=>$respuesta,'borrado'=>$borrado],200);
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
