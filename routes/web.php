<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\ColaboradorController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\DashboardController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [DashboardController::class, 'index'])->name('welcome');

//Ruta para registro de usuario
Route::get('/login',[LoginController::class,'index'])->name("login.index");
Route::post('/login',[LoginController::class,'store'])->name("login.store");


Route::get('/formularioCliente',[ClientesController::class,'formularioCliente'])->name("cliente.formulario");

Route::post('/cliente',[ClientesController::class,'store'])->name("clientes.store");

Route::get('/cliente',[ClientesController::class,'index'])->name("clientes.index");

//
Route::post('/logout',[LoginController::class,'logout'])->name("logout");


Route::get('/register',[RegisterController::class,'index'])->name("register.index");
Route::post('/register',[RegisterController::class,'store'])->name("register.store");

Route::get('/formularioColaborador', [ColaboradorController::class, 'formularioColaborador'])->name("colaborador.formulario");
Route::post('/colaborador', [ColaboradorController::class, 'store'])->name("colaborador.store");
Route::get('/colaborador', [ColaboradorController::class, 'index'])->name("colaborador.index");

Route::get('/formularioProyecto', [ProyectoController::class, 'formularioProyecto'])->name("proyecto.formulario");
Route::post('/proyecto', [ProyectoController::class, 'store'])->name("proyecto.store");
Route::get('/proyecto', [ProyectoController::class, 'index'])->name("proyecto.index");


Route::post('/imagenes', [ImageController::class, 'store'])->name('imagenes.store');
