<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        $perPage = 5;
        $currentPage = $request->page ? $request->page : 1; // Adjusting for starting from page 1
        $offset = ($currentPage - 1) * $perPage;
        
        $todoData = Todo::offset($offset)->limit($perPage)->get();
        $totalPages = ceil(Todo::count() / $perPage);
    
        return view('todo.index', [
            'todoList' => $todoData,
            'currentPage' => $currentPage,
            'totalPages' => $totalPages,
            'offset' => $offset
        ]);
    }
    

    public function create()
    {
        return view('todo.add');
    }
    public function store(Request $request)
    {
        $request->validate([
            'taskname' => 'required|string|min:3|max:255', 
            'tasktime' => 'required',
            'taskdate' => 'required|date|after_or_equal:today',
            'images' => 'image|mimes:jpeg,png,jpg,gif,svg', 
        ]);
        $imageName = Null;
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
        
            $request->image->move(public_path('images'), $imageName);
        }
    
        $todo = new Todo();
        $todo->taskname = $request->taskname;
        $todo->tasktime = $request->tasktime;
        $todo->taskdate = $request->taskdate;
        $todo->image = $imageName;
        if ($todo->save()) {
            return redirect()->route('todo.index');
        }

        return redirect()->back();
    }

    public function edit($id)
    {
        $data = Todo::find($id);
        return view('todo.edit', ['todoData'=>$data]);
    }

    public function destroy($id)
    {
        Todo::find($id)->delete();
        return redirect()->route('todo.index');
    }

    public function update(Request $request, $id)
    {
        $todo = Todo::find($id);
        $todo->taskname = $request->taskname;
        $todo->tasktime = $request->tasktime;
        $todo->taskdate = $request->taskdate;
        if ($todo->save()) {
            return redirect()->route('todo.index');
        }
    }

}
