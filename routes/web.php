<?php

use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\frontend\HomeController;
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

Route::get('/',[HomeController::class,'index'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/add/category',[DashboardController::class,'create'])->name('add.category');
    Route::get('/add/product',[DashboardController::class,'createproduct'])->name('add.product');
    Route::post('/add/product',[DashboardController::class,'insert'])->name('insert');
    Route::get('/manage/category',[DashboardController::class,'store'])->name('manage.category');
});
