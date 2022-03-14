<?php

namespace Tests\Browser;

use App\Models\{Game, GameSettings, Player};
use Database\Seeders\GameSettingsSeeder;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Throwable;

class DashboardTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * @return void
     * @throws Throwable
     */
    public function testDashboard(): void
    {
        $this->seed(GameSettingsSeeder::class);

        $game = Game::factory()->create();

        $game->settings()->save(GameSettings::first());

        $player = Player::factory()->game($game)->create();

        $this->browse(function (Browser $browser) use ($player) {
            $browser->loginAs($player)
                ->visit('/')
                ->waitForText($player->game->token)
                ->assertSee($player->game->token);
        });
    }
}
