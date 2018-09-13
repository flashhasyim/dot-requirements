<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Library\Rajaongkir;

class Localization extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'localization:dump';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Dump Rajaongir API provinces & cities data to Database';

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
        $this->info('Setting up dump data and seeding with Raja Ongkir API .... .');
        $bar = $this->output->createProgressBar(2);

        /**
         * Seeder for province who has already connect with Raja Ongkir 
         * API 
         */
        $this->call('db:seed', [
            '--class' => 'ProvinceTableSeeder',
        ]);
        $bar->advance();
        
        /**
         * Seeder for cities who has already connect with Raja Ongkir 
         * API 
         */
        $this->call('db:seed', [
            '--class' => 'CityTableSeeder',
        ]);
        $bar->advance();

        $bar->finish();
        $this->info('');
        $this->info('Dump & seed data is done !');
    }
}
