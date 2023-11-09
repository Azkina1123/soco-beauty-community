<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ReviewController extends Controller
{

    // read review
    public function index()
    {
        $endpoint = env("BASE_ENV") . "/api/user/home";
        $data = Http::get($endpoint);

        return view('user/home', [
            "title" => "Home",
            "reviews" => $data
        ]);
    }
    public function myReviews()
    {
        $endpoint = env("BASE_ENV") . "/api/user/reviews/my-reviews";
        $data = Http::get($endpoint);

        return view('user/home', [
            "title" => "My Reviews",
            "reviews" => $data
        ]);
    }
}
