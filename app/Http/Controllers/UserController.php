<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use Session;
use Image;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('superadmin');
    }
    public function index()
    {
        $users=User::Where('status',1)->orderBy('id','DESC')->get();
        return view('admin.user.all',compact('users'));
    }
    public function add()
    {
        return view('admin.user.add');
    }
    public function view()
    {

    }
    public function edit()
    {
        
    }
}
