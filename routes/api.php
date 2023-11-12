<?php

use App\Http\Controllers\API\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(ApiController::class)->group(function () {
    Route::get('/user/home', 'getReviews');
    Route::get('/user/reviews/{username}', 'getMyReviews');
    Route::get("/user/reviews", "getSearchReviews");
    Route::get("/user/reviews/details/{id}", "getReview");
    Route::get("/user/reviews/add/select-skincare", "getProduks");
    Route::get("/user/reviews/add/{idProduk}/form", "getProduk");
    Route::get("/user/reviews/produk/{id}", "getProdukReviews");

    Route::get("/user/skincares", "getProduks");
    Route::get("/user/skincares/all", "getProduks");
    Route::get("/user/skincares/details/{id}", "getProduk");

    Route::get("/user/profile/{username}", "getUser");

    Route::get("/", "getLandingData");

    Route::get("/admin/account", "getAllUser");


});

