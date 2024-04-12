<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO-List App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="bg-dark py-2">
        <h1 class="text-white text-center">Todo List App</h1>
    </div>
    <div class="container">
        <div class="d-flex justify-content-between my-5">
            <h2>All Todos</h2>

            <a href="{{route('todo.create')}}" class="btn btn-primary btn-lg">Add Todo</a>
        </div>

        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">SL</th>
                    <th scope="col">TaskName</th>
                    <th scope="col">TaskTime</th>
                    <th scope="col">TaskDate</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td><a href="{{route('todo.update')}}" class="btn btn-warning">Edit</a> <a href="" class="btn btn-danger">Delete</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>