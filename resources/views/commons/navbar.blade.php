<header>
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">
              
                <a class="navbar-brand" href="/" class="btn btn-default">R-News</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" class="btn btn-default">My Page</a></li>
                    <li><a href="#" class="btn btn-default">Ranking</a></li>
                    
                     @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                        
                    @endauth
                </div>
            @endif
                </ul>
            </div>
        </div>
    </nav>
</header>