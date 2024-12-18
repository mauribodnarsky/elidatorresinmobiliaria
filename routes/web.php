<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropiedadController;
use App\Models\Propiedad;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::post('propiedades/crear', [PropiedadController::class, 'create'])->middleware(['auth'])->name('propiedades.create');

Route::get('/propiedades/{propiedad_id}', [PropiedadController::class, 'show'])->name('propiedades.show');
Route::get('/propiedades/{propiedad_id}/edit', [PropiedadController::class, 'edit'])->name('propiedades.edit');
Route::post('/propiedades/editar', [PropiedadController::class, 'editar'])->name('propiedades.editar');

Route::get('/', function () {
    $propiedades = Propiedad::all(); // Obtiene todas las propiedades

    return view('welcome',['propiedades'=>$propiedades]);
});
Route::get('filtrar/{operacion}/{tipo}', function ($operacion,$tipo) {
    $operacion=strtoupper($operacion);
    $tipo=strtoupper($tipo);
    $propiedades = Propiedad::where('tipo', $tipo)->where('operacion', $operacion)->with('galerias')->get();
    return view('welcome',['propiedades'=>$propiedades,'tipo'=>$tipo,'operacion'=>$operacion]);
});

Route::get('/dashboard', function () {
    $propiedades = Propiedad::all(); // Obtiene todas las propiedades

        return view('dashboard',['propiedades'=>$propiedades]);})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
