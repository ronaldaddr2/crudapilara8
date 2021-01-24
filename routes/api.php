<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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

//Route::get('apiget','ApitestController@index');
//Route::resource('/crud', ApitestController::class);

Route::get('/crud', [ApitestController::class, 'index']);
Route::get('/crud/{user_id}', [ApitestController::class, 'find']);
Route::post('/crud/', [ApitestController::class, 'store']);
Route::put('/crud/', [ApitestController::class, 'update']);
Route::delete('/crud/{user_id}', [ApitestController::class, 'destroy']);


