@extends('layouts.app')
<link rel="stylesheet" href="{{ secure_asset('css/ranking.css') }}">


@section('content')
<div class=kakomi>
    
    <h1>Favoriteランキング</h1>
    @include('newsposts.ichiran', ['newsposts' => $newsposts])
</div>
@endsection