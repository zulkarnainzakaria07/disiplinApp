<?php

namespace Database\Factories;

use App\Models\Siswa;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Siswa::class;
   
    
    public function definition(): array
    {
        $faker = FakerFactory::create('id_ID');
        return [
            'nis' => $faker->numberBetween(1000,1999),
            'nama' => $faker->name,
            'jk' => $faker->randomElement(['L', 'P']),
            'tahunMasuk' => $faker->year($max = 'now'),
            'tempatLahir' => $faker->city,
            'tanggalLahir' => $faker->date($format = 'Y-m-d', $max = 'now'),
            'telp' => $faker->phoneNumber,
        ];
    }
}
