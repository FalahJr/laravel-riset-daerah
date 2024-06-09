<?php

use App\Http\Controllers\PenelitianController;
use App\Http\Controllers\RisetController;
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

Route::get('/riset', [RisetController::class, 'getListRiset']);
Route::get('/usulan-penelitian', [PenelitianController::class, 'getListPenelitian']);
