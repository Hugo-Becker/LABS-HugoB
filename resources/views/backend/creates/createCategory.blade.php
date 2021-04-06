@extends('adminlte::page')

@section('content')

    <div class="container">
        <form action="/backCat" method="POST">
            @csrf
            @method('POST')

            <div class="form-group">
                <label  for="">New Category Name</label>
                <input name="name" class="form-control"  type="text">
            </div>
            <button class="btn btn-success">Create</button>

        </form>
        
    </div>
    
@endsection