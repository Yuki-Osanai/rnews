@extends('layouts.app')
<link rel="stylesheet" href="{{ secure_asset('css/show.css') }}">

@section('content')



    <div class="row">
        <div class="col-xs-9 col-xs-offset-1">
            <ul class="nav nav-tabs nav-justified">
                <li role="presentation" class="{{ Request::is('users/' . $user->id) ? 'active' : '' }}"><a href="{{ route('users.show', ['id' => $user->id]) }}">Letian News投稿フォーム<span class="badge"></span></a></li>
        
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
                          
                          {!! Form::submit('Post', ['class' => 'square_btn', 'rows' => '2'])!!}

                        
                      </div>
                  {!! Form::close() !!}
            @endif

           
        </div>
    </div>
@endsection