<?php

namespace Database\Factories;

use App\Enums\PlayerRoleEnum;
use App\Models\{Game, Player};
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

class PlayerFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Player::class;

    /**
     * @return array
     */
    #[ArrayShape([
        'name' => 'string',
        'money' => 'int',
        'role' => 'int',
    ])]
    public function definition(): array
    {
        return [
            'name' => $this->faker->firstName,
            'money' => 1500,
            'role' => PlayerRoleEnum::Both()->value,
        ];
    }

    public function role(PlayerRoleEnum $roleEnum): PlayerFactory
    {
        return $this->state([
            'role' => $roleEnum->value
        ]);
    }

    public function game(Game $game): PlayerFactory
    {
        return $this->state([
            'game_id' => $game->id,
        ]);
    }
}
