<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CaminhaoController;
use App\Http\Controllers\carrocontroller;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/',[HomeController::class,'MostrarHome'])->name('home');
Route::get('/editar-caminhao',[CaminhaoController::class,'MostrarEditarCaminhao'])->name('editar-caminhao');
Route::get('/cadastrar-caminhao',[CaminhaoController::class,'FormularioCadastro'])->name('cadastrar-caminhao');
Route::post('/cadastrar-caminhao',[CaminhaoController::class,'SalvarBanco'])->name('salvar-banco');


Route::get('/alterar-caminhao/{registrosCaminhoes}',[CaminhaoController::class,'MostrarAlterarCaminhao'])->name('alterar-caminhao');

Route::delete('/editar-caminhao/{registrosCaminhoes}',[CaminhaoController::class,'ApagarBancoCaminhao'])->name('apagar-caminhao');





Route::get('/editar-carro',[carrocontroller::class,'EditarC'])->name('editar-carro');
Route::get('/cadastrar-carro',[carrocontroller::class,'FormularioCadastroC'])->name('cadastrar-carro');
Route::post('/salvar-banco-c',[carrocontroller::class,'SalvarBancoC'])->name('salvar-banco-c');