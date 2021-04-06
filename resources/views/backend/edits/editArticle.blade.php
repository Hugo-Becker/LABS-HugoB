@extends('adminlte::page')

@section('content')


<form method="POST" action="/backArticles/{{$article->id}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')


    <div class="form-group">
      <label>Title</label>
      <input value="{{$article->title}}" name="title" type="text" class="form-control" placeholder="Title">
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Text</label>
        <textarea placeholder="Text" name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$article->text}}</textarea>
    </div>


    <div class="form-group">
      <label for="exampleFormControlSelect1">Category</label>
      <select name="category_id" class="form-control" id="exampleFormControlSelect1">

          <option value="{{$article->category_id}}">{{$article->categories->name}}</option>
          
        @foreach ($categories as $category)
            @if ($category->id != $article->category_id )
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endif
        @endforeach
      </select>
    </div>


    <div class="form-group">
        <label for="exampleFormControlSelect2 pl-3">Select Tag</label>
        <div style="margin-left: auto" class="row flex-wrap">
            @foreach ($tags as $tag)
            <div style="background-color: white" class="col-1 d-flex flex-column border ">
                <p style="text-transform: capitalize">{{$tag->name}}</p> 
                <input 
                @if (in_array($tag->id,$articleTags))
                    checked
                @endif 
                class="mb-2" type="checkbox" name="tag[]" value="{{$tag->id}}" id="">
            </div>
            @endforeach
        </div>
    </div>

    <div class="input-group">
        
        <div class="custom-file">
          <input name="img" type="file" class="custom-file-input" id="inputGroupFile04">
          <label class="custom-file-label" for="inputGroupFile04">Choose article image cover</label>
        </div>
        
    </div>

    <button class="btn btn-success  btn-lg btn-block mt-5">UPDATE ARTICLE</button>


    

    
  </form>




  
    
@endsection