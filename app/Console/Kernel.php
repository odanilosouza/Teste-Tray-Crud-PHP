<?php

namespace App\Console;

use App\Models\Venda;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            $dataAtual = Carbon::today();

            $vendas = Venda::whereDate('data', $dataAtual)->get();

            $totalVendas = $vendas->sum('valor');

            return [
                'data' => $dataAtual->format('d-m-Y'),
                'total' => $totalVendas,
            ];
        })->daily('20:00');
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}



