<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProdukController extends Controller
{
    public function selectSkincare(Request $request)
    {
        $endpoint = env("BASE_ENV") . "/api/user/reviews/add/select-skincare";

        if (!empty($request->search)) {
            $endpoint =
                env("BASE_ENV") . "/api/user/reviews/add/select-skincare?search=$request->search";
        }
        $data = Http::get($endpoint);

        return view("user.select-skincare", [
            "title" => "Select Skincare",
            "produks" => $data["produks"],
            "search" => $request->search
        ]);
    }
}
