<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Menu;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = Menu::all();
        return view('admin.list_menu',compact('menu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu = Menu::all();

       return view('admin.add_menu',compact('menu'));
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
                'name_quesfaq'=>'required|unique:menus,name_quesfaq',
                'name_ansfaq'=>'required|unique:menus,name_ansfaq'
            ],
            [
                'name_quesfaq.unique'=>'Frequently asked questions already exists',
                'name_quesfaq.required'=>'Frequently asked questions cannot be empty',
                'name_ansfaq.unique'=>'Answers frequently asked questions already exists',
                'name_ansfaq.required'=>'Answers frequently asked questions cannot be empty'
            ]
        );
        $menu = Menu::create([
            'name_quesfaq'=>$request->name_quesfaq,
            'name_ansfaq'=>$request->name_ansfaq,
            'status'=>$request->status 
        ]);
        return redirect()->route('adminmenu.index')->with('Ok','The FAQ was created successfully');
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
        $menu = Menu::all();
        $navbar = Menu::where('id_faq',$id)->first();
        return view('admin.edit_menu',compact('navbar','menu'));
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
                'name_quesfaq'=>'required',
                'name_ansfaq'=>'required'
            ],
            [
                'name_ansfaq.required'=>'Answers frequently asked questions cannot be empty',
                'name_quesfaq.required'=>'Answers frequently asked questions cannot be empty'
            ]
        );
        Menu::where('id_faq',$id)->update([
            'name_quesfaq'=>$request->name_quesfaq,
            'name_ansfaq'=>$request->name_ansfaq,
            'status'=>$request->status
        ]);
        return redirect()->route('adminmenu.index')->with('Ok2','The FAQ was created successfully');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Menu::where('id_faq',$id)->delete();
        return redirect()->back()->withSucces('Xóa thành công');
    }
}