<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChamadosController;
use App\Http\Controllers\ChamadosAdminController;
use App\Http\Controllers\AuthController;
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

//rotas usuario
Route::get('/', [ChamadosController::class, 'index'])->name('index');
Route::post('/salvar', [ChamadosController::class, 'store'])->name('store');

//rotas admin
Route::prefix('admin')->group(function () {
    Route::get('/chamados', [ChamadosAdminController::class, 'chamados'])->name('admin.chamados');
    Route::get('/usuarios', [ChamadosAdminController::class, 'usuarios'])->name('admin.usuarios');
    Route::post('/usuarios/cadastrar', [ChamadosAdminController::class, 'cadastrar'])->name('admin.usuarios.cadastrar');
});

//rotas login
Route::prefix('login')->group(function() {
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::post('/do', [AuthController::class, 'do'])->name('login.do');
    Route::get('/logout', [AuthController::class, 'logout'])->name('login.logout');
});
