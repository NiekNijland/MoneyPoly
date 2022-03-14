<?php

namespace Database\Factories;

use App\Enums\GameStatusEnum;
use App\Models\Game;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

class GameFactory extends Factory
{
    protected $model = Game::class;

    /**
     * @return array
     */
    #[ArrayShape([
        'name' => 'string',
        'status' => 'int',
        'token' => 'string',
    ])]
    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'status' => GameStatusEnum::Active(),
            'token' => $this->faker->uuid,
        ];
    }
}
