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
    public function myReviews($username)
    {
        $endpoint = env("BASE_ENV") . "/api/user/reviews/{$username}";
        $data = Http::get($endpoint);

        // return $data;
        return view('user/home', [
            "title" => "My Reviews",
            "reviews" => $data
        ]);
    }

    public function searchReviews(Request $request)
    {
        $endpoint = env("BASE_ENV") . "/api/user/reviews?search=$request->search";
        $data = Http::get($endpoint);

        // return $data;
        return view('user/home', [
            "title" => "Search: $request->search",
            "reviews" => $data,
            "search" => $request->search
        ]);
    }

    public function show($id)
    {
        $endpoint = env("BASE_ENV") . "/api/user/reviews/details/$id";
        $data = Http::get($endpoint);

        // return $data;
        return view('user/detail-review', [
            "title" => "Detail Review",
            "review" => $data["review"][0]
        ]);
    }
}
