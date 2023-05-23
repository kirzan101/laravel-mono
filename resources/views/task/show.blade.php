@extends('layouts.app')

@section('content')
    <div>
        <p><a href="/tasks" class="btn btn-primary">Return</a></p>
        <p>Id: {{ $task->id }}</p>
        <p>Name: {{ $task->name }}</p>
        <p>Assigned Date: {{ $task->assigned_date }}</p>
    </div>
@endsection