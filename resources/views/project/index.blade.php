@extends('layout')

@section("content")
    <a href="/create" class="button is-link">Create a project</a>
    <br><br>
    @if(count($allProjects))
    @foreach($allProjects as $project)
        <div class="box">
        <span>{{$project->title}}</span>
        <span class="is-size-6">
            <a href="/task/{{$project->id}}/create" class="button is-small has-text-grey">Add Task</a>
        </span>
        <div>
            <br>
            <p class="title has-text-grey is-size-4">project associated tasks: </p>
            @foreach($project->task as $task)
            <div class="content">   
            <span class="field {{$task->is_complete == 1 ? 'line-through has-text-dark' : ''}}">
            <form action="/task/{{$task->id}}" method="POST">
            @method('PATCH')
            @csrf
                    <input type="checkbox" {{$task->is_complete == 1 ? 'checked' : ''}} name="is_complete" class="is-checkradio" onchange="this.form.submit()">
                    {{$task->description}}
            </form>
                </span>
            </div>
            @endforeach
        </div>
        </div>
    @endforeach
    @endif
@endsection