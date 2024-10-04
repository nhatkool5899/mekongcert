<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;


// Front-end

Route::get('/', [PagesController::class, 'index']);
