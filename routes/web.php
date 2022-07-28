<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ListController;
use Illuminate\Support\Facades\Auth;
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

//Books Routes

Route::get('/books/index', [BookController::class, 'index'])->name('books.index')->middleware('auth');
Route::get('/books/about', [BookController::class, 'about'])->name('books.about')->middleware('auth');
Route::get('/books/create{list_id}', [BookController::class, 'create'])->name('books.create')->middleware('auth');
Route::get('/books/{books}',[BookController ::class,'show'])->name('books.show')->middleware('auth');
Route::post('/books', [BookController::class, 'store'])->name('books.store')->middleware('auth');
Route::get('/books/{books}/delete',[BookController ::class,'delete'])->name('books.delete')->middleware('auth');
Route::get('/books/update/{books}',[BookController ::class,'updateView'])->name('books.update')->middleware('auth');
Route::get('/books/updates/changeValue',[BookController ::class,'makeUpdate'])->name('books.updates')->middleware('auth');

//Auth Routes
Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth')->middleware('auth');


//List Routes
Route::get('/lists', [ListController::class, 'listindex'])->name('list.booklist')->middleware('auth');
