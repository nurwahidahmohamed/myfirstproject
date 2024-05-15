<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //query using ORm Eloquent tp get all task from Task Model
        $tasks = Task::all();

        //return to view with $tasks
        //dalam resources/views/tasks/index.blade.php + $tasks
        return view('tasks.index', compact('tasks'));
        //compact tu maksud hantar data $task

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //nak tunjuk form create dalam folder task/create.blade
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request)
    {
        //store in db using Model Task
        $task = new Task(); //new Task tu hasilkan new object
        $task->title = $request->title;
        $task->description = $request->description;
        $task->save();


        //return to index tasks
        return redirect()->route('tasks.index');


    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //Task $task adalah model binding
        return view('tasks.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        //
        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        //tak perlu masuk $task = new Task(); sebab update ni terus masuk db
        $task->title = $request->title;
        $task->description = $request->description;
        $task->save();

        //return to index tasks
        return redirect()->route('tasks.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
        $task->delete();

        return redirect()->route('tasks.index');
    }
}
