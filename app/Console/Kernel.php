<?php

namespace App\Console;

use App\Jobs\Employee\DeleteUnusedTokens;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * @description The Artisan commands provided by your application.
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * @descrption Define the application's command schedule.
     * @param Schedule $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->command('horizon:snapshot')->everyFiveMinutes();

        $schedule->job(DeleteUnusedTokens::class)
            ->daily()
            ->onOneServer();
    }

    /**
     * @description Register the commands for the application.
     * @return void
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
