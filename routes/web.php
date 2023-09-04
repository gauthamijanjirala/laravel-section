<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomController;
use App\Http\Controllers\NewsController;


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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('master', [CustomController::class, ])->name('master');
Route::get('/', [CustomController::class,'index'])->name('news.index');
Route::get('news/create', [CustomController::class,'create'])->name('news.create');
Route::post('news/store', [CustomController::class,'store'])->name('news.store');
Route::get('news/edit/{id}',[CustomController::class,'edit'])->name('news.edit');
Route::put('news/update/{id}',[CustomController::class,'update'])->name('news.update');
Route::delete('news/delete/{id}',[CustomController::class,'destroy'])->name('news.delete');


// Route::resource('news', NewsController::class);




