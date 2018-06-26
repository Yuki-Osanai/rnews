@extends('layouts.app')

@section('content')

        <style>
        
        .panel-title2{
                   
                    padding: 0.5em 1em;
                   
                    background: #f7f7f7;
                    border-left: solid 6px #8da0b6;/*左線*/
                 
                   
                    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.29);
        }
        
        .media-body{
                    display:block;
                    border: solid 2px #6091d3;/*線*/
                    border-radius: 10px;/*角の丸み*/
                    margin:20px;
                    padding: 0.5em 1em;
                    width:700px;
                    
                 
        }
      
      
       
  
        </style>


    <div class="row">
        <aside class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $user->name }}</h3>
                </div>
                <div class="panel-body">
                    <img class="media-object img-rounded img-responsive" src="{{ Gravatar::src($user->email, 500) }}" alt="">
                </div>
            </div>
           
             <h3 class="panel-title2">
                        <p role="presentation" class="{{ Request::is('users/*/favorite') ? 'active' : '' }}"><a href="{{ route('users.favorites', ['id' => $user->id]) }}">My Favorites </a></p>
                    </h3>  
              
                  
          
     </aside>
        
<div class="col-xs-8">
 <ul class="nav nav-tabs nav-justified">
       <li role="presentation" class="{{ Request::is('users/' . $user->id) ? 'active' : '' }}"><a href="{{ route('mypage.show', ['id' => $user->id]) }}">TimeLine </a></li>
       
 </ul> 
 
    @foreach ($newsposts as $newspost)
    <?php $user = $newspost->user; ?>
    
    <div class="media-body">
        <div class="news-posting">
                
                {!! link_to_route('users.show', $user->name, ['id' => $user->id]) !!} <span class="text-muted">posted at {{ $newspost->created_at }}</span>
            
             <div>
                <p>{!! nl2br(e($newspost->url)) !!}</p>
                <p>{!! nl2br(e($newspost->content)) !!}</p>
                <p>{!! nl2br(e($newspost->title)) !!}</p>
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
    </div>
    
    
    
    
@endforeach
@endsection






{!! $newsposts->render() !!}