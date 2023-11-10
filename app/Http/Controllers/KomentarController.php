<?php

namespace App\Http\Controllers;

use App\Models\Komentar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KomentarController extends Controller
{
    public function store(Request $request, $idReview)
    {

        if (empty($request->isi)) {
            return redirect()->route("user.reviews.details", $idReview)->with("failed", "Input failed to submit.\nKindly review and try again.");
        }

        Komentar::create([
            "isi" => $request->isi,
            "review_id" => $idReview,
            "user_id" => Auth::user()->id
        ]);

        return redirect()->route("user.reviews.details", $idReview)->with("success", "Your comment has been successfully submitted!");
    }

    public function delete($idReview, $idComment)
    {
        $movie = Komentar::findOrFail($idComment);
        $movie->delete();

        return redirect()->route("user.reviews.details", $idReview)->with("success", "Your comment has been successfully deleted!");
    }
}
