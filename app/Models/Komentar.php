<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Komentar extends Model
{
    use HasFactory;

    protected $table = "komentars";
    protected $fillable = ["isi", "review_id", "akun_id"];

    // 1 komentar hanya bisa berada pada 1 review
    public function review(): BelongsTo {
        return $this->belongsTo(Review::class);
    }

    // 1 komentar hanya bisa ditulis oleh 1 akun
    public function akun(): BelongsTo {
        return $this->belongsTo(Akun::class);
    }
}
