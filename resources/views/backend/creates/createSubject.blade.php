@extends('adminlte::page')


@section('content')

<div class="container">
    @if ($errors->any()) 
<div class="alert alert-danger"> 
<ul> @foreach ($errors->all() as $error) 
<li>{{ $error }}</li> 
@endforeach </ul> 
</div> 
@endif
    <h1 class="title">Existing Subjects</h1>

    <ul class="list-group">
        @foreach ($subjects as $item)
         <li class="list-group-item d-flex flex-column">{{$item->name}}

            <a class="btn btn-primary btn-sm" href="/subjects/{{$item->id}}/edit">Edit</a>
            <form action="/subjects/{{$item->id}}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger btn-sm btn-block">Delete</button>
    
        
            </form>

        </li>
      
            
        @endforeach


    </ul>
      <h1 class="title mt-5">Add a subject </h1>

      <form action="/subjects" method="POST">
          @csrf
          <div class="form-group">
              <label for="">Subject Name</label>
              <input class="form-control" name="name" type="text">
          </div>
          <button class="btn btn-success" type="submit">Add</button>
      </form>
</div>


    
@endsection