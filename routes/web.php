<?php

use Illuminate\Support\Facades\Route;
//以下追加
use App\Http\Controllers\TodoController;
use App\Http\Controllers\Todo2Controller;

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

// Route::get('/', [TodoController::class, 'index']);
// Route::prefix('todo')->group(function () {
//   Route::post('create', [TodoController::class,'create']);
//   Route::post('update', [TodoController::class,'update']);
//   Route::post('delete', [TodoController::class,'delete']);
//   Route::post('delete', [TodoController::class,'delete']);
// });

//リソースルート
Route::resource('/', Todo2Controller::class)->only([
  'index', 'store', 'update', 'destroy'
]);