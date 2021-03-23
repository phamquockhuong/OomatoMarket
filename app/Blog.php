<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{	
	protected $primaryKey = 'id_blog';
   protected $table ='blogs';
   protected $fillable = ['name','id_user','img_blog','description','status'];

    public function name_user(){
    	return $this->hasOne('App\User','id','id_user');
    }
}
