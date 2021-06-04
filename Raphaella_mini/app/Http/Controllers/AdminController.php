<?php

namespace App\Http\Controllers;
use App\Models\Christian;
use App\Models\admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(admin $admin)
    {
        //
    }
    public function login()
    {
        return view('admins.LoginForm');
    }
    public function abacklogin()
    {
        return view('index');
    }
    public function registerHere()
    {
        return view('admins.register');
    }
    public function register1(Request $r)
    {
$f=$r->fname;
$l=$r->lname;
$phone=$r->phone;
$pass=$r->password;
$user=$r->username;
$obj=new admin();
$obj->fname=$f;
$obj->lname=$l;
$obj->phone=$phone;
$obj->username=$user;
$obj->password=$pass;
$ok=$obj->save();
if($ok)
{
    return view('admins.LoginForm');
}
else
{
    return view('admins.register');
}
}
public function create_log(Request $r)
{
    $user=$r->username;
    $pass=$r->password;
    $session=admin::where ('username',$user)->where('password',$pass)->get();
    if(count($session)>0)
    {
        $r->session()->put('id',$session[0]->id);
        $r->session()->put('username',$session[0]->username);
          if($r->session()->get('id')=="")
             {
        return view('admins.LoginForm');
            }
         else{
         $user=$r->session()->get('username');
          $cap=array('username'=>$user);

         return view('admins.adminPage')->with($cap);
             }
    }
    else{
return view('admins.LoginForm')->with('msg','Username or password does not match');
}}
public function logout(Request $r)
{
    $r=session()->forget('id');
    $r=session()->forget('username');
return view('admins.LoginForm');

}
public function ViewApplicant()
{
    $christian = Christian::all();
    return View('christians.s_index')->with('christians', $christians);
}
public function report()
{ $christian = Christian::all();
    return View('admins.report')->with('christians', $christians);
}
public function back1()
{
    return View('admins.adminPage');
}
}
