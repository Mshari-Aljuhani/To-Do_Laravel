<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, Project $project)
    {
        $request->validate([
            'description' => 'min:3|max:50|required',
            'dueDate' => 'after_or_equal:today|nullable'
        ]);

        $task = new Task([
        'description' => $request->description,
        'dueDate' => $request->dueDate,
        'color' => $request->color,
        'category_id' => $request->category_id ?? null,
        'user_id' => Auth::id(),
        ]);

        $project->tasks()->save($task);

        $task->save();
        return redirect()->back()->with('status', 'the task added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Task $task)
    {
        if (Auth::id() != $task->user_id) {
            return abort(401);
        }
        $request->validate([
            'description' => 'min:3|max:50|required|unique:tasks,description,'.$task->id,
            'dueDate' => 'after_or_equal:today|nullable'
        ]);

        $task->update($request->all());
        return redirect()->back()->with('status', 'Task updated successfully');
    }

    public function check(Request $request){
        $task = Task::find($request->id);
        if (Auth::id() != $task->user_id) {
            return abort(401);
        }
        if($task->checked){
            $task->checked = 0;
            $task->update();
            return redirect()->back()->with('status', 'Task undo successfully');
        }
            $task->checked = true;
            $task->update();
            return redirect()->back()->with('status', 'Task checked successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Task $task)
    {
        if (Auth::id() != $task->user_id) {
            return abort(401);
        }
        $task->delete();
        return redirect()->back()->with('status', 'Task Deleted successfully');
    }
}
