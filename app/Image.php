<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table ='image_products';
    protected $fillable = ['id_product','image'];

}
