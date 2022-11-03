<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('evento.index');
})->middleware("auth");

Auth::routes();

//Route::get('/', [\App\Http\Controllers\LoginController::class,'index'])->name('site.login');
//Route::get('/evento', [App\Http\Controllers\EventoController::class, 'index'])->name('evento.index');
Route::get('/login{erro?}', [\App\Http\Controllers\LoginController::class,'index'])->name('site.login');
Route::post('/login', [\App\Http\Controllers\LoginController::class,'autenticar'])->name('site.login');
Route::get('/eventopresenca', [\App\Http\Controllers\PresencaController::class,'index'])->name('site.presenca');
Route::post('/eventopresenca', [\App\Http\Controllers\PresencaController::class,'index'])->name('site.presenca');
Route::get('/eventopresenca/editar/{id}', [\App\Http\Controllers\PresencaController::class,'edit'])->name('presenca.edit');
Route::get('/eventopresenca/mostrar/', [\App\Http\Controllers\PresencaController::class,'mostrar'])->name('presenca.mostrar');
Route::post('/eventopresenca/mostrar/', [\App\Http\Controllers\PresencaController::class,'mostrar'])->name('presenca.mostrar');
//Route::get('/eventopresenca/adicionar/', [\App\Http\Controllers\PresencaController::class,'store'])->name('presenca.adicionar');
//Route::post('/eventopresenca/adicionar/', [\App\Http\Controllers\PresencaController::class,'store'])->name('presenca.adicionar');
Route::get('/eventopresenca/adicionar/', [\App\Http\Controllers\PresencaController::class,'adicionar'])->name('presenca.adicionar');
Route::post('/eventopresenca/adicionar/', [\App\Http\Controllers\PresencaController::class,'adicionar'])->name('presenca.adicionar');

Route::middleware(['auth'])->group(function () {
    Route::get('/evento', [App\Http\Controllers\EventoController::class, 'index'])->name('evento.index');
    Route::post('/evento/mostrar', [App\Http\Controllers\EventoController::class, 'show']);
    Route::post('/evento/adicionar', [App\Http\Controllers\EventoController::class, 'store']);
    Route::post('/evento/editar/{id}', [App\Http\Controllers\EventoController::class, 'edit']);
    Route::post('/evento/atualizar/{evento}', [App\Http\Controllers\EventoController::class, 'update']);
    Route::post('/evento/excluir/{id}', [App\Http\Controllers\EventoController::class, 'destroy']);
    

});

//admin

Route::prefix('/admin')->group(function(){
    Route::get('/homologacao', [App\Http\Controllers\HomologacaoController::class,'index'])->middleware("auth");
    Route::get('/relatoriopresenca', function() { return 'Relatorio presenca';})->middleware("auth");
    Route::get('/relatorioevento', [App\Http\Controllers\RelatorioController::class,'index'])->middleware("auth");

});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
