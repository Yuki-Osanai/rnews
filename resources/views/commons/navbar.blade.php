<link rel="stylesheet" href="css/navbar.css">

<html>
    <header>
<div class="navbar navbar-default" role="navigation">
  　<div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>

        </div>
    
</div>
   <div class="navbar-collapse collapse">
    
    <ul class="nav navbar-nav">
     @if (Auth::check())
                <div class="dropdown">
                    <button type="button" class="btn btn-default dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" > 
                     <span class = "glyphicon glyphicon-menu-hamburger"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li>{!! link_to_route('mypage.show', 'My Page', ['id' => Auth::id()]) !!}</li> 
                            <li>{!! link_to_route('ranking.favorite', 'Ranking') !!}</li> 
                            <li>{!! link_to_route('logout.get', 'Logout') !!}</li>
                        </ul>
                    </button>
                </div>
              @else
                            <li>{!! link_to_route('signup.get', 'Sign up') !!}</li>
                            <li>{!! link_to_route('login', 'Login') !!}</li>
              @endif  
        <li>{!! link_to_route('ichiran', 'Letian🐼News', ['id' => Auth::id()]) !!}</li>  <!--timeline(toppage)にリンク先要変更-->
     <li>{!! link_to_route('users.show', '✎', ['id' => Auth::id()]) !!}</li>
        
    
    </ul>
    
    </div>
   </div>
 </div>
 
    </header>
</html>
