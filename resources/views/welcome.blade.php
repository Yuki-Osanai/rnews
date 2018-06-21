<<<<<<< HEAD
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
              @include('layouts.app')
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>R-News</title>
        
          
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            .container {
                 margin-left: auto;
                 margin-right:auto;   
            }
            
             .cover-img {
                	height: 100px;
                	display: table;
                	width: 100%;
                	background-size: cover;
                }

                /* ワイドスクリーン用のCSS */
                @media only screen and (min-width: 100px) {
            	.cover-img {
	            	height: 800px;
            	}
                }

                /* タブレット用のCSS */
                @media only screen and (min-width : 768px) and (max-width : 1200px) {
            	.cover-img {
            		height: 500px;
                	}
                }

                /* スマホ用のCSS */
                @media only screen and (max-width: 479px) {
            	.cover-img {
            		height: 300px;
                	}
                }

                .cover-text {
                	display: table-cell;
                	vertical-align: middle;
                   text-align: center;
                     font-size:600%;
                     font-family :Monotype Corsiva, sans-serif;
                     
                }
                
                .square_btn {
                    position: relative;
                    display: inline-block;
                    padding: 0.45em 0.9em;
                    text-decoration: none;
                    background: #00BCD4;/*背景色*/
                    color: #00BCD4;/*=背景色*/
                    box-shadow: inset 0 2px 0 rgba(255,255,255,0.2);
                    border-bottom: solid 2px #118e9e;
                    border-radius: 4px;
                    text-shadow: -1px -1px rgba(255, 255, 255, 0.44), 1px 1px rgba(0, 0, 0, 0.38);
                }

                .square_btn:active {/*押したとき*/
                    border-bottom: solid 2px #00BCD4;
                    box-shadow: none;
                    text-shadow: -1px -1px rgba(255, 255, 255, 0.3), 1px 1px rgba(0, 0, 0, 0.3);
                }
         

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
            <div class="container-fluid">
	        <div class="row">
	    	<div class="cover-img" style="background-image:url('back.jpg');">
		    <div class="cover-text text-center">
		        
				<p style="color: #fff;">Welcome To Leutain News</p>
				<a href="#" class="square_btn">☞Go to see</a>
			</div>
	    	</div>
        	</div>
=======
@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <?php $user = Auth::user(); ?>
        {{ $user->name }}
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Letion News</h1>
                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
>>>>>>> 328ab395c4f2c00f923b405c97ef91dc4ec2c756
            </div>
     

            
        </div>
    @endif
@endsection