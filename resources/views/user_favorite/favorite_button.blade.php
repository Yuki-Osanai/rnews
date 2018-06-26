@if (Auth::user()->is_favorites($newspost->id))
    {!! Form::open(['route' => ['user.unfavorite', $newspost->id], 'method' => 'delete']) !!}
    {!! Form::submit('Unfavorite', ['class' => "btn btn-danger btn-xs"]) !!}
        {!! Form::close() !!}
@else
    {!! Form::open(['route' => ['user.favorite', $newspost->id]]) !!}
    {!! Form::submit('Favorite', ['class' => "btn btn-primary btn-xs"]) !!}
    {!! Form::close() !!}
@endif