<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentblog extends Model
{
    protected $table = 'commentblog';
    protected $primaryKey = 'com_blog_id';
    protected $fillable = ['com_blog_content','id_blog','id'];

    public function user(){
    	return $this->hasOne('App\User','id','id');
    }
}