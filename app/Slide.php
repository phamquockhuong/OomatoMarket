<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $table ='slides';
    protected $fillable = ['name_slide','content_slide','img_slide','status'];
}
