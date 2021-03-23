<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Method extends Model
{	
	protected $primaryKey = 'id_method';
    protected $table ='pays';
    protected $fillable = ['name_method','phiship','status'];
    
}