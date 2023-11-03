<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // tampilkan halaman login
    public function showLogin()
    {
        return view("auth.login", [
            "title" => "Login"
        ]);
    }

    // autentikasi login
    public function loginAction(Request $request)
    {
        $data = [
            "username" => $request->username,
            "password" => $request->password,
        ];

        // jika berhasil login
        if (Auth::attempt($data)) {
            $user = User::where($request->username);
            $isAdmin = Auth::user();
            // $isAdmin = User::where("username", $request->username)->first()->admin;

            // buka dashboard admin
            if ($isAdmin->admin === 1) {
                return redirect(route("admin.home"));
            }

            // buka home user
            return redirect(route("user.home"))->with("success", "Welcome back, $request->username!");
        }

        // jika gagal login
        return redirect(route("login"))->with("error", "Wrong username or password!");
    }

    // tampilkan halaman sign up
    public function showSignUp()
    {
        return view("auth.sign-up", [
            "title" => "Sign Up"
        ]);
    }

    // tambahkan akun
    public function signUpAction(Request $request)
    {
        // jika password salah
        if ($request->password != $request->confirm) {
            return redirect(route("sign-up"))->with("error", "Wrong conirmation password!");
        }

        $usernameExist = User::where("username", $request->username)->first();
        if ($usernameExist) {
            return redirect(route("sign-up"))->with("error", "Username is already in use.");
        }

        $namaGambar = "";

        // kalau user berhasil mengupload gambar
        if ($request->hasFile("gambar")) {

            // ambil nama gambar yg diupload
            $filename = $request->gambar->getClientOriginalName();

            // pisahkan nama gambar yang diupload di .
            $filenameArr = explode(".", $filename);

            // ambil ekstensi dari gambar
            $ekstensi = strtolower(end($filenameArr));

            // ubah nama gambar yg akan disimpan
            $namaGambar = $request->username . "." . $ekstensi;

            // simpan gambar dgn memindahkan ke file assets/user/
            $request->gambar->move("assets/user/", $namaGambar);
        }

        // $validateData = $request->validate([
        //     "username" => "required|string|max:20",
        //     "nama_lengkap" => "required|string|max:100",
        //     "password" => "required|string",
        // ]);

        User::create([
            "username" => $request->username,
            "nama_lengkap" => $request->nama_lengkap,
            "password" => Hash::make($request->password),
            "gambar" => $namaGambar,
            "admin" => false
        ]);
        // User::create([
        //     "username" => $validateData["username"],
        //     "nama_lengkap" => $validateData["nama_lengkap"],
        //     "password" => Hash::make($validateData["password"]),
        //     "gambar" => $namaGambar,
        //     "admin" => $validateData["admin"]
        // ]);

        return redirect(route("sign-up"))->with("success", "The account has been successfully registered.");
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route("landing"));
    }
}