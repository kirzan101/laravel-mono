<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all();

        return view('task.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() //GET
    {
        return view('task.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //POST
    {
        $request->validate([
            'name' => 'required|min:2',
            'assigned_date' => 'required|date'
        ]);

        Task::create([
            'name' => $request->name,
            'assigned_date' => $request->assigned_date
        ]);

        return redirect('/tasks')->with('message', 'Succeddfully Created');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $task = Task::find($id);

        return view('task.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $task = Task::find($id);

        return view('task.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:2',
            'assigned_date' => 'required|date'
        ]);

        $task = Task::find($id);

        $task = tap($task)->update([
            'name' => $request->name,
            'assigned_date' => $request->assigned_date
        ]);

        return redirect('/tasks')->with('message', 'Successfully Updated!.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $task = Task::find($id);

        $task->delete();

        return redirect('/tasks')->with('message', 'Successfully Deleted!');
    }
}
