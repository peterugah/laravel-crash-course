@extends('layout')
@section("content")
<form action="/task" method="POST">
    @csrf
    <input type="text" placeholder="description" name="description" class="input">
    <br><br>
    <div class="field">
    <input type="text" value="{{$project}}" name="project_id" hidden>
        <button class="button is-link" type="submit">create</button>
    </div>

</form>

@include("project.error")
@endsection