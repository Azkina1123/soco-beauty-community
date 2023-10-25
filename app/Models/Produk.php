<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Produk extends Model
{
    use HasFactory;

    protected $table = "produks";
    protected $fillable = ["nama_produk", "jenis", "deskripsi", "merk", "gambar"];

    public function review(): HasMany {
        return $this->hasMany(Review::class);
    }
}
