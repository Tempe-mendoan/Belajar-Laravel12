<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\HtmlController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\AnggotaController;


Route::get('/hello', function () {
    return view('hello_world');
});

Route::get('/biodata', function () {
    return view('biodata');
});

Route::get('/', function () {
    return view('biodata');
});

Route::get('helloworld',[HelloWorldController::class, 'index']);
Route::get('ambilfile',[HelloWorldController::class, 'ambilFile']);
Route::get('getlorem',[HtmlController::class,'getLorem']);
Route::get('tabel',[LatihanController::class,'getTabel']);
Route::get('form',[LatihanController::class,'getForm']);
Route::resource('anggota', AnggotaController::class);
