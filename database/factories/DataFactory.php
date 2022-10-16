<?php

namespace Database\Factories;
use App\Models\data;

use Illuminate\Database\Eloquent\Factories\Factory;

class DataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //  
            'nama_lengkap' => $this->faker->sentence(mt_rand(1,1)),
            'alamat_domisili'=> $this->faker->sentence(mt_rand(1,1)),
            'jenis_kelamin' => $this->faker->sentence(mt_rand(1,1)),
            'pendidikan_terakhir'=> $this->faker->sentence(mt_rand(1,1)),
            'jurusan'=> $this->faker->sentence(mt_rand(1,1)),
            'hari'=> $this->faker->dateTimeThisMonth('+12 days')
            // 'pendidikan_terakhir'=> $this->faker->randomElement(['SD', 'SMP', 'SMA', 'S1', 'S2']),

        ];
    }
}
