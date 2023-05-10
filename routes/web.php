<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EntityController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//this is mine
Route::get('user/entities/create', [EntityController::class, 'create'])->name('user.create')->middleware('auth');
Route::post('user/entities', [EntityController::class, 'store'])->middleware('auth');
Route::get('user/entities/home', [EntityController::class, 'index'])->name('user.index')->middleware('auth');
Route::get('user/entities/{entity}/edit', [EntityController::class, 'edit'])->name('user.update')->middleware('auth');
Route::patch('user/entities/{entity}', [EntityController::class, 'update'])->middleware('auth');
Route::delete('user/entities/{entity}', [EntityController::class, 'destroy'])->name('user.destroy')->middleware('auth');

require __DIR__.'/auth.php';
