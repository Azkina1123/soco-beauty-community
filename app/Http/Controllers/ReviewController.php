<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function add($idProduk)
    {
        $endpoint = env("BASE_ENV") . "/api/user/reviews/add/{$idProduk}/form";
        $data = Http::get($endpoint);

        return view("user.form-review", [
            "title" => "Add Review",
            "produk" => $data["produk"][0]
        ]);
    }

    public function store(Request $request, $idProduk)
    {
        if (empty($request->isi)) {
            return redirect()->route("user.home", [
                "title" => "Home"
            ])->with("failed", "Review failed to submit.");
        }

        Review::create([
            "isi" => $request->isi,
            "produk_id" => $idProduk,
            "user_id" => Auth::user()->id
        ]);

        return redirect()->route("user.home", [
            "title" => "Home"
        ])->with("success", "Your review has been successfully submitted!");
    }

    public function delete($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();

        return redirect()->route("user.home", ["title" => "Home"])->with("success", "Your review has been successfully deleted!");
    }
}
