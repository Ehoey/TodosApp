@extends('layouts.app')

@section('content')
    <h1 class="text-center my-5">
        {{$todos->name}}
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-default">
                <div class="card-header">
                    Details
                </div>
                <div class="card-body">
                    {{$todos->description}}
                </div>
            </div>
        </div>
    </div>
@endsection