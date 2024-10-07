<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;


// Front-end

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/gioi-thieu', [PagesController::class, 'about'])->name('about');
Route::get('/dich-vu', [PagesController::class, 'services'])->name('services');
Route::get('/dich-vu-thu-nghiem', [PagesController::class, 'service_details'])->name('service_details');
Route::get('/tin-tuc', [PagesController::class, 'news'])->name('news');
Route::get('/chi-tiet-tin-tuc', [PagesController::class, 'news_details'])->name('news_details');
Route::get('/hoi-dap', [PagesController::class, 'question_client'])->name('question_client');
Route::get('/lien-he', [PagesController::class, 'contact'])->name('contact');
