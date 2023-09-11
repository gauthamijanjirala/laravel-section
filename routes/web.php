<?php

// use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;


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
Route::post('news/imageDelete/{id}',[CustomController::class,'imageDelete']);
Route::get('news/{id}/show',[CustomController::class,'show'])->name('news.show');



// Route::resource('news', NewsController::class);

//  Contact controller
Route::get('contact', [ContactController::class,'index'])->name('contact.index');
Route::get('contact/create', [ContactController::class,'create'])->name('contact.create');
Route::post('contact/store', [ContactController::class,'store'])->name('contact.store');
Route::get('contact/edit/{id}',[ContactController::class,'edit'])->name('contact.edit');
Route::put('contact/update/{id}',[ContactController::class,'update'])->name('contact.update');
Route::delete('contact/delete/{id}',[ContactController::class,'destroy'])->name('contact.delete');
Route::get('contact/{id}/show',[ContactController::class,'show'])->name('contact.show');


// About Controller
Route::get('about', [Aboutcontroller::class,'index'])->name('about.index');
Route::get('about/create', [Aboutcontroller::class,'create'])->name('about.create');
Route::post('about/store', [Aboutcontroller::class,'store'])->name('about.store');
Route::get('about/edit/{id}',[Aboutcontroller::class,'edit'])->name('about.edit');
Route::put('about/update/{id}',[Aboutcontroller::class,'update'])->name('about.update');
Route::delete('about/delete/{id}',[Aboutcontroller::class,'destroy'])->name('about.delete');
Route::get('about/{id}/show',[Aboutcontroller::class,'show'])->name('about.show');










