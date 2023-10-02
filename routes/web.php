<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ConferencistaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
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
    return view('auth.login');
});


Route::get('/dashboard', function () {return view('dashboard');})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [ConferencistaController::class,'index'])->middleware(['auth', 'verified'])->name('conferencista.index');
Route::get('/conferencitas/create', [ConferencistaController::class,'create'])->middleware(['auth', 'verified'])->name('conferencista.create');
Route::get('/conferencitas/{conferencista}/edit', [ConferencistaController::class,'edit'])->middleware(['auth', 'verified'])->name('conferencista.edit');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
