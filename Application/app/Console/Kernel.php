<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        \App\Console\Commands\Inspire::class,
        \App\Console\Commands\ImportAll::class,
        \App\Console\Commands\ImportDailyTrainData::class,
        \App\Console\Commands\ImportCrossings::class,
        \App\Console\Commands\ImportRailMapData::class,
        \App\Console\Commands\ImportExtendedCrossingData::class,
        \App\Console\Commands\ImportTIPLOCcrsMappings::class,
        \App\Console\Commands\ImportTrainRoutes::class,
        \App\Console\Commands\ImportTrainRoutesToCrossingMap::class,
        \App\Console\Commands\ImportRTTrains::class
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('inspire')
                 ->hourly();
    }
}
