@extends('layouts.app')
<link rel="stylesheet" href="{{ secure_asset('css/ichiran.css') }}">

@section('content')
    <h1>Favoriteランキング</h1>
    
    @include('newsposts.ichiran', ['newsposts' => $newsposts])

@endsection