<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [BlogController::class, 'index'])->name('blog.index');
Route::get('/category/{type}', [BlogController::class, 'byCategory'])->name('blog.byCategory');
Route::get('/tags/{tag}', [BlogController::class, 'byTag'])->name('blog.tags');
Route::get('/post/{blog}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/search/', [BlogController::class, 'search'])->name('blog.search');
Route::get('/searcwerewwerwh/', [BlogController::class, 'search'])->name('list');
Route::get('/swerwerearch/', [BlogController::class, 'search'])->name('one');


