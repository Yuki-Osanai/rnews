@extends('layouts.app')

@section('content')
    <h1>Favoriteランキング</h1>
    @include('newsposts.ichiran', ['newsposts' => $newsposts])
@endsection