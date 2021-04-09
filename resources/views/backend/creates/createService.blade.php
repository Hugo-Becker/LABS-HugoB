

 @extends('adminlte::page')


 @section('content')

    <link rel="stylesheet" href="{{asset('css/flaticon.css') }}" />


    <form method="POST" action="/backservices" class="pb-5">
        @if ($errors->any()) 
<div class="alert alert-danger"> 
<ul> @foreach ($errors->all() as $error) 
<li>{{ $error }}</li> 
@endforeach </ul> 
</div> 
@endif
        @csrf
        @method('POST')

        <div class="form-group">
        <label for="exampleFormControlInput1">Title</label>
        <input  type="text" name="title" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Text</label>
            <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>


        <div class="form-group">
        <label for="exampleFormControlSelect1">Icon</label>
        <div class="d-flex flex-wrap py-3" style="background-color: white">
            @foreach ($icons as $key => $icon)
                <div  class="d-flex flex-column align-items-center">
                    <i style="font-size: 30px" class="{{$icon->name}} mx-3"></i>
                    <input @if ($loop->iteration ==1)
                    checked
                        
                    @endif type="radio" value="{{$icon->name}}" name="icon" id="{{$key}}">
                </div>
            @endforeach
        </div>

        
        </div>

        <div class="d-flex justify-content-center mt-4">

            <button class="btn btn-success mt-4" type="submit">Store Service</button>


        </div>

    
        
    </form>
 
 
    
 @stop
 
  
 
