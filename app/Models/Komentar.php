<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Komentar extends Model
{
    use HasFactory;

    protected $table = "komentars";
    protected $fillable = ["isi", "review_id", "user_id"];

    // 1 komentar hanya bisa berada pada 1 review
    public function review(): BelongsTo
    {
        return $this->belongsTo(Review::class);
    }

    // 1 komentar hanya bisa ditulis oleh 1 akun
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
