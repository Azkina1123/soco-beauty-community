<?php

namespace Database\Factories;

use App\Models\Produk;
use App\Models\User;
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
                "Saya mencoba Sheet Mask ini sebelum acara penting, dan hasilnya luar biasa! Kulit saya terlihat bersinar dan terhidrasi dengan baik. Sangat cocok untuk perawatan wajah sebelum acara khusus.",
                "Kemasannya praktis dan higienis dengan botol kaca yang elegan dan pipet untuk aplikasi yang mudah. Teksturnya ringan dan cepat meresap ke dalam kulit tanpa meninggalkan rasa lengket.",
                "Saya sangat terkesan dengan kombinasi bahan-bahan alami dalam serum ini. Kandungan Vitamin C dan niacinamide memberikan efek cerah pada kulit, sedangkan ekstrak licorice memberikan efek meratakan warna kulit.",
                "Secara keseluruhan, XYZ Brightening Serum adalah pilihan yang bagus bagi mereka yang ingin mencari produk yang dapat memberikan efek cerah pada kulit. Kemasannya praktis, teksturnya ringan, dan hasilnya terlihat dalam beberapa minggu penggunaan. Meskipun harganya sedikit tinggi, saya rasa nilai dan kualitas produk sebanding.",
                "Saya memiliki kulit sensitif, dan produk ini tidak menyebabkan iritasi atau reaksi negatif lainnya. Tidak mengandung bahan kimia yang keras, dan cocok untuk penggunaan sehari-hari.",
                "Kemasannya praktis dan mudah dibawa, baik untuk penggunaan sehari-hari maupun saat bepergian. Satu aplikasi cukup tahan lama selama beberapa jam, meskipun perlu diulang saat beraktivitas yang intens di luar ruangan."
            ]),
            "user_id" => User::all()->random()->id,
            "produk_id" => Produk::all()->random()->id,
        ];
    }
}
