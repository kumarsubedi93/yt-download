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
    return view('index');
})->name('home');

Route::get('/privacy-policy', function() {
    return view('privacy-policy');
})->name('privacy-policy');

Route::post('download', function() {
    $imageContent = file_get_contents(request()->get('file-url'));
    return Response::make($imageContent, 200, [
        'Content-Type' => 'image/jpeg',
    ]);
})->name('download');