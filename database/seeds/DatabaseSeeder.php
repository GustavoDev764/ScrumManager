<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(StatusSeeder::class);
         $this->call(PrioritySeeder::class);
         $this->call(SprintSeeder::class);
         $this->call(FunctionalitySeeder::class);
    }
}
