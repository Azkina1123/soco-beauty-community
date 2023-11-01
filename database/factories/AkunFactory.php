<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Akun>
 */
class AkunFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $gambarUrls = [
            'https://www.google.com/url?sa=i&url=https%3A%2F%2Fe.vnexpress.net%2Fnews%2Ftrend%2Fblackpink-jisoo-breaks-up-with-actor-boyfriend-4669048.html&psig=AOvVaw2BoYyQxXEZAmdg1p6sAoOT&ust=1698482127437000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCKi24JDplYIDFQAAAAAdAAAAABAE',
            'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.liputan6.com%2Fshowbiz%2Fread%2F4619094%2Fberi-dukungan-jennie-blackpink-bikin-atlet-olimpiade-gemetaran&psig=AOvVaw1ymfuX6fSb80gc8scaHY-e&ust=1698482102711000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqGAoTCLC65oTplYIDFQAAAAAdAAAAABDbAQ',
            'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.wowkeren.com%2Fberita%2Ftampil%2F00495827.html&psig=AOvVaw0D_secAWjtL5mNClrWJbQX&ust=1698482081517000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCMjzz7zplYIDFQAAAAAdAAAAABAE',
        ];

        return [
            'username' => fake()->userName(),
            'nama_lengkap' => fake()->name(),
            'admin' => false,
            'password' => '1',
            'gambar'=>fake()->randomElement($gambarUrls),
            // 'username';
            // 'nama_lengkap';
            // 'admin';
            // 'gambar';
        ];
    }
}
