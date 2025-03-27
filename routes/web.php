<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Public/Home/Home');
})->name("public.home");

Route::get('/about', function () {
    return Inertia::render('Public/About/About');
})->name("public.about");

Route::get('/werke', function () {
    return Inertia::render('Public/Werke/Werke');
})->name("public.portfolio");

Route::get('/impressum', function () {
    return Inertia::render('Public/Legal/Impressum');
})->name("public.imprint");

Route::get('/cookies', function () {
    return Inertia::render('Public/Legal/Cookies');
})->name("public.cookies");




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
