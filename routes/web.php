<?php

use App\Http\Controllers\GalleryController;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JewelryController;

Route::name('public.')->group(function () {
    Route::get('/', [HomeController::class, 'home'])->name("home");
    Route::get('/about', [HomeController::class, 'about'])->name("about");
    Route::get('/werke', [HomeController::class, 'werke'])->name("werke");
    Route::get('/impressum', [HomeController::class, 'impressum'])->name("impressum");
    Route::get('/cookies', [HomeController::class, 'cookies'])->name("cookies");
});

Route::name('dashboard.')->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {

    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('home');

    Route::resource("jewelry", JewelryController::class)->except("show");
    Route::resource("gallery", GalleryController::class)->except("show");
});
