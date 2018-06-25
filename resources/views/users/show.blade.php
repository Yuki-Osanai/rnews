@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-xs-8">
            <ul class="nav nav-tabs nav-justified">
                <li role="presentation" class="{{ Request::is('users/' . $user->id) ? 'active' : '' }}"><a href="{{ route('users.show', ['id' => $user->id]) }}">Letian News投稿フォーム<span class="badge">{{ $count_newsposts }}</span></a></li>
        
            </ul>
            
            @if (Auth::id() == $user->id)
                  {!! Form::open(['route' => 'newsposts.store']) !!}
                      <div class="form-group">
                          <p>ニュースのURL</p>
                          {!! Form::textarea('url', old('url'), ['class' => 'form-control', 'rows' => '2']) !!}
                          <p>ニュースタイトル（○字以内）</p>
                          {!! Form::textarea('title', old('title'), ['class' => 'form-control', 'rows' => '2']) !!}
                          <p>コメント（○字以内）</p>
                          {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '2']) !!}
                          {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
                      </div>
                  {!! Form::close() !!}
            @endif

           
        </div>
    </div>
@endsection