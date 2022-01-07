<?php

namespace Database\Factories;

use App\{
    Enums\GameSettingsType,
    Models\GameSettings,
};
use Illuminate\Database\Eloquent\Factories\Factory;

class GameSettingsFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = GameSettings::class;

    /**
     * @return array
     */
    public function definition(): array
    {
        return [
            'type' => GameSettingsType::Standard(),
            'player_starting_money' => 1500,
            'start_passing_bonus' => 200,
        ];
    }

    public function speedDie(): GameSettingsFactory
    {
        return $this->state([
            'type' => GameSettingsType::SpeedDie(),
            'player_starting_money' => 2500,
            'start_passing_bonus' => 200,
        ]);
    }
}
