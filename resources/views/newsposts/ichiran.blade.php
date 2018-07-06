 @extends('layouts.app')
 <link rel="stylesheet" href="{{ secure_asset('css/ichiran.css') }}">
 
 @section('content')
 @foreach ($newsposts as $key => $newspost)
 

<div class="main">
    <div id="kakomi-maru2">

    <?php $user = \App\User::find($newspost->user_id); ?>
  <div class="media-body">
      
@if (isset($newspost->count))
                            
                               <p class="text-center">{{ $key+1 }}位: {{ $newspost->count}} Favorite</p>
                       @endif

            <div>
                
               <span class="text-muted">posted at {{ $newspost->created_at }}</span>
            </div>
             <div>
                <div class ="title-sentence"><strong>{!! nl2br(e($newspost->title)) !!}</strong></div>
                <a href="{!! nl2br(e($newspost->url)) !!}">{!! nl2br(e($newspost->url)) !!}</a>
                <p>{!! nl2br(e($newspost->content)) !!}</p>
                
                
            </div>
            
            
            <div class="inu">
                @include('user_favorite.favorite_button', ['newsposts' => $newspost])
                
                @if (Auth::id() == $newspost->user_id)
                    {!! Form::open(['route' => ['newsposts.destroy', $newspost->id], 'method' => 'delete']) !!}
                        {!! Form::submit('Delete', ['class' => 'square_btn']) !!}
                        
                        
                    {!! Form::close() !!}
                @endif
                 
                 {!! link_to_route('comment', 'Comment', ['id' => $newspost->id] , ['class' => 'square_btn_2']) !!}
                 
                 <form>
                    <INPUT type="button" value="silver" onClick="changeColor(0)">
                    <INPUT type="button" value="orange" onClick="changeColor(1)">
                    <INPUT type="button" value="pink" onClick="changeColor(2)">
                    <INPUT type="button" value="skyblue" onClick="changeColor(3)">
                </form>
            
            </div>
        </div>
        </div>
        </div>
@endforeach
@endsection