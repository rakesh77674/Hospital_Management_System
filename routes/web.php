<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\Indexcontroller;
use App\http\Controllers\CreateController;
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
Route::post('/getcity',[Indexcontroller::class, 'getcity'])->name('/getcity');
Route::post('/Create',[CreateController::class, 'Create'])->name('/Create');
Route::get('admin/show',[CreateController::class, 'Show'])->name('admin/show');
Route::get('Add',[Indexcontroller::class, 'Add'])->name('Add');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
