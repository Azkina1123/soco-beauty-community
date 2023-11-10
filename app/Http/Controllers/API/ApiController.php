<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Komentar;
use App\Models\Produk;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    public function getReviews()
    {
        $reviews = Review::orderBy("created_at", "desc")->with([
            "user" => function ($query) {
                $query->select("id", "username", "gambar");
            }
        ])->with([
            "produk" => function ($query) {
                $query->select("id", "nama_produk", "jenis", "gambar");
            }
        ])->with("komentar")
            ->get();

        $response = [
            "status" => "success",
            "data" => $reviews
        ];

        return response()->json($response);
    }

    public function getMyReviews($username)
    {
        $id = User::where("username", $username)->first()->id;
        $reviews = Review::where("user_id", $id)
            ->with([
                "user" => function ($query) {
                    $query->select("id", "username", "gambar");
                }
            ])->with([
                "produk" => function ($query) {
                    $query->select("id", "nama_produk", "jenis", "gambar");
                }
            ])->with("komentar")
            ->get();

        $response = [
            "status" => "success",
            "data" => $reviews
        ];

        return response()->json($response);
    }

    public function getSearchReviews(Request $request)
    {
        // cari produk berdasarkan nama produk || jenis produk
        $produks = Produk::select("id")
            ->where("nama_produk", "LIKE", "%$request->search%")
            ->orWhere("jenis", "=", "$request->search")
            ->get();


        $reviews = Review::with([
            "user" => function ($query) {
                $query->select("id", "username", "gambar");
            }
        ])->with([
            "produk" => function ($query) {
                $query->select("id", "nama_produk", "jenis", "gambar");
            }
        ])
            // cari review berdasarkan isi review
            ->where("isi", "LIKE", "%$request->search%")
            // cari review berdasarkan nama produk || jenis produk
            ->orWhere(function ($query) use ($produks) {
                $query->whereIn("produk_id", $produks->toArray());
            })->with("komentar")
            ->get();

        $response = [
            "status" => "success",
            "data" => $reviews
        ];

        return response()->json($response);
    }

    public function getDetailsReview($idReview)
    {
        $review = Review::with([
            "user" => function ($query) {
                $query->select("id", "username", "gambar");
            }
        ])->with([
            "produk" => function ($query) {
                $query->select("id", "nama_produk", "merk", "jenis", "gambar");
            }
        ])
            ->with([
                "komentar" => function ($query) {
                    $query->orderBy("created_at", "desc")->with([
                        "user" => function ($query) {
                            $query->select("id", "username", "gambar");
                        }
                    ]);
                }
            ])->where("id", "=", $idReview)
            ->get();

        $response = [
            "review" => $review
        ];
        return response()->json($response);
    }
}
