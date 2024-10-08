<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EncomendaController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\SugestaoController;



Route::get('/', function () {
    return view ('welcome');
});


//pesquisa/buscar



//ENCOMENDA
Route::post('/encomenda/search', [EncomendaController::class,"search"])->name('encomenda.search');
Route::get('/encomenda/chart',[EncomendaController::class, "chart"])-> name ("encomenda.chart");
Route::get('/encomenda/report/',[EncomendaController::class, "report"])->name('encomenda.report');
Route::resource('encomenda', EncomendaController::class);


//RESERVA

Route::post('/reserva/search', [ReservaController::class,"search"])->name('reserva.search');
Route::get('/reserva/chart',[ReservaController::class, "chart"])-> name ("reserva.chart");
Route::get('/reserva/report/',[ReservaController::class, "report"])->name('reserva.report');
Route::resource('reserva', ReservaController::class);

Route::resource('categoria_reserva', CategoriaReservaController::class);
Route::post('/categoria_reserva/search', [CategoriaReservaController::class,"search"])->name('categoria_reserva.search');

//SUGESTAO
Route::resource('sugestao', SugestaoController::class);
Route::post('/sugestao/search', [SugestaoController::class,"search"])->name('sugestao.search');


//INICIO
Route::resource('inicio', InicioController::class);
Route::post('/inicio/search', [InicioController::class,"search"])->name('inicio.search');


