@extends('layouts.app')
@section('title')
    Create Todos
@endsection
@section('content')
    <h1 class="text-center my-5">Create Todos</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-default">
                <div class="card-header">Create new todo</div>
                <div class="card-body">
                    <form action="/store-todos" method="POST">
                        @csrf
                        <div class="form-group">
                            <input class="form-control" placeholder="Name" type="text" name="name">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Description" name="description" id="" cols="5" rows="6"></textarea>
                        </div>
                        <div class="form-group text-center">
                        <button type="submit" class="btn btn-success">Create</button>
                        </div>
                    </form></div>
            </div>
        </div>
    </div>
@endsection