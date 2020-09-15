<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GreetingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', [SiteController::class, 'index'])->name('index');

Route::get('about',[SiteController::class,'about'])->name('about');

Route::get('users/{user}/categories',[CategoryController::class,'index'])
    ->name('categories.index');

Route::get('categories/create',[CategoryController::class,'create'])
    ->name('categories.create');

Route::post('categories',[CategoryController::class,'store'])
    ->name('categories.store');

Route::get('categories/{category}',[CategoryController::class,'show'])
    ->name('categories.show');
