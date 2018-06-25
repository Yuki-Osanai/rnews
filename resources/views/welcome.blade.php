@extends('layouts.welcomeapp')

@section('cover')
       
	        <div class="row">
	    	<div class="cover-img" style="background-image:url('back.jpg');">
		    <div class="cover-text text-center">
		        
				<p style="color: #fff;">Welcome To Leutain News</p>
				<a href="{{ route('signup.get') }}" class="square_btn">☞Go to SignUp</a>
				<a href="{{ route('login') }}" class="square_btn">☞Go to LogIn</a>
				
			</div>
	    	</div>
        	</div>
    
@endsection
<<<<<<< HEAD


<<<<<<< HEAD
=======
<<<<<<< HEAD
@section('content')
    @if (Auth::check())
        <div class="row">
            <aside class="col-xs-4">
                {!! Form::open(['route' => 'newsposts.store']) !!}
                    <div class="form-group">
                        {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '5']) !!}
                    </div>
                    {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
                {!! Form::close() !!}
            </aside>
            <div class="col-xs-8">
                @if (count($newsposts) > 0)
                    @include('newsposts.newsposts', ['newsposts' => $newsposts])
                @endif
            </div>
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the Newsposts</h1>
                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection
=======
>>>>>>> origin/master
>>>>>>> ca551cf39081d7d0aca0b48bf4d903cf5f755cfc
=======
>>>>>>> 83beb48ae6c10625cf3d8ef4322edba1e3ba3b53
