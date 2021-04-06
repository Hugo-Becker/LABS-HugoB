@extends('adminlte::page')

@section('content')

    <div class="container">
        <form action="/backCat/{{$category->id}}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label  for="">Edit Category Name</label>
                <input name="name" class="form-control" value="{{$category->name}}" type="text">
            </div>
            <button class="btn btn-success">Update</button>

        </form>
        
    </div>
    
@endsection