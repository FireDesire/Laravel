@extends('layout')

@section('content')
     <h1>{{$card->title}}</h1>
     @foreach($card->notes as $note)
         <ul>
          <li> {{ $note->body }}
             <a href="#" style="float: none;"> {{$note->user->username}}</a>
          </li>
         </ul>
     @endforeach

     <hr>
     <h3> Add a New Note</h3>

     <form method="POST" action="/cards/{{ $card->id }}/notes">
         <textarea name="body"></textarea>

         <div>
             <button type="submit"> Add Note</button>
         </div>
     </form>
@stop