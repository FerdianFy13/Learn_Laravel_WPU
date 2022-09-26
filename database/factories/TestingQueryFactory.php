<?php

namespace Database\Factories;

use App\Models\TestingQuery;
use Illuminate\Database\Eloquent\Factories\Factory;

class TestingQueryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TestingQuery::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nama_tagihan' => $this->faker->name,
            'jumlahtagihan_tagihan' => $this->faker->numberBetween(1000, 10000),
            'bulan_tagihan' => $this->faker->numberBetween(1, 12),
            'status_tagihan' => $this->faker->randomElement([
                'Belum Lunas',
                'Lunas',
            ]),
        ];
    }
}
