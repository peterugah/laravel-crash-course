<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Task;
use \App\Project;
class TaskController extends Controller
{
    //

    public function create(Project $project)
    {
        return view("task.create")->withProject($project->id);
    }
    public function store(Request $request)
    {
        $verified = $request->validate([

            "project_id"=>'required',
            "description"=>"min:5"
        ]);

        \App\Task::create($verified);
        return redirect("/");
    }
    public function updateIsComplete(Task $task , Request $request)
    {
        $request->is_complete = $request->is_complete == 'on' ? 1 : 0;
       $task->update([
           "is_complete"=>$request->is_complete
       ]);
       return back();
    }
}
