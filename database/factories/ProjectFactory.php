<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=> fake()-> words(3, true),
            // 'main_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'description'=>  fake() -> paragraph(),
            'repo_link'=> fake()->url(),
            'release_date'=> fake()-> dateTimeBetween()
        ];
    }
}
