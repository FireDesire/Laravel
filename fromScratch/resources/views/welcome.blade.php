@extends('layout')
@section('header')

    <h1>You are most welcome</h1>

    @stop
@section('content')
    @foreach($people as $person)
    <li>{{ $person }}</li>
    @endforeach
@stop

@section('footer')
    <script>
        alert('welcome page');
    </script>
    @stop
