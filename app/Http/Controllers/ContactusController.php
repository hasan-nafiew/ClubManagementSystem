<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contactus;

class ContactusController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
       // $contactus=Contactus::all();
        $contactus=Contactus::where('contactus_status',1)->orderBy('contactus_id','DESC')->get();
        return view('admin.contactus.all',compact('contactus'));
    }
    public function view($id)
    {
        $view_data=Contactus::where('contactus_status',1)->where('contactus_id',$id)->firstOrFail();
        return view('admin.contactus.view',compact('view_data'));
        //return view('admin.contactus.view');
    }
    public function soft_delete($id)
    {
        $soft_delete=Contactus::where('contactus_status',1)->where('contactus_id',$id)->update([
            'contactus_status'=>0
        ]);
        if($soft_delete)
        {
            return redirect('/admin/contactus');
        }
        else
        {
            return redirect('/admin/contactus');
        }
    }
}
