<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('clear-cache', function () {
    Artisan::call('storage:link');
    Artisan::call('route:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    //Create storage link on hosting
    if (request("reset")) {
        Artisan::call('migrate:reset', ['--force' => true]);
    }
    $exitCode = Artisan::call('storage:link', []);
    echo $exitCode; // 0 exit code for no errors.
});
