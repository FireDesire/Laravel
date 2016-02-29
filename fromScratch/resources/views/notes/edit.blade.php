@extends('layout')

@section('content')
    <h1>Edit Note</h1>

    <form method="POST" action="/notes/{{$note->id}}">

        {{method_field('PATCH')}}

        <textarea name="body">{{$note->body}}</textarea>

        <div>
            <button type="submit">Update Note</button>
        </div>
    </form>
@stop