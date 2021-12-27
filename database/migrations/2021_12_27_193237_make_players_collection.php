<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakePlayersCollection extends Migration
{
    /**
     * @description Run the migrations.
     * @return void
     */
    public function up(): void
    {
        Schema::create('players', function ($collection) {
            $collection->createIndex(
                [
                    ['name', 1],
                    ['game_id', 1]
                ],
                ['unique', true]
            );
        });
    }

    /**
     * @description Reverse the migrations.
     * @return void
     */
    public function down(): void
    {
        Schema::drop('players');
    }
}
