<?php

namespace App\Console\Commands;

use App\Models\Stock;
use Illuminate\Console\Command;

class AlertExpiringProductCommand extends Command
{
    public function __construct(Stock $stock)
    {
        parent::__construct();
        $this->stock = $stock;
    }
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:alert-expiring-product-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Alerts the admin of expiring products';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Getting products that will expire in 3 months');
        $expiringInThreeMonths = $this->stock->expiryThreeMonth()->get();

        if ($expiringInThreeMonths->count()) {
            
        }


    }
}
