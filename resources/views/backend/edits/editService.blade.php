

 @extends('adminlte::page')


 @section('content')

    <link rel="stylesheet" href="{{asset('css/flaticon.css') }}" />


    <form method="POST" action="/backservices/{{$service->id}}" class="pb-5">
        @csrf
        @method('PUT')

        <div class="form-group">
        <label for="exampleFormControlInput1">Title</label>
        <input value="{{$service->title}}" type="text" name="title" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Text</label>
            <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3">{{$service->text}}</textarea>
        </div>


        <div class="form-group">
        <label for="exampleFormControlSelect1">New Icon</label>
        <div class="d-flex flex-wrap py-3" style="background-color: white">
            @foreach ($icons as $key => $icon)
                <div  class="d-flex flex-column align-items-center">
                    <i style="font-size: 30px" class="{{$icon->name}} mx-3"></i>
                    <input type="radio" value="{{$icon->name}}" name="icon" id="{{$key}}">
                </div>
            @endforeach
        </div>

        
        </div>

        <div class="d-flex justify-content-center mt-4">

            <button class="btn btn-success mt-4" type="submit">Apply Changes</button>


        </div>

    
        
    </form>
 
 
    
 @stop
 
  
 
