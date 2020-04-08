<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SprintModel extends Model
{
    protected $fillable = [
                'id',
                'id_priority',
                'id_status',
                'name',
                'expires_in',
              ];
    
    protected $table = "sprint";



    public static function getAllSprints(){

      return DB::table('sprint')
            ->join('priority', 'priority.id', '=', 'sprint.id_priority')
            ->join('status', 'status.id', '=', 'sprint.id_status')
            ->select(
                  'sprint.id',
                  'sprint.name',
                  'sprint.expires_in',
                  'priority.id AS id_priority',
                  'priority.name AS name_priority',
                  'priority.color AS color_priority',
                  'priority.background_color AS background_color_priority',
                  'status.id AS id_status',
                  'status.name AS name_status',
                  'status.color AS color_status',
                  'status.background_color AS background_color_status',
                  
                  )
            ->orderBy('id_priority', 'ASC')
            ->get();
   }
    
}
