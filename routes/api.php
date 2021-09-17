<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([

    'middleware' => 'api',
    'namespace' => 'App\Http\Controllers',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});


Route::apiResource('/employee', 'App\Http\Controllers\Api\EmployeeController');

Route::apiResource('/supplier', 'App\Http\Controllers\Api\suppliersController');

Route::apiResource('/category', 'App\Http\Controllers\Api\CategoryController');

Route::apiResource('/product', 'App\Http\Controllers\Api\ProductController');

Route::apiResource('/expanses', 'App\Http\Controllers\Api\ExpansesController');

Route::post('/strock/update/{id}', [App\Http\Controllers\Api\SalariesController::class, 'updateStrock']);

Route::post('/salary/paid/{id}', [App\Http\Controllers\Api\SalariesController::class, 'paid']);

Route::get('/salary', [App\Http\Controllers\Api\SalariesController::class, 'AllSalary']);

Route::get('/salary/view/{id}', [App\Http\Controllers\Api\SalariesController::class, 'viewSalaey']);

Route::get('/edit/salary/{id}', [App\Http\Controllers\Api\SalariesController::class, 'editSalaey']);

Route::post('/salary/update/{id}', [App\Http\Controllers\Api\SalariesController::class, 'UpdateSalaey']);

Route::get('/getting/product/{id}', [App\Http\Controllers\Api\PosController::class, 'getProducts']);

// cart route here 
Route::get('/addTocart/{id}', [App\Http\Controllers\Api\CartController::class, 'AddtoCart']);

Route::get('/cart/product/', [App\Http\Controllers\Api\CartController::class, 'CartProduct']);

Route::get('/remove/cart/{id}', [App\Http\Controllers\Api\CartController::class, 'removeCart']);

Route::get('/increment/{id}', [App\Http\Controllers\Api\CartController::class, 'Increment']);

Route::get('/decrement/{id}', [App\Http\Controllers\Api\CartController::class, 'Decrement']);

Route::get('/vats/', [App\Http\Controllers\Api\CartController::class, 'vats']);

Route::post('/orderdone/', [App\Http\Controllers\Api\PosController::class, 'orderDone']);




Route::apiResource('/customer', 'App\Http\Controllers\Api\CustomerController');
