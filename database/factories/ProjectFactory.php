<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Project>
 */
class ProjectFactory extends Factory
{
    protected $model = Project::class;

    public function definition(): array
    {
        return [
            'name' => fake()->sentence(3),  
            'description' => fake()->paragraph(),
            'image' => null,
            'repository_url' => fake()->url(),
            'demo_url' => fake()->url(),
            'technologies' => json_encode(['Laravel', 'React', 'MySQL']),
            'active' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}