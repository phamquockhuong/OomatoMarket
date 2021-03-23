<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    protected $table ='order_details';
    protected $fillable = ['id_product','id_order','price','quantity','amount','ship','total'];
    public function product()
    {
    	return $this->hasOne('App\Product', 'id_product', 'id_product');
    }
    public function order()
    {
    	return $this->hasOne('App\Order', 'id_order', 'id_order');
    }
}
