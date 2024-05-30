<?php

use App\Http\Controllers\DcComicController;
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

Route::get('/', function () {
    return view('home');
});

// DC-Comic CRUD
// index
Route::get('/dc_comics', [DcComicController::class, 'index'])->name('dc_comics.index');

Route::get('/dc_comics/create', [DcComicController::class, 'create'])->name('dc_comics.create');

Route::get('/dc_comics/{comic}', [DcComicController::class, 'show'])->name('dc_comics.show');

Route::post('/dc_comics', [DcComicController::class, 'store'])->name('dc_comics.store');

Route::get('/dc_comics/{comic}/edit', [DcComicController::class, 'edit'])->name('dc_comics.edit');
