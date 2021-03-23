<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slide;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slide_all = Slide::all();
        return view('admin.list_slide',compact('slide_all'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $slide_all = Slide::all();

       return view('admin.add_slide',compact('slide_all'));
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
                'name_slide'=>'required|unique:slides,name_slide'
            ],
            [
                'name_slide.unique'=>'Slide already exists',
                'name_slide.required'=>'Name slide cannot be empty'
            ]
        );
        if($request->has('img_slide')){
            $file = $request->img_slide;
            $file_name = $file->getClientOriginalName();
            $file->move(base_path('upload'),$file_name);
        }
        $slide = Slide::create([
           'name_slide'=>$request->name_slide,
           'content_slide'=>$request->content_slide,
           'img_slide'=>$file_name,
           'status'=>$request->status,
        ]);
        return redirect()->route('adminslide.index')->with('Ok','The siled was created successfully');
        
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
    {   $slide_all = Slide::all();
        $slide = Slide::where('id_slide',$id)->first();
        return view('admin.edit_slide',['slide'=>$slide]);
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
                'name_slide'=>'required'
            ],
            [
                
                'name_slide.required'=>'Name slide cannot be empty'
            ]
        );
        $slide_all = Slide::all();
            if($request->img_slide == null){
                $slide = Slide::where('id_slide',$id)->update([
                   'name_slide'=>$request->name_slide,
                   'content_slide'=>$request->content_slide,
                   'status'=>$request->status,
                ]);
            }else{
                $file = $request->img_slide;
                $file_name = $file->getClientOriginalName();
                $file->move(base_path('upload'),$file_name);
                $slide = Slide::where('id_slide',$id)->update([
                   'name_slide'=>$request->name_slide,
                   'content_slide'=>$request->content_slide,
                   'img_slide'=>$file_name,
                   'status'=>$request->status,
                ]);

            }
        
         return redirect()->route('adminslide.index')->with('Ok2','The siled was updateed successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Slide::where('id_slide',$id)->delete();
        return redirect()->back()->withSucces('Xóa thành công');
    }
}
