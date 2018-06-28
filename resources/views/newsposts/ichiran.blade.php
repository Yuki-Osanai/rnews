 @extends('layouts.app')
 <link rel="stylesheet" href="{{ secure_asset('css/ichiran.css') }}">
 
 @section('content')
 @foreach ($newsposts as $key => $newspost)
 
<div class="main">
    <div class="kakomi-maru2">

    <?php $user = \App\User::find($newspost->user_id); ?>
  <div class="media-body">
      
@if (isset($newspost->count))
                            
                               <p class="text-center">{{ $key+1 }}位: {{ $newspost->count}} Favorite</p>
    @endif
            <div class="yoko">
            
            <aside class="col-xs-4">
                <img class="media-object img-rounded img-responsive" src="{{ Gravatar::src($user->email, 300) }}" alt="">
            </aside>
            </div>
            
            
            <div class="col-xs-8">
            <div>
                {!! link_to_route('mypage.show', $user->name, ['id' => $user->id]) !!} <span class="text-muted">posted at {{ $newspost->created_at }}</span>
            </div>
             <div>
                <div class ="title-sentence"><strong>{!! nl2br(e($newspost->title)) !!}</strong></div>
                <a href="{!! nl2br(e($newspost->url)) !!}">{!! nl2br(e($newspost->url)) !!}</a>
                <p>{!! nl2br(e($newspost->content)) !!}</p>

             </div>   
             </div>
             
             </div>

            
            
            <div class="inu">
                @include('user_favorite.favorite_button', ['newsposts' => $newspost])
                
                @if (Auth::id() == $newspost->user_id)
                    {!! Form::open(['route' => ['newsposts.destroy', $newspost->id], 'method' => 'delete']) !!}
                        {!! Form::submit('Delete', ['class' => 'square_btn']) !!}
                        
                        
                    {!! Form::close() !!}
                @endif
                 
                 {!! link_to_route('comment', 'Comment', ['id' => $newspost->id] , ['class' => 'square_btn_2']) !!}
            </div>
        </div>
        </div>
        </div>
@endforeach
@endsection