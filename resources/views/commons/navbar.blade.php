
<html>
<<<<<<< HEAD
=======
   <header>
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
<<<<<<<<< saved version
                </button>
=========
                
>>>>>>>>> local version
                <a class="navbar-brand" href="mypage">Letian News</a>
            </div>
            
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                          @if (Auth::check())
                        <li>{!! link_to_route('users.index', 'Users') !!}</li>
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                            
                            <ul class="dropdown-menu">
                                <li>{!! link_to_route('users.show', 'News post', ['id' => Auth::id()]) !!}</li>
                                
                                
                                <li role="separator" class="divider"></li>
                                <li>{!! link_to_route('logout.get', 'Logout') !!}</li>
                                
                            </ul>
                        </li>
                        
                    @else
                        <li>{!! link_to_route('signup.get', 'Signup') !!}</li>
                        <li>{!! link_to_route('login', 'Login') !!}</li>
                    @endif
                </ul>
            </div>
=======
>>>>>>> ca551cf39081d7d0aca0b48bf4d903cf5f755cfc
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
<<<<<<< HEAD
=======
>>>>>>> origin/master
>>>>>>> ca551cf39081d7d0aca0b48bf4d903cf5f755cfc
        </div>
    
</div>
   <div class="navbar-collapse collapse">
    
    <ul class="nav navbar-nav">
        
        
     @if (Auth::check())
                <div class="dropdown">
                    <button type="button" class="btn btn-default">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" > <span class = "glyphicon glyphicon-menu-hamburger"></span></a>
                        <ul class="dropdown-menu">
                            <li>{!! link_to_route('users.show', 'My Page', ['id' => Auth::id()]) !!}</li> <!--newsposts.newspostsにリンク先要変更-->
                            <li>{!! link_to_route('login', 'Ranking') !!}</li> <!--リンク先要変更-->
                            <li>{!! link_to_route('logout.get', 'Logout') !!}</li>
                        </ul>
                    </button>
                </div>
              @else
                            <li>{!! link_to_route('signup.get', 'Sign up') !!}</li>
                            <li>{!! link_to_route('login', 'Login') !!}</li>
              @endif  
        
        <li>{!! link_to_route('users.show', 'Letian🐼News', ['id' => Auth::id()]) !!}</li>  <!--timeline(toppage)にリンク先要変更-->
        
     <li>{!! link_to_route('users.show', '✎', ['id' => Auth::id()]) !!}</li>
        
    
    </ul>
    
    </div>
   </div>
 </div>
 
 
 <style>
i{
font-size: 1.3em;
color: inherit;
}
 
.navbar .nav {
margin: 0;
display: table;
width: 100%;
}
 
.navbar .nav li {
display: table-cell;
float: none;
}
 
.navbar .nav li a {
font-weight: bold;
text-align: center;
}
</style>

    </header>
</html>
