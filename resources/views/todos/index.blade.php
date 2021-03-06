@extends('layouts.app')
@section('title')
Todos List
@endsection
@section('content')
    <h1 class="text-center my-5">Todos Page</h1>
    <div class="row justify-content-center my-5">
        <div class="col-md-8 ">
            <div class="card card-default">
                <div class="card-header text-center">
                    Todo
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach($todos as $todo)
                            <li class="list-group-item">
                                {{$todo->name}}
                                <a href="/todos/{{$todo->id}}" class="btn btn-primary float-right btn-sm">view</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection