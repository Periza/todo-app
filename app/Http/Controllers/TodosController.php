<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Todo;





class TodosController extends Controller
{
    public function index() {
        return view('todos.index');
    }

    public function show($id) {
        $todo = Todo::find($id);
    }

    public function create() {
        return view('todos.create');
    }
    public function store(Request $request) {

        $request->validate(['title' => 'required']);

        Todo::create($request->all());

    }
    public function edit() {
        return view('todos.edit');
    }

    public function update(Todo $todo) {
        request()->validate(['title' => 'required']);

        $todo->update();
    }

    public function delete(Product $product) {
        $product->delete();
    }
}
