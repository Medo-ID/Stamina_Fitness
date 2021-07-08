<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'auth'], function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);

    Route::group(['middleware' => 'auth:sanctum'], function() {
      Route::get('logout', [AuthController::class, 'logout']);
      Route::get('user', [AuthController::class, 'user']);
    });
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('apps/todo/tasks', 'ToDoController@index');
Route::get('apps/todo/tasks/{id}', 'ToDoController@show');
Route::post('apps/todo/tasks', 'ToDoController@store');
Route::put('apps/todo/tasks/{id}', 'ToDoController@update');
Route::delete('apps/todo/tasks/{id}', 'ToDoController@delete');

/* Programs */
Route::get('programs', 'ProgramController@index');
Route::get('programs/{program}', 'ProgramController@show');
Route::post('programs', 'ProgramController@store');
Route::put('programs/{program}', 'ProgramController@update');
Route::delete('programs/{program}', 'ProgramController@delete');
