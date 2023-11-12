<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProdukController extends Controller
{
    public function index(Request $request)
    {
        $endpoint = env("BASE_ENV") . "/api/user/skincares";

        if (!empty($request->search)) {
            $endpoint =
                env("BASE_ENV") . "/api/user/skincares?search=$request->search";
        }

        if (!empty($request->category)) {
            $endpoint =
                env("BASE_ENV") . "/api/user/skincares?category=$request->category";
        }
        $data = Http::get($endpoint);


        return view('user/skincares', [
            "title" => "Skincares",
            "produks" => $data,
            "search" => $request->search
        ]);
    }



    public function show($id)
    {
        $endpoint = env("BASE_ENV") . "/api/user/skincares/details/$id";
        $data = Http::get($endpoint);

        $count = Produk::with("review")->where("id", $id)->count();

        // return $data;
        return view('user.detail-skincare', [
            "title" => "Detail Skincare",
            "produk" => $data["produk"][0],
            "count" => $count
        ]);
    }

    public function selectProduk(Request $request)
    {
        $endpoint = env("BASE_ENV") . "/api/user/reviews/add/select-skincare";

        if (!empty($request->search)) {
            $endpoint =
                env("BASE_ENV") . "/api/user/reviews/add/select-skincare?search=$request->search";
        }
        $data = Http::get($endpoint);


        return view("user.select-skincare", [
            "title" => "Select Skincare",
            "produks" => $data["data"],
            "search" => $request->search
        ]);
    }

    public function create(){
        return view('admin.crud.add', ["title" => "Add Products"]);
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'nama_produk' => 'required|string',
            'jenis' => 'required|string',
            'deskripsi' => 'required|string',
            'merk' => 'required|string',
            'gambar' => 'required|string',
        ]);
        Produk::create($validateData);
        return redirect()->route('admin.product')->with('success', 'data produk berhasil ditambahkan');

    }
}
