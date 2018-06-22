<!DOCTYPE html>
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
    <li><a href="#"> <span class = "glyphicon glyphicon-pencil"></span></a></li>
   
    <!--リンク先要変更-->
    <li>{!! link_to_route('users.show', 'Letian🐼News', ['id' => Auth::id()]) !!}</li>
          @if (Auth::check())
                <div class="dropdown">
                    <button type="button" class="btn btn-default">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" > <span class = "glyphicon glyphicon-menu-hamburger"></span></a>
                        <ul class="dropdown-menu">
                            <li>{!! link_to_route('users.show', 'My Page', ['id' => Auth::id()]) !!}</li>
                            <li>{!! link_to_route('logout.get', 'Ranking') !!}</li> <!--リンク先要変更-->
                            <li>{!! link_to_route('logout.get', 'Logout') !!}</li>
                        </ul>
                        </button>
                </div>
              @else
                            <li>{!! link_to_route('signup.get', 'Sign up') !!}</li>
                            <li>{!! link_to_route('login', 'Login') !!}</li>
              @endif
    </ul>
    </div>
   </div>
 </div>
 
 
 <style>
i{
font-size: 1.3em;
color: inherit;
}
 
/*.navbar .navbar-inner {*/
/*padding: 0;*/
/*}*/
 
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
 
/*.navbar .nav li:last-child a {*/
/*border-right: 0;*/
/*border-radius: 0 3px 3px 0;*/
/*}*/
 </style>
</header>
</html>
