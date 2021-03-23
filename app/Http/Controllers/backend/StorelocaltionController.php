<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Storelocaltion;

class StorelocaltionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $storelocaltion = Storelocaltion::all();
        return view('admin.list_storelocaltion',compact('storelocaltion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $storelocaltion = Storelocaltion::all();

       return view('admin.add_storelocaltion',compact('storelocaltion'));
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
                'address'=>'required',
                'phone'=>'required'
            ],
            [
                'address.required'=>'Address cannot be empty.',
                'phone.required'=>'Phone cannot be empty.'
            ]
        );
        $storelocaltion = Storelocaltion::create([
            'address'=>$request->address,
            'phone'=>$request->phone,
            'status'=>$request->status 
        ]);
        return redirect()->route('adminstorelocaltion.index')->with('Ok','The Store Localtion was created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $localtion = Localtion::all();
        return view('admin.list_storelocaltion',compact('localtion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $storelocaltion = Storelocaltion::all();
        $sto_local = Storelocaltion::where('id_sl',$id)->first();
        return view('admin.edit_storelocaltion',compact('sto_local','storelocaltion'));
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
                'address'=>'required',
                'phone'=>'required'
            ],
            [
                'address.required'=>'Address cannot be empty.',
                'phone.required'=>'Phone cannot be empty.'
            ]
        );
        Storelocaltion::where('id_sl',$id)->update([
            'address'=>$request->address,
            'phone'=>$request->phone,
            'status'=>$request->status
        ]);
        return redirect()->route('adminstorelocaltion.index')->with('Ok2','The Store Localtion was successfully edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Storelocaltion::where('id_sl',$id)->delete();
        return redirect()->back()->withSucces('Xóa thành công');
    }
}