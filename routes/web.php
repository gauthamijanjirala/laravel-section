<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomController;


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
// Route::get('master', [CustomController::class, 'index'])->name('master');
Route::get('news', [CustomController::class, 'index'])->name('auth.news');
Route::get('news/create', [CustomController::class,'create'])->name('news.create');
Route::post('news/store', [CustomController::class,'store'])->name('news.store');



