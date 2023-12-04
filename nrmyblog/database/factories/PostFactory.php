<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;


class PostFactory extends Factory
{

  public function definition()
  {
    return [
      'title' => fake()->sentence(),
      'content' => fake()->text(),
      'user_id' => User::all()->count() ? User::all()->random()->id : 0
    ];
  }
}
