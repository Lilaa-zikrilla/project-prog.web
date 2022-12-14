<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\BookController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\ItemController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

/* jalur akses admin */
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

/* jalur akses data user */
Route::prefix('user')->group(function(){
    Route::get('/view', [UserController::class, 'user_view'])->name('user.view');
    Route::get('/add', [UserController::class, 'user_add'])->name('user.add');
    Route::post('/query', [UserController::class, 'user_query'])->name('user.query');
    Route::get('/update/{id}', [UserController::class, 'user_update'])->name('user.update');
    Route::post('/updating/{id}', [UserController::class, 'user_updating'])->name('user.updating');
    Route::get('/delete/{id}', [UserController::class, 'user_delete'])->name('user.delete');
});

/* jalur akses data books */
Route::prefix('books')->group(function(){
    Route::get('/view', [BookController::class, 'book_view'])->name('book.view');
    Route::get('/add', [BookController::class, 'book_add'])->name('book.add');
    Route::post('/query', [BookController::class, 'book_query'])->name('book.query');
    Route::get('/update/{id}', [BookController::class, 'book_update'])->name('book.update');
    Route::post('/updating/{id}', [BookController::class, 'book_updating'])->name('book.updating');
    Route::get('/delete/{id}', [BookController::class, 'book_delete'])->name('book.delete');
});

/* jalur akses data items */
Route::prefix('items')->group(function(){
    Route::get('/view', [ItemController::class, 'item_view'])->name('item.view');
    Route::get('/add', [ItemController::class, 'item_add'])->name('item.add');
    Route::post('/query', [ItemController::class, 'item_query'])->name('item.query');
    Route::get('/update/{id}', [ItemController::class, 'item_update'])->name('item.update');
    Route::post('/updating/{id}', [ItemController::class, 'item_updating'])->name('item.updating');
    Route::get('/delete/{id}', [ItemController::class, 'item_delete'])->name('item.delete');
});

/* jalur akses profile */
Route::prefix('profile')->group(function(){
    Route::get('/view', [ProfileController::class, 'profile_view'])->name('profile.view');
});