<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::redirect('/','/dashboard');
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


Route::get('/home',[BlogController::class,'home'])->name('home');
Route::get('/blog',[BlogController::class,'blog'])->name('blog');
Route::get('/services',[BlogController::class,'services'])->name('services');
Route::get('/about',[BlogController::class,'about'])->name('about');
Route::get('/contact',[BlogController::class,'contact'])->name('contact');



require __DIR__.'/auth.php';
