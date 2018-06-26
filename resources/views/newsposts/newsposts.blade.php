@extends('layouts.app')

@section('content')

        <style>
        
        .panel-title2{
                   
                    padding: 0.5em 1em;
                   
                    background: #f7f7f7;
                    border-left: solid 6px #8da0b6;/*左線*/
                 
                   
                    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.29);
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
          
               
         <aside class="panel-title2"> <a href="#" >My Favorites</a></aside>
                
         
         
                   
　　            

                
     </aside>
        
<div class="col-xs-8">
 <ul class="nav nav-tabs nav-justified">
       <li role="presentation" class="{{ Request::is('users/' . $user->id) ? 'active' : '' }}"><a href="{{ route('users.show', ['id' => $user->id]) }}">TimeLine <span class="badge">{{ $count_newsposts }}</span></a></li>
 </ul> 
 
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


{!! $newsposts->render() !!}