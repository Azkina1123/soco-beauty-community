<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Review;
use App\Models\Komentar;
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

        $reviews = Review::all();


        foreach ($reviews as $review) {
            $user = User::find($review->user_id);
            $review->username = $user ? $user->username : 'Unknown User';
        }
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

    public function produkReviews($id)
    {
        $endpoint = env("BASE_ENV") . "/api/user/reviews/produk/{$id}";
        $data = Http::get($endpoint);

        $nama_produk = Produk::where("id", $id)->first()->nama_produk;
        // return $data;
        return view('user/home', [
            "title" => "Search: " . $nama_produk,
            "reviews" => $data,
            "search" => $nama_produk
        ]);
    }

    public function showAll(){
        return view('admin/review', [
                    "review" => Review::all(),
                    "title" => "Review"
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

        return redirect()->route("admin.review", ["title" => "Home"])->with("success", "Your review has been successfully deleted!");
    }

    public function showDetail($id)
    {
        return view('admin.admindetailreview',[
            "title" => "Detail Review",
            'review' => Review::all()->where('id', $id)->first(),
            'komentar' => Komentar::all()->where('review_id', $id),
        ]);
        // $reviewID = Review::findOrFail($id);
        // // $user = User::find($review->user_id);

        // return redirect()->route("admindetailreview", ['id' => $reviewID, 'title' => 'Detail Review'])->with("success");
    }

}
