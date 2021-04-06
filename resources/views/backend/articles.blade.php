@extends('adminlte::page')

@section('content')
<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">

<!-- Stylesheets -->

<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
<link rel="stylesheet" href="{{ asset('css/flaticon.css') }}" />
<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" />

<link rel="stylesheet" href="{{ asset('css/styleBack.css') }}" />

    <div class="col-md-8 col-sm-7 blog-posts ">
        @foreach ($articles as $article)
            <div class="post-item m-auto">
                <div class="post-thumbnail">
                    <img src="{{asset('img/blog/'. $article->img)}}" alt="">
                    <div class="post-date">
                        <h2>0{{$article->id}}</h2>
                        <h3>  07 Nov</h3>
                    </div>
                </div>
                <div class="post-content">
                    <h2 class="post-title">{{$article->title}}</h2>
                    <div class="post-meta">
                        <a href="/articles/{{$article->id}}/#authorId">{{$article->users->name}}</a>
                        @foreach ($article->tags->take(2) as $tag)
                            @if ($loop->iteration==1)
                                <a style="text-transform: capitalize;" href="{{'/tags/'.$tag->id}}">{{$tag->name}},</a>
                            @else
                                <a class="a_tag_style" href="{{'/tags/'.$tag->id}}">{{$tag->name}}</a>
                            @endif
                        @endforeach
                        <a href="/articles/{{$article->id}}/#comments">{{count($article->comments)}} Comments</a>
                    </div>
                    <p>{{$article->text}}</p>
                    <a href="/articles/{{$article->id}}" class="read-more">Read More</a>
                    <br>
                    <a class="btn btn-success mt-3" href="backArticles/{{$article->id}}/edit">Edit</a>
                </div>
            </div>		
            <hr>				
        @endforeach
    </div>


    
@endsection