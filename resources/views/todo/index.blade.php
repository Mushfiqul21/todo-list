<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO-List App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="bg-dark py-2">
        <h1 class="text-white text-center">Todo List App</h1>
    </div>
    <div class="container">
        <div class="d-flex justify-content-between my-5">
            <h2>All Todos</h2>

            <a href="{{ route('todo.add') }}" class="btn btn-primary btn-lg">Add Todo</a>
        </div>

        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">SL</th>
                    <th scope="col">TaskName</th>
                    <th scope="col">TaskTime</th>
                    <th scope="col">TaskDate</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($todoList as $key => $data)
                    <tr>
                        <th scope="row">{{ $offset + $key + 1 }}</th>
                        <td>{{ $data->taskname }}</td>
                        <td>{{ $data->tasktime }}</td>
                        <td>{{ $data->taskdate }}</td>
                        <td><img src="images/{{ $data->image }}" width="50px" height="50px"></td>
                        <td><a href="{{ route('todo.edit', $data->id) }}" class="btn btn-warning">Edit</a> <a
                                href="{{ route('todo.delete', $data->id) }}" class="btn btn-danger">Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="{{ $currentPage > 1 ? route('todo.index',['page'=>$currentPage - 1]): '#' }}">Previous</a></li>
                @for($i = 1; $i <= $totalPages; $i++)
                <li class="page-item"><a class="page-link" href="?page={{$i}}">{{ $i }}</a></li>
                @endfor
                <li class="page-item"><a class="page-link" href="{{$currentPage < $totalPages ? route('todo.index', ['page'=>$currentPage + 1]): '#' }}">Next</a>
            </ul>
        </nav>
    </div>
</body>

</html>
