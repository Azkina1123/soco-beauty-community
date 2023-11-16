<?php

use App\Models\User;
use App\Models\Produk;
use App\Models\Review;
use App\Models\Komentar;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\KomentarController;

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

    $endpoint = env("BASE_ENV") . "/api";
    $data = Http::get($endpoint);

    return view('landing', [
        "title" => "Soco - Beauty Community",
        "produks" => $data["produks"],
        "reviews" => $data["reviews"]
    ]);
})->name("landing");

Route::get('/about', function () {

    return view('about', [
        "title" => "About Soco",
    ]);
})->name("about");

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
        Route::get("/user/reviews/produk/{id}", "produkReviews")->name("user.reviews.produk");
    });

    // --- KomentarController ---------------------------------------------------------
    Route::controller(KomentarController::class)->group(function () {
        Route::post("/user/reviews/details/{idReview}/comments/add", "store")->name("user.comments.add.action");
        Route::get("/user/reviews/details/{idReview}/comments/delete/{id}/deleteAction", "delete")->name("user.comments.delete.action");
    });

    // --- ProdukController -----------------------------------------------------------
    Route::controller(ProdukController::class)->group(function () {
        Route::get("/user/reviews/add/select-skincare", "selectProduk")->name("user.reviews.add.select-skincare");
        Route::get("/user/skincares", "index")->name("user.skincares");
        Route::get("/user/skincares/{jenis}", "categoryProduks")->name("user.skincares.category");
        Route::get("/user/skincares/search", "searchProduks")->name("user.skincares.search");
        Route::get("/user/skincares/details/{id}", "show")->name("user.skincares.details");
    });

    // --- UserController -------------------------------------------------------------
    Route::controller(UserController::class)->group(function () {
        Route::get("/user/profile/{username}", "index")->name("user.profile");
        Route::get("/user/profile/my/edit", "edit")->name("user.profile.edit");
        Route::post("/user/profile/my/edit/action", "update")->name("user.profile.edit.action");
    });


    // -=- ADMIN =========================================================================
    Route::get('/admin/home', function () {
        return view('admin/home', [
            "title" => "Home",
            "komentar" => Komentar::all(),
            "review" => Review::all(),
            "produk" => Produk::all(),
            "user" => User::all(),
        ]);
    })->name("admin.home");

    // --- UserController -------------------------------------------------------------
    Route::controller(UserController::class)->group(function () {
        Route::get('/admin/account/', 'showAll')->name('admin.account');

    });

    // --- ProductController -------------------------------------------------------------
    Route::controller(ProdukController::class)->group(function () {
        Route::get('/admin/product/', 'showAll')->name('admin.product');
        Route::get('/admin/product/create', 'create')->name('admin.crud.add');
        Route::post('/admin/product/create/action', 'store')->name('admin.store');
        Route::get('/admin/product/edit/{id}', 'edit')->name('admin.crud.edit');
        Route::post('/admin/product/edit/{id}/action', 'update')->name('admin.crud.update');
        Route::get('/admin/product/delete/{id}/action', 'delete')->name('admin.crud.delete');
    });

    // --- ReviewController -------------------------------------------------------------
    Route::controller(ReviewController::class)->group(function () {
        Route::get('/admin/review/', 'showAll')->name('admin.review');
        Route::post('/admin/review/delete/{id}/action', 'delete')->name('admin.review.delete');
        Route::get('/admin/review/{id}/details', 'showDetail')->name('admin.review.detail');
    });

    Route::controller(KomentarController::class)->group(function () {
        Route::get("/admin/review/{id}/details/delete/{idComment}/deleteaction", "deleteAdm")->name("admin.comments.delete.action");
     });




});



