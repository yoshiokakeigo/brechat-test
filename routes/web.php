<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
use App\Http\Controllers\Work\HomeController;
use App\Http\Controllers\Work\UserController;
use App\Http\Controllers\Work\RoomController;
use App\Http\Controllers\Work\MessageController;

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
Route::get('/',TopController::class)->name('top');
Route::middleware('auth')->group(function () {
  Route::get('/home',HomeController::class)->name('home');
  Route::get('/user/show/{id}',[UserController::class,'show'])->name('user.show');
  Route::get('/user/edit/{id}',[UserController::class,'edit'])->name('user.edit');
  Route::put('/user/update/{id}',[UserController::class,'update'])->name('user.update');
  Route::get('/room/create',[RoomController::class,'create'])->name('room.create');
  Route::post('/room/store',[RoomController::class,'store'])->name('room.store');
  Route::get('/room/show/{id}',[RoomController::class,'show'])->name('room.show');
  Route::post('/room/message/store',[MessageController::class,'store']);
  Route::get('/room/message/show/{id}',[MessageController::class,'show']);
});
Route::get('/room/message/index',[MessageController::class,'index'])->name('room.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
