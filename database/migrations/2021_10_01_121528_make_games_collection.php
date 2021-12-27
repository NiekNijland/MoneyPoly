<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

final class MakeGamesCollection extends Migration
{
    /**
     * @description Run the migrations.
     * @return void
     */
    public function up(): void
    {
        Schema::create('games', function ($collection) {
            $collection->createIndex(['token', 1], ['unique', true]);
        });
    }

    /**
     * @description Reverse the migrations.
     * @return void
     */
    public function down(): void
    {
        Schema::drop('games');
    }
}
