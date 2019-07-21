<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayeeController extends Controller
{
    function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {   $user = auth()->user();
        $total=0;
        $payees = \App\User::findOrFail($user->id)->payees;
        $id = $user->id;
        return view('home',compact('payees','total','id'));
        
    }
    public function create()
    {
        return view('payees.create');
    }
    public function store()
    {
        $data = request()->validate([
            'name'=>'required|unique:payees'
        ]);
        auth()->user()->payees()->create([
            'name'=>$data['name'],
        ]);
        return redirect("/");
    }
}
