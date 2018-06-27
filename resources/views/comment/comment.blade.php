@extends('layouts.app')

@section('content')

    <h1>詳細ページ</h1>
    
    <table class="table table-bordered">
        
    <p>{!! nl2br(e($newspost->url)) !!}</p>
    <p>{!! nl2br(e($newspost->content)) !!}</p>
    <p>{!! nl2br(e($newspost->title)) !!}</p>

@endsection
