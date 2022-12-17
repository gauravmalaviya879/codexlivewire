<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\members;
use Faker\Factory as Faker;
class memberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i=1;$i<=10;$i++){
            $faker = Faker::create();
            $member = new members();
            $member->name = $faker->name;
            $member->email = $faker->email;
            $member->contact = "12345568";
            $member->group_id  = 2;
            $member->save();
        }
   

    }
}
