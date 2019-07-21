@extends('layouts.app')

@section('content')
<div class="container">
<h5>
    Welcome {{\App\User::findOrFail($id)->name}}! 
    <span><a class="btn btn-outline-success" style="float:right" href="/payee/create">Add</a>
</h5> 
<h5 class="pt-2">List of your payee are:</h5>
    <ul class="list-group">
    @foreach ($payees as $payee)
    <li class="list-group-item">
            <div class="row">
            <div class="col-sm-4">
                <a href="/transaction/{{$payee->id}}">
                     <div class="row">
                           <div class="col">
                           <h6>{{$payee->name}}</h6>
                           </div>
                           @php
                            $total=0;
                               foreach ($payee->transactions as $transaction) {
                                $total=$total+$transaction->amount;
                               }
                           @endphp
                           <div class="col">
                           @if ($total<0)
                                 <h4 class="text-danger " style="float:right">{{$total}}</h4>
                              @else
                                 <h4 class="text-success" style="float:right">{{$total}}</h4>
                              @endif
                           </div>
                     </div>
                </a>
                  </div>
               </div>
           </li>
    @endforeach
    </ul>
</div>
@endsection
