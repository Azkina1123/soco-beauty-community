<?php

namespace Database\Factories;

use App\Models\Akun;
use App\Models\Produk;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
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
                "Saya sangat menyukai Aloe Vera Gel ini. Sangat ringan di kulit dan memberikan perasaan sejuk. Saya menggunakannya setelah berjemur di pantai, dan kulit saya terasa sangat lembut. Ini adalah penyelamat untuk kulit yang terbakar matahari!",
                "Sayangnya, Aloe Vera Gel ini membuat kulit saya merasa kering. Mungkin bukan cocok untuk saya, tapi banyak orang tampak menyukainya.",
                "Saya telah menggunakan serum ini selama 3 bulan, dan saya benar-benar melihat perubahan pada kerutan di wajah saya. Kulit saya tampak lebih kencang dan halus. Ini adalah penyelamat saya untuk melawan tanda-tanda penuaan!",
                "Saya tidak melihat perubahan apa pun setelah menggunakan serum ini. Ini mungkin tidak cocok untuk jenis kulit saya.",
                "Cleansing Oil ini sangat efektif untuk menghapus riasan wajah. Saya bisa merasa minyaknya melarutkan makeup dengan mudah. Setelah mencucinya, kulit saya terasa segar dan tidak berminyak.",
                "Saya merasa Cleansing Oil ini agak sulit dibilas, dan meninggalkan lapisan minyak di wajah saya. Mungkin perlu beberapa kali pencucian tambahan.",
                "Saya mencoba Sheet Mask ini sebelum acara penting, dan hasilnya luar biasa! Kulit saya terlihat bersinar dan terhidrasi dengan baik. Sangat cocok untuk perawatan wajah sebelum acara khusus."
            ]),
            "akun_id" => Akun::all()->random()->id,
            "produk_id" => Produk::all()->random()->id,
        ];
    }
}
