<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

Route::get('/', [WebsiteController::class, 'home']);
Route::get('/home', [WebsiteController::class, 'home']);
Route::get('/our_story', [WebsiteController::class, 'our_story']);
Route::get('/contact_us', [WebsiteController::class, 'contact_us']);