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

Route::get('/healthyfood/soyprotein', [App\Http\Controllers\HealthyFoodController::class, 'soyprotein']);
Route::get('/common/privacypolicy', [App\Http\Controllers\CommonController::class, 'privacypolicy']);
