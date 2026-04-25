<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

// long running process
Schedule::withoutOverlapping(1440 * 30)->everyMinute()->runInBackground()->group(function () {
    Schedule::command('queue:work -v --queue=messages,high,default --tries=3 --rest=1')
        ->onSuccess(fn (Stringable $output) => logger()->info('Succeded Command: queue:work -v --queue=messages,high,default --tries=3 --rest=1', ['output' => $output]))
        ->onFailure(fn (Stringable $output) => logger('Failed Command: queue:work -v --queue=messages,high,default --tries=3 --rest=1', ['output' => $output]));
});
