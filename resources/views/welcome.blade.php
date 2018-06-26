
@extends('layouts.welcomeapp')
@section('cover')
       
	        <div class="row">
	    	<div class="cover-img" style="background-image:url('dog.jpg');">
		    <div class="cover-text text-center">
		        
				<p style="color: #fff;">Welcome To Letian News</p>
				<a href="{{ route('signup.get') }}" class="square_btn">☞Go to SignUp</a>
				<a href="{{ route('login') }}" class="square_btn">☞Go to LogIn</a>
				
			</div>
	    	</div>
        	</div>

@endsection



