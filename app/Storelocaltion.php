<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Storelocaltion extends Model
{
	protected $primaryKey = 'id_sl';
    protected $table ='storelocaltion';
    protected $fillable = ['address','phone','status'];
}