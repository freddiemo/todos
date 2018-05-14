@extends('layout')

@section('content')
    <br><br><br><br>
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <form action="/create/todo" method="post">
                {{ csrf_field() }}
                <input type="text" class="form-control input-lg" name="todo"
                placeholder="Create a new todo">
            </form>
            </div>
        </div>
    </div>
    <hr>
    @foreach($todos as $todo)
        {{ $todo->todo }}
        <hr>
    @endforeach
@stop