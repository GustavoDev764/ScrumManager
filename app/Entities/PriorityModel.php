<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class PriorityModel extends Model
{
    protected $fillable = ['id','name','color', 'background_color'];
    protected $table = "priority";
}
