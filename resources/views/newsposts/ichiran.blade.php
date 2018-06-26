 @extends('layouts.app')
 @section('content')
 @foreach ($newsposts as $newspost)
    <?php $user = $newspost->user; ?>
  <div class="media-body">
            <div>
                
                {!! link_to_route('users.show', $user->name, ['id' => $user->id]) !!} <span class="text-muted">posted at {{ $newspost->created_at }}</span>
            </div>
             <div>
                <p>{!! nl2br(e($newspost->url)) !!}</p>
                <p>{!! nl2br(e($newspost->content)) !!}</p>
                <p>{!! nl2br(e($newspost->title)) !!}</p>
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