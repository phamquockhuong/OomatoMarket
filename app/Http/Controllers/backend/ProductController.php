<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Image;
use DB;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $category = Category::all();
        $product = Product::all();
        return view('admin.list_product',compact('product','category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $category = Category::all();
        $product = Product::all();
       return view('admin.add_product',compact('category','product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   


      $images = json_decode($request->img_productList);
        
        $id_product = trim($request->id_product,"localhost/oomato_market");

        // $img_product = trim($request->img_product,"http://localhost/oomato_market/uploads/");
        $item = explode("uploads/",$request->img_product);
        $img_product = $item[1];
        
       $product = Product::create([
       'name'=>$request->name,
       'id_cate'=>$request->id_cate,
       'price'=>$request->price>0,
       'sale_price'=>$request->sale_price>0,
       'new_product'=>$request->new_product>0,
       'title'=>$request->title,
       'img_product'=>$img_product,
       'amount'=>$request->amount,
       'status'=>$request->status,
        ]);
    
       foreach ($images as $value) { 
          // $images = trim($value,"http://localhost/oomato_market/uploads/");
          $tem = explode("uploads/", $value);
          // echo ($tem[1])."<br />";
          $img = $tem[1];
          // dd($value);
          DB::table('image_products')->insert([
            'id_product'=>$product->id_product,
            'image'=>$img
          ]);
       }       
       return redirect()->route('adminproduct.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
       
        $category = Category::all();
        $product = Product::all();

        $img_product = DB::table('image_products')->where('id_product',$id)->get();
        $pro = Product::where('id_product',$id)->first();
        
        return view('admin.edit_product',compact('pro','product','category','img_product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   

        $item = explode("uploads/",$request->img_product);
        $img_product = $item[1];
        Product::where('id_product',$id)->update([
            'name'=>$request->name,
           'id_cate'=>$request->id_cate,
           'price'=>$request->price,
           'sale_price'=>$request->sale_price,
           'new_product'=>$request->new_product,
           'title'=>$request->title,
           'img_product'=>$img_product,
            'amount'=>$request->amount,
           'status'=>$request->status,
        ]);

        $images = json_decode($request->img_productList);
        DB::table('image_products')->where('id_product', $id)->delete();
       foreach ($images as $value) { 
          // $images = trim($value,"http://localhost/oomato_market/uploads/");
          $tem = explode("uploads/", $value);
        // echo ($tem[1])."<br />";
        $img = $tem[1];
        // dd($value);
          DB::table('image_products')->insert([
            'id_product'=>$id,
            'image'=>$img
          ]);
       }
        return redirect()->route('adminproduct.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        // $images = json_decode($request->img_productList);
        DB::table('image_products')->where('id_product', $id)->delete();
        Product::where('id_product',$id)->delete();
        return redirect()->back()->withSucces('Xóa thành công');
    }
}
