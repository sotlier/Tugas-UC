<?php

use App\Http\Controllers\CertificatesController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/education', EducationController::class)->name('education');
Route::get('/certificates', CertificatesController::class)->name('certificates');
Route::post('/contact', [ContactMessageController::class, 'store'])->name('contact.store');
