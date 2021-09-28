<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(10),
            'description' => $this->faker->text(255),
            'logo' => $this->faker->image('public/storage',400,300, null, false),
            'image' => $this->faker->image('public/storage',400,300, null, false),
            'background' => $this->faker->hexColor(),
            'user_id' => \App\Models\User::factory(),
        ];
    }
}
