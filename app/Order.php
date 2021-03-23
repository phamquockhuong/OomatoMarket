<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Order_detail;

class Order extends Model
{
    protected $table ='orders';
    protected $primaryKey = "id_order";
    protected $fillable = ['id_user','name','phone','address','ship','id_pay','status'];

    public function method (){
    	return $this->hasOne('App\Method','id_method','id_pay');
    }
    public function orderDetail()
    {
    	return $this->belongsTo('App\Order_detail','id_order','id_order');
    }
    
    public function count_pay()
    {
        return $this->hasMany('App\Order_detail','id_order','id_order');
    }
}
