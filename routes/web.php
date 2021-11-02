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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/name/{name}', function ($name){
   return "<h1>سلام{$name}</h1>";
});

Route::get('/name',function (){
    return "<h1>سلام</h1>";
});

Route::get('/test/fggg', function (\Illuminate\Http\Request $request){
    return $request;

})->name("leila");

Route::get('/form', function (){
    return view('form');
});
