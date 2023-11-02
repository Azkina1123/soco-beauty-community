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
            'Mengobati jerawat dan bintik-bintik jerawat.',
            'Mencerahkan atau memutihkan kulit dengan mengurangi hiperpigmentasi atau noda gelap.',
            'Mengurangi tanda-tanda penuaan kulit, seperti kerutan dan garis halus.',
            'Memberikan efek mencerahkan dan kilau pada kulit wajah.',
            'Mengangkat sel-sel kulit mati, membersihkan pori-pori, dan meningkatkan tekstur kulit.'
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
            'skincare-1.jpeg',
            'skincare-2.jpeg',
            'skincare-3.jpeg',
            'skincare-4.jpeg',
            'skincare-5.jpeg'
        ];
        return [
            'nama_produk' => fake()->randomElement($namaProd),
            'jenis' => fake()->randomElement($jenisProd),
            'deskripsi' => fake()->randomElement($deskripsiProd),
            'merk' => fake()->randomElement($merkProd),
            'gambar' => fake()->randomElement($gambarProd),

            //
        ];
    }
}
