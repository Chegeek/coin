<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Service\TradingService;

class StoreRates extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rates:store';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetches the current currency rates and stores them in the db';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $trading = \App::make(TradingService::class);
        $trading->storeCurrentRates();

    }
}
