<?php

use App\Http\Controllers\UserController;
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

Route::get('/form', function () {
    return view('form');
});

Route::post('/send', [UserController::class, 'send'])->name('send');
Route::get('/sukses', function () {
    return view('sukses');
});

Route::get('/get', [UserController::class, 'getID']);
// Route::get('/sukses', [UserController::class, 'closeGate']);