<form action="/search" method="POST" class="search-form">
    @csrf
    <input type="text" name="search" placeholder="Search">
    <button type="submit" class="search-btn"><i class="flaticon-026-search"></i></button>
</form>