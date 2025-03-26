<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Subscriber;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

final class SubscriberFactory extends Factory
{
    protected $model = Subscriber::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'status' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
