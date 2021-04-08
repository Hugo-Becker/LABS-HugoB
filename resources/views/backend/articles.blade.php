@extends('adminlte::page')

@section('content')
<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">

<!-- Stylesheets -->

<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
<link rel="stylesheet" href="{{ asset('css/flaticon.css') }}" />
<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" />

<link rel="stylesheet" href="{{ asset('css/styleBack.css') }}" />

    <div class=" blog-posts container ">
        @foreach ($articles as $article)
            <div class="post-item m-auto">
                <div class="post-thumbnail">
                    <div class="d-flex justify-content-center">
                        <img style="box-shadow: 0 10px 10px -5px; " src="{{asset('img/blog/'. $article->img)}}" alt="">

                    </div>
                    <div class="post-date">
                        <h2>0{{$article->id}}</h2>
                        <h3>  07 Nov</h3>
                    </div>
                </div>
                <div class="post-content">
                    <h2 class="post-title">{{$article->title}}</h2>
                    <div class="post-meta">
                        @if ($article->user_id==null)
                            <a href="">Unknow author</a>
                        @else
                            <a href="/articles/{{$article->id}}/#authorId">{{$article->users->name}}</a>
                            
                        @endif
                        @foreach ($article->tags as $tag)
                            @if ($loop->iteration==1)
                                <a style="text-transform: capitalize;" href="">{{$tag->name}} /</a>
                            @else
                                <a class="a_tag_style" href=""> {{$tag->name}} /</a>
                            @endif
                        @endforeach
                        <a href="/articles/{{$article->id}}/#comments">{{count($article->comments)}} Comments</a>
                    </div>
                    {{-- <p>{{$article->text}}</p> --}}
                    <p>{{Str::limit($article->text, 150)}}</p>
                    <a href="/articles/{{$article->id}}" class="read-more">Read More</a>
                    <br>
                    @can('isAuthor', $article)
                    
                        <a class="btn btn-success mt-3 btn-lg btn-block" href="backArticles/{{$article->id}}/edit">Edit</a>
                        <form action="/backArticles/{{$article->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-lg btn-block mt-3">Delete</button>
                        </form>
                        
                    @endcan
                    
                </div>
            </div>		
            <hr class="my-5" >				
            <hr class="my-5" >				
        @endforeach
    </div>


    
@endsection