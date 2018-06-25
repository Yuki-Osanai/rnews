@extends('layouts.app')

@section('content')
            <style>
            
            .row{
               
                     font-family :cursive, sans-serif;
            }
                p {
                    text-align: center;
                   
                    }
                    
                .form-group{
                
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
                    border-left: solid 6px #ff7c5c;/*左線*/
                    color: #ff7c5c;/*文字色*/
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
                <li role="presentation" class="{{ Request::is('users/' . $user->id) ? 'active' : '' }}"><a href="{{ route('users.show', ['id' => $user->id]) }}">Letian News投稿フォーム<span class="badge">{{ $count_newsposts }}</span></a></li>
            </ul>
            
            
            @if (Auth::id() == $user->id)
                  {!! Form::open(['route' => 'newsposts.store']) !!}
                      <div class="form-group">
                          
                          <p>ニュースのURL</p>
                          {!! Form::textarea('url', old('url'), ['class' => 'form-control', 'rows' => '2']) !!}
                          <p>ニュースタイトル（150字以内）</p>
                          {!! Form::textarea('title', old('title'), ['class' => 'form-control', 'rows' => '2']) !!}
                          <p>コメント（200字以内）</p>
                          {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '2']) !!}
                          <a href="{{ route('login') }}" class="square_btn">POST</a>
                         
                      </div>
                  {!! Form::close() !!}
            @endif
         
           
        </div>
    </div>
@endsection