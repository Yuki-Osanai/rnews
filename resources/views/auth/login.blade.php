@extends('layouts.app')

@section('content')
<style>

.box17{
    padding: 0.2em 0.5em;
    margin: 2em 0;
    background: #C0C0C0;
    box-shadow: 0px 0px 0px 10px #C0C0C0;
    border: dashed 2px white;
}
.box17 p {
    margin: 0; 
    padding: 0;
}
                    
.square_btn{
    margin-left : 375px ; 
    display: inline-block;
    padding: 0.5em 1em;
    text-decoration: none;
    background: #f7f7f7;
    border-left: solid 6px #ff7c5c;/*左線*/
    color: #ff7c5c;/*文字色*/
    font-weight: bold;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.29);
}
                    
.square_btn:active {
    box-shadow: inset 0 0 2px rgba(128, 128, 128, 0.1);
    transform: translateY(2px);
}


</style>






    <div class="text-center">
        <h1>Log in</h1>
    </div>

    <div class="row">
    
        <div class="col-md-6 col-md-offset-3">
                <div class="box17">
            {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>
                {!! Form::submit('Log in', ['class' => 'square_btn']) !!}
               
            {!! Form::close() !!}

            <p>New user? {!! link_to_route('signup.get', 'Sign up now!') !!}</p>
        </div>
    </div>
    </div>
@endsection