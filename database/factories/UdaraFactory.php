<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Udara; // Pastikan ini adalah namespace yang benar untuk model Udara Anda
use Illuminate\Support\Carbon;

class UdaraFactory extends Factory
{
    protected $model = Udara::class; // Pastikan ini sesuai dengan model yang Anda gunakan

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'mq_135' => $this->faker->numberBetween(80, 150),
            'mq_09' => $this->faker->numberBetween(80, 150),
            'mq_07' => $this->faker->numberBetween(80, 150),
            'created_at' => now()->toDateString() // Ini akan menggunakan tanggal saat ini
        ];
    }

    /**
     * Configure the model factory.
     *
     * @return $this
     */
    public function configure()
    {
        return $this->afterMaking(function (Udara $udara) {
            static $date = null;

            if (is_null($date)) {
                $date = Carbon::createFromFormat('Y-m-d', '2024-05-01');
            } else {
                $date->addDay();
            }

            // Reset tanggal jika melewati 9 Mei 2024
            if ($date->gt(Carbon::createFromFormat('Y-m-d', '2024-05-26'))) {
                $date = Carbon::createFromFormat('Y-m-d', '2024-04-01');
            }

            $udara->created_at = $date->format('Y-m-d H:i:s');
        });
    }
}
