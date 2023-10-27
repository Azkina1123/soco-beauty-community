<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Komentar>
 */
class KomentarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "isi" => fake()->randomElement([
                "Saya setuju dengan pengguna pertama. Aloe Vera Gel ini menyelamatkan kulit saya setelah berjemur di pantai juga. Ini menjadi produk andalan saya untuk merawat kulit setelah berjemur.",
                "Coba gunakan Aloe Vera Gel ini sebagai masker wajah malam. Saya melihat hasil yang luar biasa pada bekas jerawat saya. Kulit saya lebih cerah dan jerawat semakin memudar.",
                 "Saya suka bagaimana serum ini membuat kulit saya terasa lebih kencang. Pasti memerlukan waktu untuk melihat perubahan, jadi bersabarlah!",
                 "Saya mengalami efek yang sama dengan pengguna kedua. Serum ini tidak bekerja untuk saya. Mungkin saya harus mencari yang lain.",
                 "Saya cuci wajah saya dua kali setelah menggunakan Cleansing Oil, dan hasilnya sangat baik. Kulit saya benar-benar bersih dan terasa segar.",
                "Saya setuju dengan pengguna kedua. Cleansing Oil ini cukup sulit dibilas. Mungkin saya akan mencoba merek lain yang lebih mudah dibilas.",
                "Sheet Mask ini memang bagus untuk meremajakan kulit sebelum acara khusus. Saya selalu gunakan sebelum pernikahan atau acara penting lainnya.",
                "Saya lebih suka Sheet Mask yang mengandung bahan aktif lainnya. Mungkin ini tidak cukup kuat untuk permasalahan kulit saya.",

            ]),
            "review_id" => fake()->Review::all()->random(),
            "akun_id" => fake()->Akun::all()->random()
        ];
    }
}
