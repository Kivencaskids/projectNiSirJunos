<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\deliverControll;
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

Route::get('/getdelivery', [deliverControll::class,'woods']);
Route::post('/adddelivery', [deliverControll::class,'store']);
Route::post('/updatedelivery', [deliverControll::class,'update']);
Route::post('/deletedelivery', [deliverControll::class,'deleteWood']);