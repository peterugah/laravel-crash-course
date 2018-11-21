@extends('layout')

@section("content")
<form action="/" method="POST">
    @csrf
    <input type="text" class="input" placeholder="title" name="title">
    <div class="field">
       <button class="button is-inverted is-info">create</button>
    </div>
</form>

@include('project.error')
@endsection