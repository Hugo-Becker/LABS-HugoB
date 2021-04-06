

 @extends('adminlte::page')


 @section('content')

    <link rel="stylesheet" href="{{asset('css/flaticon.css') }}" />


    <form method="POST" enctype="multipart/form-data" action="/abouts/0" class="pb-5">
        @csrf
        @method('PUT')

        <div class="form-group">
        <label for="exampleFormControlInput1">Title (Separate with "/" for the highlited text)</label>
        <input type="text" name="title" value="{{$abouts[0]->title}}" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Text Left</label>
            <textarea class="form-control" name="text1" id="exampleFormControlTextarea1" rows="3">{{$abouts[0]->text1}}</textarea>
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Text Right</label>
            <textarea class="form-control" name="text2" id="exampleFormControlTextarea1" rows="3">{{$abouts[0]->text2}}</textarea>
        </div>

        
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Video URL</label>
            <input value="{{$abouts[0]->videoUrl}}" class="form-control" type="text" name="videoUrl" id="exampleFormControlTextarea1" rows="3">
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">New Video Cover</label>
            <div class="custom-file">
                <input name="videoCover" type="file" class="custom-file-input" id="inputGroupFile01">
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
              </div>
        </div>
        

        
        </div>

        <div class="d-flex justify-content-center">

            <button class="btn btn-success " type="submit">Apply Changes</button>


        </div>

    
        
    </form>
 
 
    
 @stop
 
  
 
