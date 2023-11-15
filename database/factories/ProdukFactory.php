<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produk>
 */
class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $namaProd = [
            "Revitalift Anti-Wrinkle Cream",
            "CeraVe Hydrating Cleanser",
            "Neutrogena Hydro Boost Water Gel",
            "The Ordinary Niacinamide Serum",
            "Olay Regenerist Micro-Sculpting Cream",
            "La Roche-Posay Toleriane Double Repair Moisturizer",
            "Paula's Choice Skin Perfecting 2% BHA Liquid",
            "Drunk Elephant T.L.C. Framboos Glycolic Night Serum",
            "Sunday Riley Good Genes All-In-One Lactic Acid Treatment",
            "Kiehl's Midnight Recovery Concentrate",
            "5X Ceramide Barrier Repair Moisturizer Gel",
            "MSH Niacinamide Brightening Moisture Gel",
            "Hydramax C Sunscreen Serum",
            "Hydrasoothe Sunscreen Mist",
            "Daily Beginner Exfoliating Toner",
            "Moisture Rich Hydrating Toner",
            "AHA-BHA-PHA Peeling Serum",
            "Acne Spot Serum",
            "Instan Glow Peel Off Nail Polish",
        ];
        $jenisProd = [
            'Facial Wash',
            'Toner',
            'Serum',
            'Moisturizer',
            'Sunscreen',
        ];
        $deskripsiProd = [
            'Diformulasikan dengan campuran unik peptida dan antioksidan alami, serum ini dirancang untuk mengurangi tanda-tanda penuaan. Teksturnya ringan dan cepat meresap ke dalam kulit, meninggalkan perasaan lembap dan kenyal. Dengan penggunaan teratur, membantu mengurangi garis halus dan meningkatkan kecerahan kulit.',
            'Formula lembut dengan enzim buah-buahan alami, scrub ini memberikan eksfoliasi yang lembut untuk mengangkat sel-sel kulit mati. Membantu menyamarkan tekstur kulit, mengurangi noda, dan menghidrasi kulit. Hasilnya adalah kulit yang lebih halus, segar, dan berseri.',
            'Toner yang mengandung ekstrak tumbuhan dan bahan alami untuk menyeimbangkan pH kulit dan menenangkan kulit setelah dibersihkan. Merawat pori-pori, mengurangi kemerahan, dan mempersiapkan kulit untuk menerima manfaat produk perawatan kulit lainnya.',
            'Diformulasikan khusus untuk pemulihan kulit semalam, pelembap ini mengandung kombinasi bahan aktif seperti retinol dan asam hialuronat untuk membantu mengurangi tanda-tanda penuaan, meningkatkan tekstur kulit, dan memberikan hidrasi mendalam selama malam.',
            'Serum inovatif yang mengandung campuran peptida canggih untuk meremajakan kulit. Meresap dengan cepat dan membantu meratakan tekstur kulit, mengurangi garis halus, dan meningkatkan elastisitas. Formula ringan yang cocok untuk digunakan sebelum penggunaan pelembap.',
            "Masker yang dirancang untuk membersihkan pori-pori secara mendalam dan menghilangkan kotoran serta racun yang menyumbat kulit. Mengandung campuran lembut dari tanah liat alami dan ekstrak tumbuhan untuk menenangkan kulit, meninggalkan rasa kesegaran dan kelembutan setelah penggunaan.",
            "Pelembap harian yang memberikan perlindungan dari sinar matahari (SPF 30) sambil menjaga kelembapan kulit sepanjang hari. Formula ringan yang tidak lengket, membantu melindungi kulit dari paparan sinar UV dan polusi lingkungan.",
            "Serum yang diperkaya dengan vitamin C stabil untuk membantu mencerahkan dan menyamarkan noda pada kulit. Membantu meratakan warna kulit, mengurangi hiperpigmentasi, dan memberikan kilau alami yang sehat.",
            "Pembersih wajah dengan teknologi micellar untuk membersihkan sisa makeup, kotoran, dan minyak tanpa perlu dibilas. Formulasi lembut yang cocok untuk semua jenis kulit, memberikan sensasi kesegaran dan kelembutan setelah digunakan.",
            "Sunscreen ini tidak hanya melindungi kulit dari sinar UVA dan UVB dengan SPF 50, tetapi juga memberikan kelembapan yang tahan lama. Dengan tekstur ringan dan cepat meresap, produk ini tidak meninggalkan rasa lengket atau putih pada kulit.",
            "Dirancang khusus untuk kulit berminyak, sunscreen ini memberikan perlindungan dari sinar matahari (SPF 30) sambil memberikan efek matte pada kulit. Teksturnya ringan dan mengontrol minyak berlebih, menjadikannya pilihan ideal untuk kulit yang rentan terhadap kilau berlebihan.",
            "Formulasi tahan air yang cocok untuk digunakan di pantai atau saat beraktivitas di air. Dengan perlindungan tinggi (SPF 50+), sunscreen ini tetap efektif meskipun terpapar air atau keringat, sehingga kulit tetap terlindungi dengan baik.",
            "Dikembangkan khusus untuk kulit sensitif, produk ini memiliki formula hypoallergenic yang lembut namun efektif dalam memberikan perlindungan tinggi terhadap sinar matahari (SPF 50). Tidak mengandung pewangi atau bahan iritan, cocok untuk kulit yang rentan terhadap reaksi alergi.",
            "Toner ini mengandung campuran ekstrak herbal yang membantu menyeimbangkan pH kulit, mengurangi kemerahan, dan memberikan sensasi kesegaran. Diformulasikan tanpa alkohol, menjadikannya cocok untuk semua jenis kulit, bahkan yang sensitif sekalipun.",
            "Toner dengan formula yang diperkaya dengan bahan-bahan yang melembapkan dan menghidrasi kulit secara mendalam. Mengandung asam hialuronat atau ekstrak botani yang membantu menjaga kelembapan alami kulit, memberikan sensasi segar dan kenyal setelah penggunaan.",
            "Toner ini diformulasikan khusus untuk membersihkan dan mengontrol minyak berlebih. Mengandung bahan-bahan seperti witch hazel atau salicylic acid untuk membantu membersihkan pori-pori, mengurangi kemerahan, dan menjaga kulit tetap segar tanpa membuatnya kering.",
        ];

        $merkProd = [
            'Wardah',
            'Mustika Ratu',
            'Viva Cosmetics',
            'Natasha Skin Care',
            'Purbasari',
            'Bali Alus',
            'Citra',
            'JAFRA Indonesia',
            'Azarine',
            'Skintific'
        ];
        $gambarProd = [
            'facial-2.png',
            'facial-3.png',
            'facial-4.png',
            'moist-1.jpeg',
            'moist-2.jpeg',
            'moist-3.jpg',
            'serum-1.webp',
            'serum-2.webp',
            'serum-3.webp',
            'serum-4.webp',
            'serum-5.jpeg',
            'serum-6.png',
            'serum-7.jpg',
            'sunscreen-1.webp',
            'sunscreen-2.webp',
            'toner-1.webp',
            'toner-2.webp',
            'toner-3.jpeg',
            'skincare-1.jpeg',
            'skincare-2.jpeg',
            'skincare-3.jpg'
        ];
        return [
            'nama_produk' => fake()->unique()->randomElement($namaProd),
            'jenis' => fake()->randomElement($jenisProd),
            'deskripsi' => fake()->randomElement($deskripsiProd),
            'merk' => fake()->randomElement($merkProd),
            'gambar' => fake()->unique()->randomElement($gambarProd),
            //
        ];
    }
}
