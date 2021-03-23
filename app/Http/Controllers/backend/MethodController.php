<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Method;

class MethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $method = Method::all();
        return view('admin.list_method',compact('method'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $method = Method::all();

       return view('admin.add_method',compact('method'));

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
                'name_method'=>'required|unique:pays,name_method',
                'phiship'=>'required'
            ],
            [
                'name_method.unique'=>'Method already exists',
                'name_method.required'=>'Name method cannot be empty',
                'phiship.required'=>'Shiping method cannot be empty'
            ]
        );
        // $data = $request->all();
        $methods = Method::create([
            'name_method'=>$request->name_method,
            'phiship'=>$request->phiship,
            'status'=>$request->status 
        ]);
        return redirect()->route('adminmethod.index')->with('Ok','The method was created successfully');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   $method = Method::all();
        return view('admin.list_method',compact('method'));

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
        $meth = Method::where('id_method',$id)->first();
        return view('admin.edit_method',compact('meth','method'));
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
                'name_method'=>'required',
                'phiship'=>'required'
            ],
            [
                'name_method.required'=>'Name method cannot be empty',
                'phiship.required'=>'Shiping method cannot be empty'
            ]
        );
        
        Method::where('id_method',$id)->update([
            'name_method'=>$request->name_method,
            'phiship'=>$request->phiship,
            'status'=>$request->status
        ]);
        return redirect()->route('adminmethod.index')->with('Ok2','The method was successfully edited');
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
        Method::where('id_method',$id)->delete();
        return redirect()->back()->withSucces('Xóa thành công');
    }
}