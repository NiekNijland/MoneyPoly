<?php

namespace Database\Seeders;

use App\Models\GameSettings;
use Illuminate\Database\Seeder;

class GameSettingsSeeder extends Seeder
{
    /**
     * @description Run the database seeds.
     * @return void
     */
    public function run(): void
    {
        GameSettings::factory()->create();
    }
}
