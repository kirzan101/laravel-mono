@extends('layouts.app')

@section('content')
    @if (session()->has('message'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('message') }}
        </div>
    @endif

    <a href="/tasks/create" class="btn btn-primary mb-2">Add</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">assigne date</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <th>{{ $task->id }}</th>
                    <td>{{ $task->name }}</td>
                    <td>{{ $task->assigned_date }}</td>
                    <td>
                        <a href="/tasks/{{ $task->id }}" class="btn btn-primary">Show</a>
                        <a href="/tasks/edit/{{ $task->id }}" class="btn btn-success">Edit</a>
                        <form action="/tasks/delete/{{ $task->id }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
