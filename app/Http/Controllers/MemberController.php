<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use Carbon\Carbon;
use Session;

class MemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $allMembers=Member::Where('member_status',1)->orderBy('member_id','DESC')->get();
        return view('admin.member.all',compact('allMembers'));
    }
    public function add()
    {

        return view('admin.member.add');
    }
    public function add_member()
    {
        $add_members=Member::insert([
            'member_name'=>htmlentities($_POST['member_name'],ENT_QUOTES), 
            'member_email'=>htmlentities($_POST['member_email'],ENT_QUOTES),
            'member_contact'=>htmlentities($_POST['member_contact'],ENT_QUOTES),
            'member_blood_group'=>htmlentities($_POST['member_blood'],ENT_QUOTES),
            'member_nid'=>htmlentities($_POST['member_nid'],ENT_QUOTES),
            'member_profession'=>htmlentities($_POST['member_profession'],ENT_QUOTES),
            'member_date_of_birth'=>htmlentities($_POST['member_dof'],ENT_QUOTES),
            'member_present_address'=>htmlentities($_POST['member_paddress'],ENT_QUOTES),
            'member_permanent_address'=>htmlentities($_POST['member_pmaddress'],ENT_QUOTES),
            'created_at'=>Carbon::now()->toDateTimeString()
        ]);
        if($add_members)
        {
            Session::flash('success','value');
            return redirect('/admin/member/add');
        }
        else
        {
            Session::flash('error','value');
            return redirect('/admin/member/add');
        }
    }
    public function allUser()
    {
        $allMembers=Members::Where('member_status',1)-all();
        return view('admin.member.all',compact('allMembers'));
    }
}
