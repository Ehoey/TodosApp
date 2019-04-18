<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"  crossorigin="anonymous">
    <title>Todos</title>
</head>
<body>
    <h1 class="text-center my-5">Todos Page</h1>
    <div class="container">
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
    </div>
</body>
</html>