@extends('layouts.app')

@section('content')

    <h1>詳細ページ</h1>
    
    <table class="table table-bordered">
        
    <p>{!! nl2br(e($newspost->url)) !!}</p>
    <p>{!! nl2br(e($newspost->content)) !!}</p>
    <p>{!! nl2br(e($newspost->title)) !!}</p>



                  {!! Form::open(['route' => 'comments.store']) !!}
                      <div class="form-group">
                          
                          <h3>コメント（200字以内）</h3>
                          {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '4']) !!}
                          {!! Form::submit('Post', ['class' => 'square_btn', 'rows' => '2'])!!}

                        
                      </div>
                  {!! Form::close() !!}

@endsection
