@extends('layouts.app')
<link rel="stylesheet" href="css/ranking.css">

@section('content')
    <h1>Favoriteランキング</h1>
    @include('newsposts.ichiran', ['newsposts' => $newsposts])

@endsection