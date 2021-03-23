<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Role;
use App\Models\UserRole;
use Illuminate\Http\Request;

class UserrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::paginate(15);
        return view('admin.user.index',compact('data'));
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
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(User $userr)
    {
        dd($userr);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(User $userr)
    {
         
         
         $roles = Role::orderBy('name','ASC')->get();
         $role_assigned = $userr->getRoles->pluck('id','id')->toArray();
         // dd($role_assigned);
        return view('admin.user.edit',compact('roles','userr','role_assigned'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $userr)
    {
        //dd($request->role);
        $userr->update($request->only('name','email'));
        if (is_array($request->role)) {
           foreach ($request->role as $role_id) {
           // dd($role->id);
               UserRole::create(['user_id'=> $userr->id,'role_id'=> $role_id]);
           }
        }

        return redirect()->route('userr.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $userr)
    {
        //
    }
}
