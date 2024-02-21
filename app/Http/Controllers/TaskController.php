<?php
namespace App\Http\Controllers;
use App\Models\TaskManager;
use Illuminate\Http\Request;

class TaskController extends Controller
{


    
    public function index()
    {
        //get all data from database
        $task = TaskManager::all();
        return response()->json($task);
    }

    public function store(Request $request)
    {
        $task = new TaskManager();
    
        $task->title = $request->input('title');
        $task->description = $request->input('description');
        $task->due_date = $request->input('due_date');
        $task->status = $request->input('status');

        $task->save();
       
        return response()->json($task, 201);
    }

   
    public function show($id)
    {
         // GET(id)
        // show each product by its ID from database
        $task = TaskManager::find($id);
        return response()->json($task);
    }

   
   
    public function update(Request $request, $id)
    {
        // PUT(id)
        // Update Info by Id

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'due_date' => 'required',
            'status' => 'required'
         ]);

        $task = TaskManager::find($id);

        $task->title = $request->input('title');
        $task->description = $request->input('description');
        $task->due_date = $request->input('due_date');
        $task->status = $request->input('status');


        $task->save();

        return response()->json($task);

    }

  
    public function destroy($id)
    {   $task = TaskManager::find($id);
        $task->delete();
        return response()->json('task Deleted Successfully');
    }
}
