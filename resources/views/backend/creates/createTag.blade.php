@extends('adminlte::page')

@section('content')

    <div class="container">
        <form action="/tagsCats" method="POST">
            @csrf
            @method('POST')

            <div class="form-group">
                <label  for="">New Tag Name</label>
                <input name="name" class="form-control"  type="text">
            </div>
            <button class="btn btn-success">Create</button>

        </form>
        
    </div>
    
@endsection