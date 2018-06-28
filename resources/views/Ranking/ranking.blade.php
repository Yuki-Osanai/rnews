@extends('layouts.app')

<link rel="stylesheet" href="{{ secure_asset('css/ichiran.css') }}">
<link rel="stylesheet" href="{{ secure_asset('css/ranking.css') }}">



@section('content')
    <h1>Favoriteランキング</h1>
    
    @include('newsposts.ichiran', ['newsposts' => $newsposts])

@endsection