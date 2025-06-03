<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define los comandos programados de la aplicación.
     */
    protected function schedule(Schedule $schedule)
    {
        // Ejemplo de tarea programada: ejecutar un comando cada día a medianoche
        $schedule->command('inspire')->daily();
    }

    /**
     * Registra los comandos de la aplicación.
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
