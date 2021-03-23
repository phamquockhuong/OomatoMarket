<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{	
	protected $primaryKey = 'id_cate';
    protected $table ='categories';
    protected $fillable = ['name','parent_id','status'];
    
    public function count_pro()
    {
    	return $this->hasMany('App\Product','id_cate','id_cate');
    }
}
