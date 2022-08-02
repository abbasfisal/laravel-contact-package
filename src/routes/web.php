<?php


use Abbasfisal\Contact\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/contact', [ContactController::class, 'index'])
     ->name('contact-form');


Route::post('/sotre', [ContactController::class, 'store'])
     ->name('contact');

