<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contactus;
use Carbon\Carbon;
use Session;

class WebsiteController extends Controller
{
    public function __construct()
    {

    }
    public function index()
    {
        return view('website.index');
    }
    public function menu()
    {
        return view('website.menu');
    }
    public function contact()
    {
        return view('website.contact');
    } 
    public function insert_contactus(Request $request)
    {
        $this->validate($request,
        [
            'name'=>'required',
            'email'=>'required'
        ],
        [
            'name.required'=>'Please Enter your name!',
            'email.required'=>'Please Enter Your Email Address!'
        ]);
        $inserts=Contactus::insert([
            'contactus_name'=>htmlentities($_POST['name'],ENT_QUOTES),          
            'contactus_email'=>htmlentities($_POST['email'],ENT_QUOTES),          
            'contactus_subject'=>htmlentities($_POST['subject'],ENT_QUOTES),          
            'contactus_message'=>htmlentities($_POST['message'],ENT_QUOTES),          
            'created_at'=>Carbon::now()->toDateTimeString()
        ]);
        if($inserts)
        {
            Session::flash('success','value'); 
            return redirect('contact');           
        }
        else
        {
            Session::flash('error','value'); 
            return redirect('contact');    
        }
        
    }
}
