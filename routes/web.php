<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing', [
        "title" => "Soco - Beauty Community"
    ]);
})->name("landing");

Route::get('/login', function () {
    return view('auth/login', [
        "title" => "Login | Soco - Beauty Community"
    ]);
})->name("login");

Route::get('/sign-up', function () {
    return view('auth/sign-up', [
        "title" => "Sign Up | Soco - Beauty Community"
    ]);
})->name("sign-up");

// -=- USER =========================================================================
Route::get('/home', function () {
    return view('user/home', [
        "title" => "Home | Soco - Beauty Community"
    ]);
})->name("home");

Route::get('/skincares', function () {
    return view('user/Skincares', [
        "title" => "Skincares | Soco - Beauty Community"
    ]);
})->name("skincares");

Route::get('/profile', function () {
    return view('user/profile', [
        "title" => "Profile | Soco - Beauty Community"
    ]);
})->name("profile");
Route::get('/profile/edit', function () {
    return view('user/edit-profile', [
        "title" => "Edit Profile | Soco - Beauty Community"
    ]);
})->name("edit-profile");

Route::get('/reviews/{id}', function ($id) {
    return view('user/detail-review', [
        "title" => "Detail Review | Soco - Beauty Community",
        "id" => $id
    ]);
})->name("detail-review");

