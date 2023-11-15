<?php

namespace App\Http\Controllers;

use App\Models\Komentar;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function index($username)
    {
        $endpoint = env("BASE_ENV") . "/api/user/profile/$username";
        $data = Http::get($endpoint);

        $id = User::where("username", "=", $username)->first()->id;
        $countRev = Review::where("user_id", "=", $id)->count();
        $countCom = Komentar::where("user_id", "=", $id)->count();

        return view("user.profile", [
            "title" => "Profile",
            "user" => $data["user"][0],
            "countRev" => $countRev,
            "countCom" => $countCom
        ]);
    }

    public function edit()
    {
        $user = Auth::user();

        return view('user.edit-profile', [
            "title" => "Edit Profile",
            "user" => $user
        ]);
    }

    public function showAll(){
        return view('admin/account', [
            "account" => User::all(),
            "title" => "Account"
        ]);
    }

    public function update(Request $request)
    {

        $password = Auth::user()->password;
        // jika confirm password salah dan masih pakai password lama
        if (
            ($request->password != $request->confirm && empty($request->newPassword)) ||
            ($request->newPassword != $request->confirm && !empty($request->newPassword))
        ) {
            return redirect(route("user.profile.edit"))->with("error", "Wrong confirmation password!");
        }

        // jika ganti password
        if (!empty($request->newPassword)) {
            $password = $request->newPassword;
        }

        $usernameExist = User::where("username", $request->username)->first();
        if ($usernameExist && $request->username != Auth::user()->username) {
            return redirect(route("user.profile.edit"))->with("error", "Username is already in use.");
        }

        $namaGambar = Auth::user()->gambar;

        // kalau user berhasil mengupload gambar
        if ($request->hasFile("gambar")) {
            // hapus gambar lama
            unlink("assets/users/$namaGambar");

            // ambil nama gambar yg diupload
            $filename = $request->gambar->getClientOriginalName();

            // pisahkan nama gambar yang diupload di .
            $filenameArr = explode(".", $filename);

            // ambil ekstensi dari gambar
            $ekstensi = strtolower(end($filenameArr));

            // ubah nama gambar yg akan disimpan
            $namaGambar = $request->username . "." . $ekstensi;

            // simpan gambar dgn memindahkan ke file assets/users/
            $request->gambar->move("assets/users/", $namaGambar);
        }

        $user = User::findOrFail(Auth::user()->id);

        $user->update([
            "username" => $request->username,
            "nama_lengkap" => $request->nama_lengkap,
            "password" => Hash::make($request->password),
            "gambar" => $namaGambar,
            "admin" => false
        ]);
        return redirect(route("user.profile.edit"))->with("success", "The account has been successfully updated.");
    }
}
