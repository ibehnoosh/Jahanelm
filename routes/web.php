<?php

use App\Http\Livewire\BasicInfo\BankAccountLive;
use App\Http\Livewire\BasicInfo\BankLive;
use App\Http\Livewire\BasicInfo\CategoryLive;
use App\Http\Livewire\BasicInfo\CenterLive;
use App\Http\Livewire\BasicInfo\ClassStateLive;
use App\Http\Livewire\BasicInfo\GroupLive;
use App\Http\Livewire\BasicInfo\HourLive;
use App\Http\Livewire\BasicInfo\LevelLive;
use App\Http\Livewire\BasicInfo\LocateLive;
use App\Http\Livewire\BasicInfo\TermStateLive;
use App\Http\Livewire\Users\StudentLive;
use Illuminate\Support\Facades\Artisan;
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
Route::get('/bank_account', BankAccountLive::class)->name('bankAccount');
Route::get('/center', CenterLive::class)->name('center');
Route::get('/locate', LocateLive::class)->name('locate');
Route::get('/hour', HourLive::class)->name('hour');
Route::get('/class_state', ClassStateLive::class)->name('classState');
Route::get('/term_state', TermStateLive::class)->name('termState');

Route::get('/student', StudentLive::class)->name('student');
