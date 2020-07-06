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

Route::get('/', function () {
    return view('welcome');
});

/*La ruta se pone de esa manera ya que hace referencia al método
index del archivo app/http/EmpleadosController.php

Route::get('/empleados', 'EmpleadosController@index');
Route::get('/empleados/create', 'EmpleadosController@create');
Route::get('/empleados/edit', 'EmpleadosController@index'); */

Route::resource('empleados', 'EmpleadosController');
