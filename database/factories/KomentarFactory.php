<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Review;
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
                "erima kasih atas ulasan yang detail! Saya juga menggunakan produk ini dan benar-benar setuju dengan hasil yang Anda rasakan. Bagi saya, konsistensi penggunaan memainkan peran besar dalam melihat perubahan pada kulit.",
                "Saya memiliki pengalaman yang berbeda dengan produk ini. Meskipun teksturnya bagus, sayangnya, kulit saya cenderung bereaksi dengan bahan tertentu dalam formulanya. Tapi, hebatnya, setiap kulit memang berbeda-beda ya!",
                "Saya setuju, hasilnya luar biasa! Tapi sayangnya, harganya cukup membuat kantong jebol. Apakah ada produk dengan efek serupa namun dengan harga yang lebih terjangkau?",
                "Menggunakan produk ini sudah lama menjadi bagian dari rutinitas skincare saya dan saya sangat puas. Tapi saya sepakat bahwa untuk melihat hasil maksimal, konsistensi penggunaan sangat penting. Bagi yang baru mencoba, sabarlah melihat perubahan karena skincare memerlukan waktu untuk memberikan hasil yang nyata.",
                "Saya mencoba produk ini berdasarkan ulasan positif, namun sayangnya tidak cocok dengan kulit saya. Mungkin memang setiap orang memiliki respons yang berbeda terhadap skincare. Tetap mencari produk yang tepat untuk kulit saya!",
                "Mungkin efek samping yang saya alami karena salah penggunaan produk. Apakah ada saran atau tips dalam menggunakan skincare tertentu agar hasilnya lebih optimal tanpa menimbulkan efek negatif pada kulit?",
                "Ulasan yang bagus! Selain menggunakan produk ini, adakah langkah tambahan dalam rutinitas skincare yang membantu meningkatkan hasilnya? Saya ingin memaksimalkan manfaat dari produk ini.",
                "Saya baru ingin mencoba produk ini tapi masih ragu. Apakah ada yang memiliki pengalaman lebih lanjut dengan pemakaian jangka panjang? Bagaimana efeknya setelah beberapa bulan pemakaian?",
                "Saya setuju, konsistensi dalam penggunaan skincare sangat penting. Namun, adakah tips khusus dalam memasukkan produk ini ke dalam rutinitas skincare harian?",
                "Mengenai kemasan, apakah produk ini ramah lingkungan? Saya mencoba berpindah ke produk-produk yang lebih berkelanjutan untuk lingkungan.",
                "Apakah produk ini bersifat waterproof atau tahan air? Saya aktif di luar ruangan dan mencari sunscreen yang tetap efektif meskipun saat berkeringat atau berenang."
            ]),
            "review_id" => Review::all()->random(),
            "user_id" => User::all()->random()
        ];
    }
}
