<?php

use App\Http\Livewire\BankLive;
use App\Http\Livewire\CategoryLive;
use App\Http\Livewire\CenterLive;
use App\Http\Livewire\GroupLive;
use App\Http\Livewire\LevelLive;
use App\Http\Livewire\LocateLive;
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
Route::get('/level', LevelLive::class)->name('level');
Route::get('/bank', BankLive::class)->name('bank');
Route::get('/center', CenterLive::class)->name('center');
Route::get('/locate', LocateLive::class)->name('locate');
