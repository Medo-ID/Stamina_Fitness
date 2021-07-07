<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('apps/todo/tasks', 'ToDoController@index');
Route::get('apps/todo/tasks/{id}', 'ToDoController@show');
Route::post('apps/todo/tasks', 'ToDoController@store');
Route::put('apps/todo/tasks/{id}', 'ToDoController@update');
Route::delete('apps/todo/tasks/{id}', 'ToDoController@delete');
