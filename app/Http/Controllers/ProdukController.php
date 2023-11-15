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

    public function showAll(){
        return view('admin/product', [
            "product" => Produk::all(),
            "title" => "Product"
        ]);
    }

    public function create(){
        return view('admin.crud.add', ["title" => "Add Products"]);
    }

    public function store(Request $request){
        // $validateData = $request->validate([
        //     'nama_produk' => 'required|string',
        //     'jenis' => 'required|string',
        //     'deskripsi' => 'required|string',
        //     'merk' => 'required|string',
        //     'gambar' => 'required|image|mimes:jpeg,png,jpg,gif',
        // ]);

        $namaGambar = "";

        if ($request->hasFile("gambar")) {
            $filename = $request->gambar->getClientOriginalName();

            $filenameArr = explode(".", $filename);

            $ekstensi = strtolower(end($filenameArr));

            $namaGambar = $request->nama_produk . "." . $ekstensi;

            $request->gambar->move("assets/skincares/", $namaGambar);
        }

        Produk::create([
                'nama_produk' => $request->nama_produk,
                'jenis' => $request->jenis,
                'deskripsi' => $request->deskripsi,
                'merk' => $request->merk,
                'gambar' => $namaGambar,
        ]);
        return redirect()->route('admin.product')->with('success', 'data produk berhasil ditambahkan');

    }

    public function edit($id){
        return view('admin.crud.edit',[
            "title" => "Edit Products",
            'products' => Produk::all()->where('id', $id)->first(),

        ]);
    }

    public function update(Request $request, $id){
        $namaGambar = "";

        if ($request->hasFile("gambar")) {
            $filename = $request->gambar->getClientOriginalName();

            $filenameArr = explode(".", $filename);

            $ekstensi = strtolower(end($filenameArr));

            $namaGambar = $request->nama_produk . "." . $ekstensi;

            $request->gambar->move("assets/skincares/", $namaGambar);
        }

        $product = Produk::findOrFail($id);

        $product->update([
                'nama_produk' => $request->nama_produk,
                'jenis' => $request->jenis,
                'deskripsi' => $request->deskripsi,
                'merk' => $request->merk,
                'gambar' => $namaGambar,
        ]);
        session(['edited_id' => $id]);
        return redirect()->route('admin.product')->with('success');
    }

    public function delete($id){
        $product = Produk::findOrFail($id);
        $product->delete();
        return redirect()->route('admin.product')->with('success');
    }


}
