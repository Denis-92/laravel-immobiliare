<?php

use Illuminate\Database\Seeder;
use App\Agent;
use Faker\Generator as Faker;
class AgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for($i = 0; $i< 5; $i++) {
            $agent = new Agent();
            $agent->FullName = $faker->name();
            $agent->save();
        }
    }
}
