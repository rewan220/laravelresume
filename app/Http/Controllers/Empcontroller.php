<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class Empcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emps = Employee::all() ;
        
        return view('ems.employee',['emps'=>$emps,'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $emps = Employee::all() ;
        return view('ems.employee',['emps'=>$emps,'layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $emps = new Employee() ;
        $emps->branch = $request->input('branch') ;
        $emps->firstName = $request->input('firstName') ;
        $emps->secondName = $request->input('secondName') ;
        $emps->age = $request->input('age') ;
        $emps->speciality = $request->input('speciality') ;
        $emps->save();
        return redirect('/ems') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $emp = Employee::find($id);
        $emps = Employee::all() ;
        return view('ems.employee',['emp'=>$emp,'emps'=>$emps,'layout'=>'show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $emp = Employee::find($id);
      $emps = Employee::all() ;
      return view('ems.employee',['emp'=>$emp,'emps'=>$emps,'layout'=>'edit']);
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
        
        $emp= Employee::find($id);
      $emp->branch = $request->input('branch') ;
      $emp->firstName = $request->input('firstName') ;
      $emp->secondName = $request->input('secondName') ;
      $emp->age = $request->input('age') ;
      $emp->speciality = $request->input('speciality') ;
      $emp->save() ;
      
      return redirect('/ems') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $emp = Employee::find($id);
      $emp->delete();
      $emps=Employee::all();
      return view('ems.employee',['emp'=>$emp,'emps'=>$emps,'layout'=>'index']);
    }
}
