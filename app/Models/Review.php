<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Review extends Model
{
    use HasFactory;
    protected $table = "reviews";
    protected $fillable = ["isi", "produk_id", "user_id"];

    // 1 review hanya bisa ditulis oleh 1 akun
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // 1 review hanya bisa membahas 1 produk
    public function produk(): BelongsTo
    {
        return $this->belongsTo(Produk::class);
    }

    // 1 review bisa memiliki banyak komentar
    public function komentar(): HasMany
    {
        return $this->hasMany(Komentar::class);
    }
}
