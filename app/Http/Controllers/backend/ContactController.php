<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::all();
        return view('admin.list_contact',compact('contact'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $contact = Contact::all();

       return view('admin.add_contact',compact('contact'));

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
                'email_contact'=>'required|email|unique:contact,email_contact',
                'name_contact'=>'required',
                'message_contact'=>'required'
            ],
            [
                'email_contact.email'=>'Incorrect email format .',
                'email_contact.required'=>'Email contact cannot be empty .',
                'email_contact.unique'=>'Email contact cannot be empty .',
                'name_contact.required'=>'Name contact cannot be empty .',
                'message_contact.required'=>'Message cannot be empty.'
            ]
        );
       
        // $data = $request->all();
        $contacts = Contact::create([
             'email_contact'=>$request->email_contact,
             'name_contact'=>$request->name_contact,
             'message_contact'=>$request->message_contact,
           
        ]);
        return redirect()->back()->with('Ok','The contact was created successfully.');
        // $data = $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   $contact = Contact::all();
        return view('admin.list_contact',compact('contact'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::all();
        $cont = Contact::where('id_contact',$id)->first();
        return view('admin.edit_contact',compact('cont','contact'));
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
                'email_contact'=>'required|email',
                'name_contact'=>'required',
                'message_contact'=>'required'
            ],
            [
                'email_contact.email'=>'Incorrect email format.',
                'email_contact.required'=>'Name contact cannot be empty.',
                'name_contact.required'=>'Name contact cannot be empty.',
                'message_contact.required'=>'Message contact cannot be empty.'
            ]
        );
        Contact::where('id_contact',$id)->update([
            'email_contact'=>$request->email_contact,
            'name_contact'=>$request->name_contact,
            'message_contact'=>$request->message_contact,
            'status'=>$request->status
        ]);
        return redirect()->route('admincontact.index')->with('Ok2','The contact was created successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contact::where('id_contact',$id)->delete();
        return redirect()->back()->withSucces('Xóa thành công');
    }
}