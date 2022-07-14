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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/task1', [App\Http\Controllers\TaskController::class, 'task1'])->name('task1');
Route::get('/task2', [App\Http\Controllers\TaskController::class, 'task2'])->name('task2');
Route::get('/task3', [App\Http\Controllers\TaskController::class, 'task3'])->name('task3');
