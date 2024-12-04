<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Models\Nombres;

class createname extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:createname';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $dateNow = Carbon::now();

        Nombres::create([
            'name'=> 'Abraham'.$dateNow->format('Y-m-d H.i.s'),
        ]);
    }
}
