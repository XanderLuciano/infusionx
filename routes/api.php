<?php

use Illuminate\Http\Request;

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
    $user = $request->user();
    $role = $user->roles()->pluck('name');
    //return $request->user();
    return ['data' => $user, 'role' => $role];
});

Route::get('/allusers', 'TestAPI@index');
Route::get('/userid/{id}', 'TestAPI@show');

Route::post('/create', 'TestAPI@create');

