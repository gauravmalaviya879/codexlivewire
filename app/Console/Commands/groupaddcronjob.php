<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\group;
use Faker\Factory as Faker;
class groupaddcronjob extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'group:add';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'group add every minit';

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
     * @return int
     */
    public function handle()
    {  
        $faker = Faker::create();
        $group = new group();
        $group->description = "this".$faker->name."good group";
        $group->name = $faker->name;
        $group->logo = 'uploads/y.jpg';
        $group->save();
        $this->info('great data add in group table');
       
    }
}
