<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FunctionalityModel extends Model
{
    protected $fillable = [
        'id',
        'id_priority',
        'id_status',
        'id_sprint',
        'name',
        'description',
    ];
    
    protected $table = "functionality";

    public static function getFindByIdSprint($id){
        return DB::table('functionality')
        ->join('priority', 'priority.id', '=', 'functionality.id_priority')
        ->join('status', 'status.id', '=', 'functionality.id_status')
        ->select(
              'functionality.id',
              'functionality.name',
              'priority.id AS id_priority',
              'priority.name AS name_priority',
              'priority.color AS color_priority',
              'priority.background_color AS background_color_priority',
              'status.id AS id_status',
              'status.name AS name_status',
              'status.color AS color_status',
              'status.background_color AS background_color_status',
              
              )
        ->where('id_sprint', '=', $id)
        ->orderBy('id_priority', 'ASC')
        ->get();
    }

    public static function getSprintNull()
    {
        return DB::table('functionality')
            ->join('priority', 'priority.id', '=', 'functionality.id_priority')
            ->join('status', 'status.id', '=', 'functionality.id_status')
            ->select(
              'functionality.id',
              'functionality.name',
              'priority.id AS id_priority',
              'priority.name AS name_priority',
              'priority.color AS color_priority',
              'priority.background_color AS background_color_priority',
              'status.id AS id_status',
              'status.name AS name_status',
              'status.color AS color_status',
              'status.background_color AS background_color_status',
            )
            ->where('id_sprint', '=', null)
            ->orderBy('id_priority', 'ASC')
            ->get(); 
    }

}
