<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="/">Blogger</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse media-right" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/popular">Popular</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/browse">Browse</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/categories">Categories</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                @if(Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="/users/{{ Auth::user()->name }}">
                            {{ Auth::user()->name }}
                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link signup" href="/register">Sign up</a>
                    </li>
                @endif
            </ul>
        </div>

    </div>
</nav>