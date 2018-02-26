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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/', function ( Illuminate\Http\Request $request) {
    Illuminate\Support\Facades\Mail::to("nechaev.p.v.25@gmail.com")->send(new \App\Mail\ClientMail($request->name, $request->phone, $request->email, $request->text));
    return "ok";
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
