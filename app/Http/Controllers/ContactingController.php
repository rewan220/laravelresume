<?php

namespace App\Http\Controllers;

use App\Models\Contacting;
use Illuminate\Http\Request;

class ContactingController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $conntacting = new Contacting();
        $conntacting->name = $request->input('name');
        $conntacting->email =$request->input('email');
        $conntacting->phone =$request->input('phone');
        $conntacting->message =$request->input('message');
        $conntacting->save();
        
        return redirect('/contact');


    }
}
