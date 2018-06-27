 <link rel="stylesheet" href="{{ secure_asset('css/favoritebtn.css') }}">

@if (Auth::user()->is_favorites($newspost->id))
    {!! Form::open(['route' => ['user.unfavorite', $newspost->id], 'method' => 'delete']) !!}
    {!! Form::submit('Unfavorite', ['class' => "square_btn"]) !!}
        {!! Form::close() !!}
@else
    {!! Form::open(['route' => ['user.favorite', $newspost->id]]) !!}
    {!! Form::submit('Favorite', ['class' => "square_btn"]) !!}
    {!! Form::close() !!}
@endif