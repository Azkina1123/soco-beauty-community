<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    public function getReview()
    {
        $reviews = Review::with([
            "user" => function ($query) {
                $query->select("id", "username", "gambar");
            }
        ])->with([
            "produk" => function ($query) {
                $query->select("id", "nama_produk", "jenis", "gambar");
            }
        ])->get();

        $response = [
            "status" => "success",
            "data" => $reviews
        ];

        return response()->json($response);
    }
}
