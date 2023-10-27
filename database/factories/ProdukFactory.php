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
            "Kiehl's Midnight Recovery Concentrate"

        ];
        $jenisProd = [
            'Moisturizer',
            'Facial Wash',
            'Serum',
            'Sunscreen',
            'Exfoliating Scrub',

        ];
        $deskripsiProd = [
            'mengobati jerawat dan bintik-bintik jerawat.',
            'mencerahkan atau memutihkan kulit dengan mengurangi hiperpigmentasi atau noda gelap.',
            'mengurangi tanda-tanda penuaan kulit, seperti kerutan dan garis halus.',
            'memberikan efek mencerahkan dan kilau pada kulit wajah.',
            'mengangkat sel-sel kulit mati, membersihkan pori-pori, dan meningkatkan tekstur kulit.'
        ];


        $merkProd = [
            'Wardah',
            'Sariayu Martha Tilaar',
            'Mustika Ratu',
            'Viva Cosmetics',
            'Natasha Skin Care',
            'Purbasari',
            'Caring by Biokos',
            'Bali Alus',
            'Citra',
            'JAFRA Indonesia',
        ];
        $gambarProd = [
            asset('assets/skincare1.jpeg'),
            asset('assets/skincare2.jpeg'),
            asset('assets/skincare3.jpeg'),
            asset('assets/skincare4.jpg'),
            asset('assets/skincare4.jpg'),
        ];
        return [
            'nama_produk' => fake()->randomElement($namaProd),
            'jenis' => fake()->randomElement($jenisProd),
            'deskripsi'=>fake()->randomElement($deskripsiProd),
            'merk'=>fake()->randomElement($merkProd),
            'gambar'=>fake()->randomElement($gambarProd),

            //
        ];
    }
}
