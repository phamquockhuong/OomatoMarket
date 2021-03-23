<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';
    protected $primaryKey = 'com_id';
    protected $fillable = ['com_content','id_product','id'];

    public function user(){
    	return $this->hasOne('App\User','id','id');
    }
}