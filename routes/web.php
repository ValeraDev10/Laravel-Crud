<?php

use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;



Route::get('/',[UsuariosController::class,'index'])->name('usuarios.index');

Route::get('/create',[UsuariosController::class,'create'])->name('usuarios.create');

Route::get('/edit/{id}',[UsuariosController::class,'edit'])->name('usuarios.edit');

Route::put('/update/{id}',[UsuariosController::class,'update'])->name('usuarios.update');

Route::get('/show/{id}',[UsuariosController::class,'show'])->name('usuarios.show');

Route::post('/store',[UsuariosController::class,'store'])->name('usuarios.store');

Route::delete('/destroy/{id}',[UsuariosController::class,'destroy'])->name('usuarios.destroy');

//Route::get('/', function () { 
    //return view('welcome');
//});


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
