<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;


// Front-end

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/gioi-thieu', [PagesController::class, 'about'])->name('about');
Route::get('/dich-vu', [PagesController::class, 'services'])->name('services');
Route::get('/tin-tuc', [PagesController::class, 'news'])->name('news');
Route::get('/lien-he', [PagesController::class, 'contact'])->name('contact');
