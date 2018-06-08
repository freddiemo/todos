<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('todos')->with('todos', $todos);
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $todo = new Todo;

        $todo->todo = $request->todo;
        $todo->save();

        return redirect()->back();
    }

    public function delete(Request $request, $id)
    {
        $todo = Todo::find($id);

        $todo->delete();

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $todo = Todo::find($id);

        return view('update')->with('todo', $todo);
    }

    public function save(Request $request, $id)
    {
        $todo = Todo::find($id);

        $todo->todo = $request->todo;

        $todo->save();

        return redirect()->route('todos');
    }

    public function completed($id)
    {
        $todo = Todo::find($id);

        $todo->completed = 1;
        $todo->save();

        return redirect()->back();
    }
}
