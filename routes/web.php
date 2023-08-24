<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('product')->group(function () {
    Route::get('/', [ProductController::class, 'index']);
    Route::get('create', [ProductController::class, 'create']);
    Route::get('{product}', [ProductController::class, 'show']);
    Route::get('{product}/edit', [ProductController::class, 'edit']);
    Route::post('create', [ProductController::class, 'store']);
    Route::put('{product}/edit', [ProductController::class, 'update']);
    Route::delete('{product}', [ProductController::class, 'destroy']);
});
