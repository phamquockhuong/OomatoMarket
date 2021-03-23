<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ='products';
    protected $primaryKey = "id_product";
    protected $fillable = ['name','id_cate','price','sale_price','new_product','title','img_product','amount','status'];

    public function category(){
    	return $this->hasOne('App\Category','id_cate','id_cate');
    }
    public function listimage()
    {
    	return $this->hasMany('App\Image','id_product','id_product');
    }
    public function orderDetail(){
        return $this->belongsTo('App\Order_detail','id_product','id_product');
    }

    
}
