<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Routing\Router;

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

Route::get('/', HomeController::class);
/*

Route::get('users', 'UserController@index');

Route::get('users/create', [UserController::class,'create']);

Route::get('users/{id}', [UserController::class,'show']);

 */

 Route::controller(UserController::class)->group(function(){
   //  Route::get('users', 'index')->name('cursos.index');

   //  Route::get('users/create', 'create')->name('cursos.create');

   //  Route::get('users/{id}', 'show')->name('cursos.show');


    Route::get('users', 'index')->name('users.index');

    Route::get('users/create', 'create')->name('users.create');

    Route::post('users', 'store')->name('users.store');

    Route::get('users/{id}', 'show')->name('users.show');
 });
