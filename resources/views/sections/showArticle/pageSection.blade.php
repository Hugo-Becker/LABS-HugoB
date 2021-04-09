<!-- page section -->
<div class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                <!-- Single Post -->
                <div class="single-post">
                    <div class="post-thumbnail">
                        <img src="{{asset('img/blog/' .$article->img)}}" alt="">
                        <div class="post-date">
                            <h2>03</h2>
                            <h3>Nov 2017</h3>
                        </div>
                    </div>
                    <div class="post-content">
                        <h2 class="post-title">{{$article->title}}</h2>
                        <div class="post-meta">
                            @foreach ($article->tags as $tag)
                                @if ($loop->iteration==1)
                                <a style="text-transform: capitalize;" href="{{'/tags/'.$tag->id}}">{{$tag->name}}</a>
                                @else
                                <a class="a_tag_style" href="{{'/tags/'.$tag->id}}">, {{$tag->name}}</a>
                                @endif
                            @endforeach
                            <a href="">{{count($article->comments->where('check',1))}} Comments</a>
                           
                        </div>
                        <p>{{$text[0]}}</p>
                        <p>{{$text[1]}}</p>
                        <p>{{$text[2]}}</p>
                    </div>
                    <!-- Post Author -->
                    <div id="authorId" class="author">
                        @if ($article->user_id==null)


                        @else
                            <div class="avatar">
                                <img src="{{asset('img/avatar/'. $article->users->img)}}" alt="">
                            </div>
                            <div class="author-info">
                                <h2>{{$article->users->name}}, <span> {{$article->users->roles->name}} </span></h2>
                                <p>{{$article->users->description}}</p>
                            </div>
                        @endif

                    </div>
                    <!-- Post Comments -->
                    <div id="comments" class="comments">
                        <h2>Comments ({{count($article->comments->where('check',1))}})</h2>
                        <ul class="comment-list">
                            @foreach ($article->comments as $comment)
                            @if ($comment->check==1)
                            <li>
                                <div class="avatar">
                                    @if ($comment->user_id == null )
                                        <img src="{{asset('img/avatar/anonymous-avatar-icon-25.jpeg')}}" alt="">
                                    @else
                                        <img src="{{asset('img/avatar/' . $comment->users->img)}}" alt="">
                                    @endif
                                </div>
                                <div class="comment-text">
                                    <h3>{{$comment->fromName}}| 03 nov, 2017 </h3>
                                    <p>{{$comment->content}}</p>
                                </div>
                            </li>
                                
                            @endif


                      
                            @endforeach
                        </ul>
                    </div>
                    <!-- Commert Form -->
                    <div class="row">
                        <div class="col-md-9 comment-from">
                            <h2>Leave a comment</h2>
                            @if ($errors->any()) 
                            <div class="alert alert-danger"> 
                            <ul> @foreach ($errors->all() as $error) 
                            <li>{{ $error }}</li> 
                            @endforeach </ul> 
                            </div> 
                            @endif


                            <form class="form-class" action="/comments/{{$article->id}}" method="POST">
                                @csrf

                                <div class="row">
                                    @if (Auth::check())
                                        <div class="col-sm-12">
                                            <textarea name="message" placeholder="Message"></textarea>
                                            <button type="submit" class="site-btn">send</button>
                                        </div>
                                    @else
                                        <div class="col-sm-6">
                                            <input type="text" name="name" placeholder="Your name">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" name="email" placeholder="Your email">
                                        </div>
                                        <div class="col-sm-12">
                                            <textarea name="message" placeholder="Message"></textarea>
                                            <button type="submit" class="site-btn">send</button>
                                        </div>
                                    @endif

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar area -->
            <div class="col-md-4 col-sm-5 sidebar">
                <!-- Single widget -->
                <div class="widget-item">
                    <form action="#" class="search-form">
                        <input type="text" placeholder="Search">
                        <button class="search-btn"><i class="flaticon-026-search"></i></button>
                    </form>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Categories</h2>
                    <ul>
                        @foreach ($categories as $category)
								<li><a href="/categories/{{$category->id}}">{{$category->name}}</a></li>
						@endforeach
                    </ul>
                </div>
            
                <!-- Single widget -->
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