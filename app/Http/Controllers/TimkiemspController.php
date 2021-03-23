<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class TimkiemspController extends Controller
{
	public function search1(Request $req)
	{
		
		$timkiem = Product::where('name','like','%'.$req->key.'%')
							
							->paginate(12, ['*'], 'pag');
							//dd($timkiem);
		return view('admin.search',compact('timkiem'));
	}

}
