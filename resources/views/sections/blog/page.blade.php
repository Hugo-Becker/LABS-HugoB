	<!-- page section -->
	<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
					@foreach ($pagiArticle as $article)
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
							</div>
						</div>						
					@endforeach
					<!-- Pagination -->
						
					{{$pagiArticle->links()}}
					{{-- <div class="page-pagination">
						<a class="active" href="">01.</a>
						<a href="">02.</a>
						<a href="">03.</a>
					</div> --}}
				</div>
				<!-- Sidebar area -->
				<div class="col-md-4 col-sm-5 sidebar">
					<!-- Single widget -->
					<div class="widget-item">

						@include('partials.search')
						{{-- <form action="/search" method="POST" class="search-form">
							@csrf
							<input type="text" name="search" placeholder="Search">
							<button type="submit" class="search-btn"><i class="flaticon-026-search"></i></button>
						</form> --}}
					</div>
					<!-- Single widget -->
					{{-- CATEGORIES --}}
					<div class="widget-item">
						<h2 class="widget-title">Categories</h2>
						<ul>
							@foreach ($categories as $category)
								<li><a href="/categories/{{$category->id}}">{{$category->name}}</a></li>
							@endforeach
							
						</ul>
					</div>
					<!-- Single widget -->

					{{-- TAGS --}}
					<div class="widget-item">
						<h2 class="widget-title">Tags</h2>
						<ul class="tag">
							@foreach ($tags as $tag)
								<li><a href="/tags/{{$tag->id}}">{{$tag->name}}</a></li>
							@endforeach

						</ul>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- page section end-->