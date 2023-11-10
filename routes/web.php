<?php

use App\Models\User;
use App\Models\Produk;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Models\Review;
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

// AuthController --------------------------------------------------------------
Route::controller(AuthController::class)->group(function () {
    Route::get("/login", "showLogin")->name("login");
    Route::post("/login/action", "loginAction")->name("login.action");

    Route::get("/sign-up", "showSignUp")->name("sign-up");
    Route::post("/sign-up/action", "signUpAction")->name("sign-up.action");

    Route::get("/logout", "logout")->name("logout");
});


Route::middleware("auth")->group(function () {

    // -=- USER =========================================================================

    // --- ReviewController -----------------------------------------------------------
    Route::controller(ReviewController::class)->group(function () {
        Route::get("/user/home/", "index")->name("user.home");
        Route::get("/user/reviews/{username}", "myReviews")->name("user.reviews.my");
        Route::get("/user/reviews", "searchReviews")->name("user.reviews.search");
        Route::get("/user/reviews/details/{id}", "show")->name("user.reviews.details");
        Route::get("/user/reviews/add/{idProduk}/form", "add")->name("user.reviews.add");
        Route::post("/user/reviews/add/{idProduk}/form/addAction", "store")->name("user.reviews.add.action");
        Route::get("/user/reviews/details/delete/{id}/deleteAction", "delete")->name("user.reviews.delete.action");
    });

    // --- KomentarController ---------------------------------------------------------
    Route::controller(KomentarController::class)->group(function () {
        Route::post("/user/reviews/details/{idReview}/comments/add", "store")->name("user.comments.add.action");
        Route::get("/user/reviews/details/{idReview}/comments/delete/{id}/deleteAction", "delete")->name("user.comments.delete.action");
    });

    // --- ProdukController -----------------------------------------------------------
    Route::controller(ProdukController::class)->group(function () {
        Route::get("/user/reviews/add/select-skincare", "selectSkincare")->name("user.reviews.add.select-skincare");
    });

    // --- UserController -------------------------------------------------------------
    Route::controller(UserController::class)->group(function () {
        Route::get("/user/profile/{username}", "index")->name("user.profile");
        Route::get("/user/profile/edit", "edit")->name("user.profile.edit");
    });

    Route::get('/user/skincares', function () {
        return view('user/Skincares', [
            "title" => "Skincares"
        ]);
    })->name("user.skincares");


    // -=- ADMIN =========================================================================
    Route::get('/admin/home', function () {
        return view('admin/home', [
            "title" => "Home"
        ]);
    })->name("admin.home");



    Route::get('/admin/account', function () {
        return view('admin/account', [
            "account" => User::all(),
            "title" => "Account"
        ]);
    })->name("admin.account");

    Route::get('/admin/product', function () {
        return view('admin/product', [
            "product" => Produk::all(),
            "title" => "Product"
        ]);
    })->name("admin.product");

    Route::get('/admin/review', function () {
        return view('admin/review', [
            "title" => "Review"
        ]);
    })->name("admin.review");

    Route::get('/admin/account', function () {
        return view('admin/account', [
            "account" => User::all(),
            "title" => "Account"
        ]);
    })->name("admin.account");

    Route::get('/admin/product', function () {
        return view('admin/product', [
            "product" => Produk::all(),
            "title" => "Product"
        ]);
    })->name("admin.product");

    Route::get('/admin/review', function () {
        return view('admin/review', [
            "title" => "Review"
        ]);
    })->name("admin.review");
});
