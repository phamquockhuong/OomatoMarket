<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog_type extends Model
{
   protected $primaryKey = 'id_blog_type';
   protected $table ='id_blog_types';
   protected $fillable = ['name','content','img_blog_type','id_blog','status'];

   public function blog(){
    	return $this->hasOne('App\Blog','id_blog','id_blog');
    }
}
