 @extends('layouts.app')
 @section('content')
 @foreach ($newsposts as $newspost)
    <?php $user = \App\User::find($newspost->user_id); ?>
  <div class="media-body">
            <div>
                
                {!! link_to_route('users.show', $user->name, ['id' => $user->id]) !!} <span class="text-muted">posted at {{ $newspost->created_at }}</span>
            </div>
             <div>
                <p>{!! nl2br(e($newspost->url)) !!}</p>
                <p>{!! nl2br(e($newspost->content)) !!}</p>
                
                @if($newspost->font == "1")
                <div class = 'selectfontA'>
                <p>{!! nl2br(e($newspost->title)) !!}</p>
                <p>A</p>
                </div>
                @else
                <div class = "h4">
                <p>{!! nl2br(e($newspost->title)) !!}</p>
                <p>B</p>
                </div>
                @endif
                
                  @include('user_favorite.favorite_button', ['newsposts' => $newspost])
            </div>
            
            <div>
                @if (Auth::id() == $newspost->user_id)
                    {!! Form::open(['route' => ['newsposts.destroy', $newspost->id], 'method' => 'delete']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                    {!! Form::close() !!}
                    
                @endif
            </div>
        </div>
@endforeach
@endsection