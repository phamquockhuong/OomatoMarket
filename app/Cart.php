<?php

namespace App;
// use Illuminate\Support\Facades\Session;
class Cart
{
	public $items = null;
	public $totalQty = 0;
	public $totalPrice = 0;

	public function __construct(){
		$this->items = session('procart') ? session('procart') : [];
		$this->totalQty = $this->getTotalQty();
		$this->totalPrice = $this->getTotalPrice();
	}

	public function add($item, $qtt){
		if (isset($this->items[$item->id_product])) {
			$this->items[$item->id_product]['quantity'] = $qtt;//+=$qtt
			
		}else{
			$cart_item = [
				'id_product' => $item->id_product, 
				'name' => $item->name, 
				'price' => $item->sale_price ? $item->sale_price : $item->price, 
				'img_product' => $item->img_product, 
				'quantity' => $qtt
			];

			$this->items[$item->id_product] = $cart_item;
		}
		// dd(session('procart'));
		session(['procart'=> $this->items]); 

	}
	public function add2($item, $qtt){
		if (isset($this->items[$item->id_product])) {
			$this->items[$item->id_product]['quantity'] += $qtt;//+=$qtt
			
		}else{
			$cart_item = [
				'id_product' => $item->id_product, 
				'name' => $item->name, 
				'price' => $item->sale_price ? $item->sale_price : $item->price, 
				'img_product' => $item->img_product, 
				'quantity' => $qtt
			];

			$this->items[$item->id_product] = $cart_item;
		}
		// dd(session('procart'));
		session(['procart'=> $this->items]); 

	}

	//xóa 1
	public function reduceByOne($id){
		if (isset($this->items[$id])) {
			// dd($item);
			unset($this->items[$id]);
			session(['procart'=> $this->items]); 
		}
	}

	// //xóa nhiều
	public function removeItem($id){
		session(['procart'=> null]); 
	}

	public function getTotalQty(){
		$total = 0;
		foreach ($this->items as $key => $item) {
			$total += $item['quantity'];
		}
		return $total;
	}
	public function getTotalPrice(){
		$total = 0;
		foreach ($this->items as $key => $item) {
			$total += $item['quantity']*$item['price'];
		}

		return $total;
	}

	public function getPriceById($id){
		$total = 0;
		if (isset($this->items[$id])) {
			$total = $this->items[$id]['quantity']*$this->items[$id]['price'];
		}

		return $total;
	}
}
