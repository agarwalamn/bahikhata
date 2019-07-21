<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Payee;
class TransactionController extends Controller
{
    function __construct(){
        $this->middleware('auth');
    }
    public function index($id)
    {   
        if(auth()->user()->id == \App\Payee::findOrFail($id)->user_id){
        $transactions = \App\Payee::findOrFail($id)->transactions;
        $total=0;
        return view('payees.payee',compact('transactions','total','id'));
        }
        return view('welcome');
    }
    public function create($id)
    {
        return view('transaction.create',compact('id'));
    }
    public function store(Payee $payee)
    {
        $data = request()->validate([
            'information'=>'required',
            'amount'=>'required|integer'
        ]);
        if(auth()->user()->id == $payee->user_id){
        $payee->transactions()->create([
            'information'=>$data['information'],
            'amount'=>(int)$data['amount'],
        ]);
        }
        else{
            $id = auth()->user()->id;
            return view('welcome');
        }
        return redirect("/transaction/" . $payee->id);
    }
}
