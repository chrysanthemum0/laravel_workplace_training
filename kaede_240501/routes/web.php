<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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

// Route::get('/', function () {    return view('welcome');});
Route::get('/', [BookController::class, 'index']); //톱으로 인덱스메소드를 움직임
//Route::get('/books/{id}', [BookController::class, 'show']); //
Route::resource('books', BookController::class);
