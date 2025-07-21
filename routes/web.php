<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/',[PostController::class,"home"])->name("home");
Route::get('/about',[PostController::class,"about"])->name("about");
Route::get('/services',[PostController::class,"services"])->name("services");
Route::get('/contact',[PostController::class,"contact"])->name("contact");

Route::post('/instagram-contact', [PostController::class, 'submit'])->name('instagramContactSubmit');


























