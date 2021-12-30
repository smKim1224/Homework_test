<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Modles\Post;
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

Route::get('/', [PostController::class, 'list'])->name('list');

Route::get('/create', [PostController::class, 'create'])->name('create');

Route::post('/', [PostController::class, 'store']);

//Route::get('/show/{post}', [PostController::class, 'show'])->name('show');


Route::resource('/show', PostController::class);
