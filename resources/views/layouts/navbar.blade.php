<!-- Navigation -->
<nav class="navbar navbar-expand-sm navbar-dark bg-primary">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            
            @forelse(Session::get('categories') as $category)
                <li class="nav-item">
                    <a class="nav-link" href="/?category={{$category->id}}">{{$category->name}}</a>
                </li>
            @empty
                <p>No users</p>
            @endforelse
            
            <div class="clearfix"></div>

            <li class="nav-item">
                <a class="nav-link" href="#">Cart <span class="fas fa-shopping-cart"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/pay">Pay</a>
            </li>
        </ul>
    </div>
</nav>