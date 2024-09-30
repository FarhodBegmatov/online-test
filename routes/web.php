<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Auth::routes();
Route::post('/store', [UserController::class, 'store'])->name('store');
Route::get('/test', [QuestionController::class, 'index'])->name('test');
Route::post('/result_store', [ResultController::class, 'store'])->name('result_store');
Route::get('/results', [ResultController::class, 'index'])->name('results');
Route::get('/results/{group}', [ResultController::class, 'getByGroup'])->name('getByGroup');