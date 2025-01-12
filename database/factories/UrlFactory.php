<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Url;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Url>
 */
class UrlFactory extends Factory
{
    
    protected $model = Url::class;

    public function definition(): array
    {
        return [
            'original_url' => $this->faker->url,
            'short_code' => $this->faker->unique()->regexify('[A-Za-z0-9]{6}'),
        ];
    }
}
