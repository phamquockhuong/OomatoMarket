<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Method;
use App\Order;
use App\Order_detail;
use Auth;
use DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $method = Method::all();
        $order = Order::all();
        return view('admin.list_order',compact('method','order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $method = Method::all();
        $order = Order::all();
        return view('website.ship',compact('method','order'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
            [
                'name'=>'required',
                'address'=>'required',
                'phone'=>'required',
            ],
            [
                
                'name.required'=>'Name cannot be empty',
                'address.required'=>'Address cannot be empty',
                'phone.required'=>'Phone cannot be empty',
            ]
        );
        // dd(Auth::user()->id);
        if(Auth::check()){
        $order = Order::create([
           'id_user'=>Auth::user()->id,
           'name'=>$request->name,
           'phone'=>$request->phone,
           'address'=>$request->address,
           'ship'=>$request->ship,
           'id_pay'=>$request->id_pay,
        ]);

        $order_detail = session('procart');

        foreach ($order_detail as $value) { 
            $amount = ($value['price'])*($value['quantity']); 
            // dd($total);
            $ds_order = Order_detail::create([
               'id_product'=>$value['id_product'],
               'id_order'=>$order->id_order,
               'quantity'=>$value['quantity'],
               'price'=>$value['price'],
               'amount'=>$amount,
            
            ]); 
             session(['procart'=> null]);
        }
        return redirect()->route('shiping')->with('Ok',' created successfully');
        }else{
            return redirect()->route('login')->with('Ok','uyty');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $method = Method::all();
        $order = Order_detail::all();
        //sdd($order);
       
        $ord = Order_detail::where('id_order',$id)->get();
        //dd($ord);
        return view('admin.detail_order',compact('ord','order','method'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $method = Method::all();
        $order = Order::all();

       
        $ord = Order::where('id_order',$id)->first();
        
        return view('admin.edit_order',compact('ord','order','method'));
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
       Order::where('id_order',$id)->update([
           'name'=>$request->name,
           'phone'=>$request->phone,
           'address'=>$request->address,
           'ship'=>$request->ship,
           'id_pay'=>$request->id_pay,
           'status'=>$request->status,
            ]);

       return redirect()->route('adminorder.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('order_details')->where('id_order', $id)->delete();
        Order::where('id_order',$id)->delete();
        return redirect()->back()->withSucces('Xóa thành công');
    }
}
