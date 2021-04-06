<div class="col-md-4 col-sm-5 sidebar">
    <!-- Single widget -->
    <div class="widget-item">
        @include('partials.search')
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