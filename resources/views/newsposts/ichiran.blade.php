 @extends('layouts.app')
 <link rel="stylesheet" href="{{ secure_asset('css/ichiran.css') }}">
 @section('content')
 @foreach ($newsposts as $newspost)
 
<div class="main">
    <div class="kakomi-maru2">

    <?php $user = \App\User::find($newspost->user_id); ?>
  <div class="media-body">

            <div>
                
                {!! link_to_route('users.show', $user->name, ['id' => $user->id]) !!} <span class="text-muted">posted at {{ $newspost->created_at }}</span>
            </div>
             <div>
                <p>{!! nl2br(e($newspost->url)) !!}</p>
                <p>{!! nl2br(e($newspost->content)) !!}</p>
                <p>{!! nl2br(e($newspost->title)) !!}</p>
                  @include('user_favorite.favorite_button', ['newsposts' => $newspost])
            </div>
            
            <div>
                @if (Auth::id() == $newspost->user_id)
                    {!! Form::open(['route' => ['newsposts.destroy', $newspost->id], 'method' => 'delete']) !!}
                        {!! Form::submit('Delete', ['class' => 'square_btn']) !!}
                    {!! Form::close() !!}
                @endif
            </div>
            <div>
                 <li>{!! link_to_route('comment', 'Comment', ['id' => $newspost->id]) !!}</li> 
            </div>
        </div>
        </div>
        </div>
@endforeach
@endsection