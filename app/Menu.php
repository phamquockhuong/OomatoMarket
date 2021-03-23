<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
	protected $primaryKey = 'id_faq';
    protected $table ='menus';
    protected $fillable = ['name_quesfaq','name_ansfaq','status'];
}