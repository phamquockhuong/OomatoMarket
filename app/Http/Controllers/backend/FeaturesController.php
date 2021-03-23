<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Features;

class FeaturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $features = Features::all();
        return view('admin.list_features',compact('features'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $features = Features::all();

       return view('admin.add_features',compact('features'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // $data = $request->all();
        $features = Features::create([
             'name'=>$request->name,
            'status'=>$request->status 
        ]);
        return redirect()->route('adminfeatures.index');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        // $category = Category::all();
        // return view('admin.list_category',compact('category'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $features = Features::all();
        $fea = Features::where('id_features',$id)->first();
        return view('admin.edit_features',compact('fea','features'));


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
        Features::where('id_features',$id)->update([
            'name'=>$request->name,
            'status'=>$request->status
        ]);
        return redirect()->route('adminfeatures.index');
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
        Features::where('id_features',$id)->delete();
        return redirect()->back()->withSucces('Xóa thành công');
    }
}
