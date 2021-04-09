@extends('adminlte::page')

@section('content')

    <div class="container">
        <form action="/tagsCats/{{$tag->id}}" method="POST">
            @csrf
            @method('PUT')
            @if ($errors->any()) 
<div class="alert alert-danger"> 
<ul> @foreach ($errors->all() as $error) 
<li>{{ $error }}</li> 
@endforeach </ul> 
</div> 
@endif

            <div class="form-group">
                <label  for="">Edit Tag Name</label>
                <input name="name" class="form-control" value="{{$tag->name}}" type="text">
            </div>
            <button class="btn btn-success">Update</button>

        </form>
        
    </div>
    
@endsection