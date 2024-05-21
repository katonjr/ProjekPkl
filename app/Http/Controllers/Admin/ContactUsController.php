<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\SendMail;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $data = ContactUs::where('status',1)->get();
        // dd($datas);
        return view('admin.contactus.list', compact('data'));
    }

    public function show (Request $request, $id)
    {
        $data = ContactUs::find($id);
        if($request->key == 'view'){
            return view('admin.contactus.show', compact('data'));
        }
        else
        if($request->key == 'reply'){
            return view('admin.contactus.reply', compact('data'));
        }
        else
        {
            return view('admin.contactus.show', compact('data'));
        }
    }


    public function store (Request $request)
    {
        // dd ($request->all());
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'pesan' => 'required'
        ]);

        $details = [
            'balasan'  => $request->pesan
        ];

        Mail::to($request->email)->send(new SendMail($details));
        return redirect()->route('contactus.index')->with('success','Balasan terkirim');

    }




    public function destroy($id)
    {
        $data = ContactUs::findOrFail($id);
        $data->delete();
        return redirect()->route('contactus.index')
                    ->with('success','User deleted successfully');

    }





}
