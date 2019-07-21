@extends('layouts.app')
@section('content')

<div class="container">
   <div class="jumbotron">
         <div class="row justify-content-center">
               <div class="col" >
               <h1>{{\App\Payee::findOrFail($id)->name}}
               <span><a class="btn btn-outline-primary" style="float:right" href="/transaction/create/{{$id}}">Add</a>
               </h1>
               </div>
         </div>
   </div>
   <div> Transactions:</div>
   <ul class="list-group">
      @foreach ($transactions as $transaction)
      @php
         $total=$total+$transaction->amount;
      @endphp
      <li class="list-group-item">
         <div class="row">
            <div class="col-sm-4">
                  <div class="row">
                        <div class="col">
                        <h6>{{$transaction->information}}</h6>
                        </div>
                        <div class="col">
                        @if ($transaction->amount<0)
                              <h4 class="text-danger " style="float:right">{{$transaction->amount}}</h4>
                           @else
                              <h4 class="text-success" style="float:right">{{$transaction->amount}}</h4>
                           @endif
                        </div>
                  </div>
               </div>
            </div>
        </li>
        
        @endforeach
    </ul>
    <div class="container row card" style="position:absolute; bottom:0px">
         <div class="row p-2">
               <div class="col">
               <h6>Total :</h6>
               </div>
               <div class="col">
               @if ($total<0)
                     <h4 class="text-danger " style="float:right">{{$total}}</h4>
                  @else
                     <h4 class="text-success" style="float:right">{{$total}}</h4>
                  @endif
               </div>
         </div>
    </div>
    </footer>
</div>


@endsection