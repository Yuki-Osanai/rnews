@extends('layouts.app')

@section('content')
            <style>
            
            .row{
               
                    font-family :arial;
                    text-align: center;
                
            }
                p {
                    text-align: center;
                   
                    }
                    
                .form-group{
                    
                    font-size: 20px;
                    font-family: "arial";                
                    padding: 0.5em 1em;
                    margin: auto;
                    color: #5d627b;
                    background: white;
                    border-top: solid 5px #5d627b;
                    box-shadow: 0 3px 5px rgba(0, 0, 0, 0.22);
                    }
                    
                    .square_btn{
                    margin-left : 375px ; 
                    display: inline-block;
                    padding: 0.5em 1em;
                    text-decoration: none;
                    background: #f7f7f7;
                    border-left: solid 6px #8da0b6;/*左線*/
                    color: #8da0b6;/*文字色*/
                    font-weight: bold;
                    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.29);
                    }
                    .square_btn:active {
                    box-shadow: inset 0 0 2px rgba(128, 128, 128, 0.1);
                    transform: translateY(2px);
                    }
                    

            </style>
            

    <div class="row">
        <div class="col-xs-9 col-xs-offset-1">
            <ul class="nav nav-tabs nav-justified">
<<<<<<< HEAD
                <li role="presentation" class="{{ Request::is('users/' . $user->id) ? 'active' : '' }}"><a href="{{ route('users.show', ['id' => $user->id]) }}">Letian News投稿フォーム<span class="badge">{{ $count_newsposts }}</span></a></li>
        
=======
                <h3>Letian News投稿フォーム</h3>
                <!--<li role="presentation" class="{{ Request::is('users/' . $user->id) ? 'active' : '' }}"><a href="{{ route('users.show', ['id' => $user->id]) }}">Letian News投稿フォーム<span class="badge"></span></a></li>-->
>>>>>>> b72a417f4cdb8ba7785268c9c028a73e40daff69
            </ul>
            
            
            @if (Auth::id() == $user->id)
                  {!! Form::open(['route' => 'newsposts.store']) !!}
                      <div class="form-group">
                          
                          <p>ニュースURL</p>
                          {!! Form::textarea('url', old('url'), ['class' => 'form-control', 'rows' => '2']) !!}
                          <p>ニュースタイトル（150字以内）</p>
                          {!! Form::textarea('title', old('title'), ['class' => 'form-control', 'rows' => '2']) !!}
                          <p>コメント（200字以内）</p>
                          {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '2']) !!}
                          {!! Form::submit('Post', ['class' => 'form-control', 'rows' => '2'])!!}
                        
                      </div>
                  {!! Form::close() !!}
            @endif

           
        </div>
    </div>
@endsection