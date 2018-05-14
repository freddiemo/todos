@extends('layout')

@section('content')
    <br><br><br><br>
    @foreach($todos as $todo)
        {{ $todo->todo }}
        <hr>
    @endforeach
@stop