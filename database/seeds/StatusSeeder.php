<?php

use Illuminate\Database\Seeder;
use App\Entities\StatusModel;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        StatusModel::create([
            'name'=> 'Awaiting',
            'color'            =>'#ffffff',
            'background_color' =>'#f5c736',
        ]);

        StatusModel::create([
            'name'=> 'Running',
            'color'            =>'#4439a2',
            'background_color' =>'#39ffe9',
        ]);

        StatusModel::create([
            'name'=> 'Stopped',
            'color'            =>'#f9f9f9',
            'background_color' =>'#dc0013',
        ]);

        StatusModel::create([
            'name'=> 'Finished',
            'color'            =>'#155724',
            'background_color' =>'#00ff3d',
        ]);

    }
}
