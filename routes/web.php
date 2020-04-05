<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', ['uses'=> 'Controller@paginaInicial']);
Route::get('/contato', ['uses' => 'Controller@contato']);
Route::get('/empresa',['uses' => 'Controller@empresa']);
Route::get('/servicos',['uses'=>'Controller@servicos']);