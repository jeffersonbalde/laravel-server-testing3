<?php

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

Route::get('/users', function () {
    return User::all();
});

Route::get('/test-db', function () {
    try {
        DB::connection()->getPdo();
        return "DB connection successsk!";
    } catch (\Exception $e) {
        return $e->getMessage();
    }
});

