<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Entities\SprintModel;


class SprintSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SprintModel::create([
            'id_priority' => 1,
            'id_status'   => 2,
            'name'        => 'Minimo Funcional',
            'expires_in'  => '2020-04-18',
        ]);

        SprintModel::create([
            'id_priority' => 1,
            'id_status'   => 4,
            'name'        => 'Cria Telas',
            'expires_in'  => '2020-04-18',
        ]);


        SprintModel::create([
            'id_priority' => 2,
            'id_status'   => 3,
            'name'        => 'Uma Otima Ideia',
            'expires_in'  => '2020-05-02',
        ]);
        
        SprintModel::create([
            'id_priority' => 3,
            'id_status'   => 1,
            'name'        => 'Implementa no Futuro',
            'expires_in'  => '2020-05-15',
        ]);
        
       
    }
}
