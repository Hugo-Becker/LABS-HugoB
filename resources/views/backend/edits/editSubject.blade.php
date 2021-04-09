@extends('adminlte::page')

@section('content')

<h1 class="title mt-5">Edit subject </h1>

<form action="/subjects/{{$edit->id}}" method="POST">
    @method('PUT')
    @csrf
    @if ($errors->any()) 
<div class="alert alert-danger"> 
<ul> @foreach ($errors->all() as $error) 
<li>{{ $error }}</li> 
@endforeach </ul> 
</div> 
@endif
    <div class="form-group">
        <label for="">Subject Name</label>
        <input value="{{$edit->name}}" class="form-control" name="name" type="text">
    </div>
    <button class="btn btn-success" type="submit">Update</button>
</form>
    
@endsection