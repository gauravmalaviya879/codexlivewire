<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\group;
use Faker\Factory as Faker;
class groupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i=1;$i<=5;$i++){
        $faker = Faker::create();
        $group = new group();
        $group->description = "this".$faker->name."good group";
        $group->name = $faker->name;
        $group->logo = 'uploads/y.jpg';
        $group->save();
        }
    }
}
