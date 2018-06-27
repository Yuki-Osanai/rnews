<ul class="media-list">
@foreach ($newsposts as $newspost)
    <?php $user = $newspost->user; ?>
    <li class="media">
        <div class="media-left">
            <img class="media-object img-rounded" src="{{ Gravatar::src($user->email, 50) }}" alt="">
        </div>
        <div class="media-body">
            <div>
                {!! link_to_route('users.show', $user->name, ['id' => $user->id]) !!} <span class="text-muted">posted at {{ $newspost->created_at }}</span>
            </div>
            <div>
                <p>{!! nl2br(e($newspost->content)) !!}</p>
                @include('user_favorite.favorite_button')
                
                
            </div>
            <div>
                @if (Auth::user()->id == $newspost->user_id)
                    {!! Form::open(['route' => ['newsposts.destroy', $newspost->id], 'method' => 'delete']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                    {!! Form::close() !!}
                @endif
            </div>
            
        </div>
    </li>
@endforeach
</ul>
{!! $newsposts->render() !!}