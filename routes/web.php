<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;

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

/*
Route::get('/uploadform', function () {
    return view('uploadform');
});
*/

Route::get('uploadform', [ ImageController::class, 'index' ])->name('image.upload');
Route::post('uploadform', [ ImageController::class, 'store' ])->name('image.upload.post');
