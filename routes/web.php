<?php

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

Route::redirect('/', '/todo');
Route::redirect('/dashboard', '/todo');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('/deleted', 'deleted')->name('deleted');
    Route::view('/todo', 'todo')->name('todo');
});

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
