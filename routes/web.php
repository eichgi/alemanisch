<?php

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

use Illuminate\Http\Request;

Route::redirect('/', 'http://alemanisch.xyz', 301);

Route::get('/webhook', function (Request $request) {
    Log::debug($request);
    return response()->json('OK', 200);
});
