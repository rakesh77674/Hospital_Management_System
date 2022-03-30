<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\Indexcontroller;
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


Route::get('/',[Indexcontroller::class, 'home'])->name('/');
Route::get('/dashboard',[Indexcontroller::class, 'Adminindex'])->name('dashboard');
Route::get('admin/form',[Indexcontroller::class, 'Adminform'])->name('admin/form');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
