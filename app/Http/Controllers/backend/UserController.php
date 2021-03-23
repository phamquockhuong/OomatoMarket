<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $user = User::all();
     return view('admin.list_user', compact('user'));
 }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
       $user = User::all();
       $user = User::where('id',$id)->first();
       return view('admin.edit_user',['user'=>$user]);
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
                'name'=>'required',
                'email'=>'required|email',
                'password'=>'required',
            ],
            [
                'name.required'=>'Name method cannot be empty',
                'email.required'=>'Email cannot be empty',
                'email.email'=>'Incorrect email format',
                'password.required'=>'Incorrect password format',
            ]
        );
        $user = User::all();
        if($request->img_users == null){
            $user = User::where('id',$id)->update([
                'name'=>$request->name,
                'email'=>$request->email,
                
                'status'=>$request->status,
            ]);
        }else{
            $file = $request->img_users;
            $file_name = $file->getClientOriginalName();
            $file->move(base_path('uploads'),$file_name);
            $user = User::where('id',$id)->update([
               'name'=>$request->name,
               'email'=>$request->email,
               'img_users'=>$file_name,
               'status'=>$request->status,
           ]);

        }
        
        return redirect()->back()->with('Ok2','The user was successfully edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //DB::table('commentblog')->where('id_users', $id)->delete();
        User::find($id)->delete();
        return redirect()->back()->withSucces('Xóa thành công');
   }
}