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
}
