<?php

namespace App\Http\Controllers;
use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    //
    public function index(){
        $todos=Todo::all();
        return view('todos.index')->with('todos',$todos);  //with('key show the data in view','data');
    }
    public function show($todosId){

        $todo = Todo::find($todosId);
        return view('todos.show')->with('todos',$todo); //get dynamic value return each ID page
    }
    public function create(){
        return view('todos.create');
    }
    public function store(){
        $this->validate(request(),[
            'name' => 'required|min:3|max:12',
            'description' =>'required'
        ]);
        $data = request()->all();
        $todo = new Todo();
        $todo-> name =$data['name'];
        $todo->description=$data['description'];
        $todo->completed=false;
        $todo->save();
        return redirect('/todos');
    }
}
