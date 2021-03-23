<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Features extends Model
{	
	protected $primaryKey = 'id_features';
    protected $table ='feature';
    protected $fillable = ['name','status'];
    
    // public function count_pro()
    // {
    // 	return $this->hasMany('App\Product','id_cate','id_cate');
    // }
}
