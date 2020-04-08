<?php

use Illuminate\Database\Seeder;
use App\Entities\FunctionalityModel;

class FunctionalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FunctionalityModel::create([
            'id_priority' => rand(1,3),
            'id_status' => rand(1,3),
            'id_sprint'=> rand(1,3),
            'name'=> 'Cadastra Usuarios',
            'description'=> 'teste',
        ]);

        FunctionalityModel::create([
            'id_priority' => rand(1,3),
            'id_status' => rand(1,3),
            'id_sprint'=> rand(1,3),
            'name'=> 'Editar Usuarios',
            'description'=> 'teste',
        ]);

        FunctionalityModel::create([
            'id_priority' => rand(1,3),
            'id_status' => rand(1,3),
            'id_sprint'=> rand(1,3),
            'name'=> 'Deleta Usuarios',
            'description'=> 'teste',
        ]);
        
        FunctionalityModel::create([
            'id_priority' => rand(1,3),
            'id_status' => rand(1,3),
            'id_sprint'=> rand(1,3),
            'name'=> 'Cria Tela de Login',
            'description'=> 'teste',
        ]);

        FunctionalityModel::create([
            'id_priority' => rand(1,3),
            'id_status' => rand(1,3),
            'id_sprint'=> rand(1,3),
            'name'=> 'Cria Recupera Senha',
            'description'=> 'teste',
        ]);

        FunctionalityModel::create([
            'id_priority' => rand(1,3),
            'id_status' => rand(1,3),
            'id_sprint'=> rand(1,3),
            'name'=> 'Fazer Relatorio de Vendas',
            'description'=> 'teste',
        ]);

        FunctionalityModel::create([
            'id_priority' => rand(1,3),
            'id_status' => rand(1,3),
            'id_sprint'=> rand(1,3),
            'name'=> 'Fazer Relatorio de Compras',
            'description'=> 'teste',
        ]);

        FunctionalityModel::create([
            'id_priority' => rand(1,3),
            'id_status' => rand(1,3),
            'id_sprint'=> rand(1,3),
            'name'=> 'Fazer Relatorio de Clientes',
            'description'=> 'teste',
        ]);
    }
}
