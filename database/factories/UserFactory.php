<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
//            'name' => $this->faker->name,
//            'email' => $this->faker->unique()->safeEmail,
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
//            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'password' => '$2y$10$jlBSInDeeRakYqlxBAfJROEtYNrpMBT3.3TDGk87KzuoBh4EVtA.S', // password 11111111
            'remember_token' => Str::random(10),
        ];
    }
}
