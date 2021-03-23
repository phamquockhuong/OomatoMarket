<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;
use Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog_all = Blog::all();
        return view('admin.list_blog',compact('blog_all'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blog_all = Blog::all();

       return view('admin.add_blog',compact('blog_all'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|unique:blogs,name',
            'description'=>'required',
            'img_blog'=>'required',
           
        ],[
            'name.required'=>' Name Blog can be not null',
            'name.unique'=>' Name Blog already exists',
            'description.required'=>' Content Blog can be not null',
            'img_blog.required'=>'Image Blog can be not null'
            
        ]);
        if($request->has('img_blog')){
            $file = $request->img_blog;
            $file_name = $file->getClientOriginalName();
            $file->move(base_path('upload'),$file_name);
        }
        $blog = Blog::create([
           'name'=>$request->name,
           'id_user'=>Auth::user()->id,
           'description'=>$request->description,
           'img_blog'=>$file_name,
           
        ]);
         return redirect()->back();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog_all = Blog::all();
        $blog = Blog::where('id_blog',$id)->first();
        return view('admin.edit_blog',['blog'=>$blog]);
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
       $blog_all = Blog::all();



            if($request->img_blog == null){
                $slide = Blog::where('id_blog',$id)->update([
                   'name'=>$request->name,

                   'description'=>$request->description,
                   'status'=>$request->status,
                ]);
            }else{
                $file = $request->img_blog;
                $file_name = $file->getClientOriginalName();
                $file->move(base_path('upload'),$file_name);
                $slide = Blog::where('id_blog',$id)->update([
                   'name'=>$request->name,
                   'description'=>$request->description,
                   'img_blog'=>$file_name,
                   'status'=>$request->status,
                ]);

            }
        
         return redirect()->route('adminblog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::where('id_blog',$id)->delete();
        return redirect()->back()->withSucces('Xóa thành công');
    }
}
