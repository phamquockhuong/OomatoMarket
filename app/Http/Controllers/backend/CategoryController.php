<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        return view('admin.list_category',compact('category'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $category = Category::all();

       return view('admin.add_category',compact('category'));

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
                'name'=>'required|unique:categories,name'
            ],
            [
                'name.unique'=>'Category already exists',
                'name.required'=>'Category cannot be empty'
            ]
        );
        $categories = Category::create([
             'name'=>$request->name,
            'status'=>$request->status 
        ]);
        return redirect()->route('admincategory.index')->with('Ok','The category was created successfully');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   $category = Category::all();
        return view('admin.list_category',compact('category'));

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
        $cate = Category::where('id_cate',$id)->first();
        return view('admin.edit',compact('cate','category'));
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
                'name'=>'required'
            ],
            [
                'name.required'=>'Category cannot be empty'
            ]
        );
        Category::where('id_cate',$id)->update([
            'name'=>$request->name,
            'status'=>$request->status
        ]);
        return redirect()->route('admincategory.index')->with('Ok2','The category was successfully edited');
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
        Category::where('id_cate',$id)->delete();
        return redirect()->back()->withSucces('Xóa thành công');
    }
}
