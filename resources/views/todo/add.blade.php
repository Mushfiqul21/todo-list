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
            <h2>Insert Task</h2>

            <a href="{{ route('todo.index') }}" class="btn btn-primary btn-lg">Back</a>
        </div>

        <div class="bg-success-subtle p-5">
            <form action="{{route('todo.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Task Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="taskname">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Task Time</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="tasktime">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Task Date</label>
                    <input type="date" class="form-control" id="exampleInputPassword1" name="taskdate">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Image</label>
                    <input type="file" class="form-control" id="exampleInputPassword1" name="image">
                </div>
                
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </form>
        </div>

    </div>
</body>

</html>