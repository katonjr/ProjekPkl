<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\SendMail;
use App\Models\ContactUs;
use App\Models\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $data = ContactUs::get();

        // dd($datas);
        return view('admin.contactus.list', compact('data'));
    }

    public function show (Request $request, $id)
    {
        $data = ContactUs::find($id);
        if($request->key == 'view')
        {
            ContactUs::where('id',$id)->update(['status' => ContactUs::READ]);
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

        $log = new Log();
        $log->nama_table = 'contact_us';
        $log->items = json_encode($data);
        $log->deskripsi = 'Deleted Email Blog';
        $log->type = 'delete';
        $log->user_id = Auth::user()->id;
        $log->save();

        return redirect()->route('contactus.index')
        ->with('success','User deleted successfully');

    }





}
