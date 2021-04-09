	

<div class="col-md-8 col-sm-7 blog-posts">
	@if (count($articlesSameTag)==0)
			<h1 class="text-center">Nothing found ...</h1>
	@endif
	
	@foreach ($articlesSameTag as $article)
		<div class="post-item">
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
					{{-- <a href="/articles/{{$article->id}}/#authorId">{{$article->users->name}}</a> --}}
					<a href="/categories/{{$article->categories->id}}">{{$article->categories->name}}</a>
					@foreach ($article->tags->take(2) as $tag)
						@if ($loop->iteration==1)
							<a style="text-transform: capitalize;" href="{{'/tags/'.$tag->id}}">{{$tag->name}},</a>
						@else
							<a class="a_tag_style" href="{{'/tags/'.$tag->id}}">{{$tag->name}}</a>
						@endif
					@endforeach
					<a href="/articles/{{$article->id}}/#comments">{{count($article->comments)}} Comments</a>
				</div>
				<p>{{Str::limit($article->text, 180) }}</p>
				<a href="/articles/{{$article->id}}" class="read-more">Read More</a>
			</div>
		</div>						
	@endforeach

</div>

