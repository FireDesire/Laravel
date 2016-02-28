@extends('layout')

@section('content')
    <h1> {{$person->name}} </h1>
    {{--<h1> {{$phone[0]->number}} </h1>--}}
   @foreach($person->phones as $phone)

           {{ $phone->number }}

   @endforeach
@stop