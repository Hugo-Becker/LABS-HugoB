@extends('adminlte::page')

@section('content')

<section>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">All Tags</h1>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Tag Name</th> 
                <th scope="col">Edit</th>              
                <th scope="col">Delete</th>              
              </tr>
            </thead>
            <tbody>
                @foreach ($tags as $tag)
                    <tr>
                        <th scope="row">{{$tag->id}}</th>
                        <td style="text-transform: capitalize">{{$tag->name}}</td>
                        <td><a class="btn btn-primary" href="/tagsCats/{{$tag->id}}/edit">Edit</a></td>
                        <td><form action="/tagsCats/{{$tag->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form></td>
                    </tr>
                @endforeach
            </tbody>
          </table>

          <div class="d-flex justify-content-center">
            <a style="text-transform: uppercase" class="btn btn-success mt-5 btn-lg btn-block" href="/tagsCats/create">Create new tag</a>
          </div>

        </div>
    </div>
    
</section>

{{-- CATGEGORIES --}}

<section id="cat">

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">All Categories</h1>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Category Name</th> 
                <th scope="col">Edit</th>              
                <th scope="col">Delete</th>              
              </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <th scope="row">{{$category->id}}</th>
                        <td style="text-transform: capitalize">{{$category->name}}</td>
                        <td><a class="btn btn-primary" href="/backCat/{{$category->id}}/edit">Edit</a></td>
                        <td><form action="/backCat/{{$category->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form></td>
                    </tr>
                @endforeach
            </tbody>
          </table>


          <div class="d-flex justify-content-center">
            <a style="text-transform: uppercase" class="btn btn-success mt-5 btn-lg btn-block" href="/backCat/create  ">Create new category</a>
          </div>


        </div>
    </div>

    
</section>

    
@endsection