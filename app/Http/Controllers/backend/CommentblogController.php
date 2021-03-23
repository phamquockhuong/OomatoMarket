<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Commentblog;

class CommentblogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comment_blog_all = Commentblog::all();
        return view('admin.list_comment_blog',compact('comment_blog_all'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
        $comment_blog_all = Commentblog::all();
        $comment_blog = Commentblog::where('com_blog_id',$id)->first();
        return view('admin.edit_comment_blog',['comment_blog'=>$comment_blog]);
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
       Commentblog::where('com_blog_id',$id)->update([
            'id_blog'=>$request->id_blog,
            'com_blog_id'=>$request->com_blog_id,
            'com_blog_content'=>$request->com_blog_content
        ]);
         return redirect()->route('admin.comment_blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Commentblog::where('com_blog_id',$id)->delete();
        return redirect()->back()->withSucces('Xóa thành công');
    }
}



