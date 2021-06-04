<?php

namespace App\Http\Controllers;

use App\Models\Christian;
use Illuminate\Http\Request;

class ChristianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ch = Christian::all();
        return View('ch.s_index')->with('christians', $christians);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ch.s_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $n=$r->fname;
        $ln=$r->lname;
        $g=$r->gender;
        $fa=$r->faname;
        $m=$r->mname;
        $pro=$r->province;
        $d=$r->district;
        $s=$r->sector;
        $c=$r->cell;
        $v=$r->village;
        $cc=$r->cchurch;
        $st=$r->status;
$obj=new Christian();
$obj->fname;
$obj->lname;
$obj->gender;
$obj->faname;
$obj->mname;
$obj->province;
$obj->district;
$obj->sector;
$obj->cell;
$obj->village;
$obj->cchurch;
$obj->status;
$ok=$obj->save();
if($ok)
{
    $data = Christian::all();
return View('ch.s_index')->with('christias', $data);
    //return view('students.s_index')->with('message','application roported successfully');
}
else
{
    return view('ch.s_create')->with('message','application failed');

}
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Christ  $christ
     * @return \Illuminate\Http\Response
     */
    public function show(Christian $christian)
    {
        return view('ch.s_show', compact('christias'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Christ  $christ
     * @return \Illuminate\Http\Response
     */
    public function edit(Christia $christia)
    {
        return view('ch.s_edit', compact('christias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Christ  $christ
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Christia $christia)
    {
        $request->validate([
            'fname'=> 'required',
            'lname'=> 'required',
                'gender' => 'required',
                'faname'=> 'required',
                 'mname'=> 'required',
                'province'=> 'required',
                'district'=> 'required',
               'sector'=> 'required',
               'cell'=> 'required',
                'village'=> 'required',
                'cchurch'=> 'required',
                'phone'=> 'required',
                'status'=> 'required',
                'status' => 'required',
        ]);
        $ch = Christia::all();
               $christian->fname='fname';
                $christian->lname='lname';
                $christian->gender ='gender';
                $christian->faname='faname';
                $christian->mname='mname';
                $christian->province ='province';
                $christian->district='district';
                $christian->sector ='sector';
                $christian->cell ='cell';
                $christian->village ='village';
                $christian->cchurch ='cchurch';
                $christian->phone ='phone';
                $christian->status ='status';
                $christian->save();

            // redirect
           // Session::flash('message', 'Successfully updated student!');
           return view('ch.s_index')->with('message', 'Successfully updated Christian!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Christ  $christ
     * @return \Illuminate\Http\Response
     */
    public function destroy(Christia $christia)
    {
        $ch->delete();
        return redirect()->route('ch.s_index')
            ->with('success', 'Christian deleted successfully');
    }
    public function apply()
    {
        return view('ch.applyForm');
    }
public function saveData(Request $r)
    {
$n=$r->fname;
$ln=$r->lname;
$g=$r->gender;
$fa=$r->faname;
$m=$r->mname;
$pro=$r->province;
$d=$r->district;
$s=$r->sector;
$c=$r->cell;
$v=$r->village;
$cc=$r->cchurch;
$st=$r->status;
$obj=new Christian();
$obj->fname=$n;
$obj->lname=$ln;
$obj->gender=$g;
$obj->faname;
$obj->mname;
$obj->province;
$obj->district;
$obj->sector;
$obj->cell;
$obj->village;
$obj->cchurch;
$obj->status;
$ok=$obj->save();
if($ok)
{
    $ch = Christia::all();
return View('index');
}
else
{
    return view('ch.applyForm')->with('message','failed');

}
}
}
