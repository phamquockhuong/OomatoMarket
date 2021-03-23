<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateProfile;
use App\User;
use Auth;

	class ProfileController extends Controller
	{
	    public function __construct()
	{
	    $this->middleware('auth');
	}
	
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\User  $user
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Request $request, User $user)
	{
	    // user
	    $viewData = [
	        'user' => $user,
	    ];
	    // render view with data
	    return view('edit', $viewData);
	}
	
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\User  $user
	 * @return \Illuminate\Http\Response
	 */
	public function update(UpdateProfile $request, User $user)
	{
	    // form data
	    $data = $request->all();
	    $user->update($data);
	    return redirect(route('edit', ['user' => $user]))
	                ->with('info', 'Your profile has been updated successfully.');

	}
	public function logout(Request $request) {
 		 Auth::logout();
 		 return redirect('/');
	}
}
