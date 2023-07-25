<?php

use App\Http\Livewire\CategoryLive;
use App\Http\Livewire\GroupLive;
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
    return view('welcome');
});

Route::get('/category', CategoryLive::class)->name('category');
Route::get('/group', GroupLive::class)->name('group');
Route::get('/level', CategoryLive::class)->name('level');
