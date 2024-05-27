<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\gemyiaController;

Route::get('/', function () {
    return view('app');
});
Route::get('/chat', function () {
    return view('chat');
});
Route::post('/image', [gemyiaController::class , 'inputImage']);
