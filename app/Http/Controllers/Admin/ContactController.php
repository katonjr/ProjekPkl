<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Contact::get();
        // dd($datas);
        return view('admin.contact.list', compact('datas'));
    }


    public function edit($id)
    {
        $datas = Contact::findOrFail($id);
        return view('admin.contact.edit', compact('datas'));
    }


    public function update(Request $request,$id)
    {

        $request->validate([
            'phone' => 'required',
            'address' => 'required',
            'email' => 'required|email',
        ]);


        $datas = Contact::findOrFail($id);

        $datas->phone = $request->phone;
        $datas->address = $request->address;
        $datas->email = $request->email;
        $datas->save();

        // dd ($request->all(),$id);

        return redirect('admin/contact')->with('success','Data Update Successfully');

    }




}
