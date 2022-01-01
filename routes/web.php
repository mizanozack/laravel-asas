<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;

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

//Route::get('/', [TodoListController::class, 'index'] );


Route::get('/jadual', [TodoListController::class, 'jadual'] );


Route::get('/', [TodoListController::class, 'index'] );


Route::post('/saveItemRoute',[TodoListController::class, 'saveitem'])->name ('saveitem');
   
Route::post('/markCompleteRoute/{id}',[TodoListController::class, 'markComplete'])->name ('markComplete');

Route::delete('jadual/{id}','TodoListController@delete');





