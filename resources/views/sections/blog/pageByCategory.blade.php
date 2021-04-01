	<!-- page section -->
	<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">

					@if (count($articlesSameCat)==0)

					<h1 class="text-center">Nothing found ...</h1>
					
					@endif


					@foreach ($articlesSameCat as $article)
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
									@foreach ($article->tags->pluck('name') as $tag)
										@if ($loop->iteration==1)
											<a style="text-transform: capitalize;" href="">{{$tag}},</a>
										@else
											<a class="a_tag_style" href="SHOW TAG LIST">{{$tag}}</a>
										@endif
									@endforeach
									<a href="">{{count($article->comments)}} Comments</a>
								</div>
								<p>{{$article->text}}</p>
								<a href="/articles/{{$article->id}}" class="read-more">Read More</a>
							</div>
						</div>						
					@endforeach
					<!-- Pagination -->
						<div>

                            {{$articlesSameCat->links()}}

                        </div>

				</div>
				<!-- Sidebar area -->
				<div class="col-md-4 col-sm-5 sidebar">
					<!-- Single widget -->
					<div class="widget-item">
						@include('partials.search')
						{{-- <form action="#" class="search-form">
							<input type="text" placeholder="Search">
							<button class="search-btn"><i class="flaticon-026-search"></i></button>
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