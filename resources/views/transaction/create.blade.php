@extends('layouts.app')
@section('content')

<div class="container">
<form action="/transaction/{{$id}}/c" method="POST">
            @csrf
            <div class="row">
                <div class="col-8 offset-2">
                        <div class="row">
                            <h2>Add new Payee</h2>
                        </div>
                        <div class="form-group row">
                            <label for="information" class="col-md-4 col-form-label">Information</label>
                            <input id="information" type="text" class="form-control @error('information') is-invalid 
                            @enderror" name="information" value="{{ old('information') }}" autocomplete="information" autofocus>

                            @error('information')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group row">
                                <label for="amount" class="col-md-4 col-form-label">Amount</label>
                                <input id="amount" type="text" class="form-control @error('amount') is-invalid 
                                @enderror" name="amount" value="{{ old('amount') }}" autocomplete="amount" autofocus>
    
                                @error('amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        <div class="row pt-4">
                            <button class="btn btn-primary">Add Payee</button>
                        </div>
                </div>
            </div>
            
    </form>
</div>


@endsection