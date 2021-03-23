<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{	
	protected $primaryKey = 'id_km';
    protected $table ='promotion';
    protected $fillable = ['name_km','status'];
    
}