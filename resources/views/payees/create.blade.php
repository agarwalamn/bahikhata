@extends('layouts.app')
@section('content')

<div class="container">
        <form action="/p" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="row">
                <div class="col-8 offset-2">
                        <div class="row">
                            <h2>Add new Payee</h2>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label">Payee name</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid 
                            @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                            @error('name')
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