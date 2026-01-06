<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\FeedbackController;


Route::get('/contact', [ContactController::class,'create'])->name('contact.create');
Route::post('/contact', [ContactController::class,'store'])->name('contact.store');

Route::get('/contact/result', [ContactController::class,'result'])->name('contact.result');

Route::resource('feedback', FeedbackController::class);

