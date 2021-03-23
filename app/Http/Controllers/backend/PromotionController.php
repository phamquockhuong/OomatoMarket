<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Promotion;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promotion = Promotion::all();
        return view('admin.list_promotion',compact('promotion'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $promotion = Promotion::all();

       return view('admin.add_promotion',compact('promotion'));

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
                'name_km'=>'required|email|unique:promotion,name_km'
            ],
            [
                'name_km.unique'=>'Email already exists',
                'name_km.required'=>'Email cannot be empty',
                'name_km.email'=>'Incorrect email format'

            ]
        );
       
        $promotions = Promotion::create([
             'name_km'=>$request->name_km,
            
        ]);
         return redirect()->back()->with('Ok','The promotion was created successfully');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   $promotion = Promotion::all();
        return view('admin.list_promotion',compact('promotion'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $promotion = Promotion::all();
        $promo = Promotion::where('id_km',$id)->first();
        return view('admin.edit_promotion',compact('promo','promotion'));
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


        $this->validate($request,
            [
                'name_km'=>'required|email|unique:promotion,name_km'
            ],
            [
                'name_km.required'=>'Email cannot be empty',
                'name_km.email'=>'Incorrect email format'

            ]
        );
        Promotion::where('id_km',$id)->update([
            'name_km'=>$request->name_km,
            'status'=>$request->status
        ]);
        return redirect()->route('adminpromotion.index')->with('Ok2','The promotion was successfully edited');
        
        // return back()->withInput();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Promotion::where('id_km',$id)->delete();
        return redirect()->back()->withSucces('Xóa thành công');
    }
}