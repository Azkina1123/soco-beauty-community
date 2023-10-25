<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Akun extends Model
{
    use HasFactory;
    protected $table = "akuns";
    protected $fillable = ["username", "nama_lengkap", "password", "admin", "gambar"];

    // 1 akun (user) bisa membuat banyak review
    public function review(): HasMany {
        return $this->hasMany(Review::class);
    }
}
