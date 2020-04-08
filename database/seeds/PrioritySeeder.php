<?php

use Illuminate\Database\Seeder;
use App\Entities\PriorityModel;

class PrioritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PriorityModel::create([
            'name'             => 'Impresidivel!',
            'color'            =>'#721c24',
            'background_color' =>'#f8d7da',
        ]);

        PriorityModel::create([
            'name'=> 'Importante',
            'color'            =>'#856404',
            'background_color' =>'#fff3cd',
            
        ]);

        PriorityModel::create([
            'name'=> 'Seria Bom Ter',
            'color'            =>'#004085',
            'background_color' =>'#cce5ff',
        ]);
    }
}
