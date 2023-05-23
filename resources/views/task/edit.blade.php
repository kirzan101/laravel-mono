@extends('layouts.app')

@section('content')
    <form action="/tasks/update/{{ $task->id }}" method="POST">
        @method('PUT')
        @csrf
        <label for="name">Name</label>
        <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name"
            value="{{ old('name') ? old('name') : $task->name }}">
        @if ($errors->has('name'))
            <div class="invalid-feedback">
                {{ $errors->first('name') }}
            </div>
        @endif

        <label for="assigned_date">Assigned Date</label>
        <input class="form-control {{ $errors->has('assigned_date') ? 'is-invalid' : '' }}" type="date"
            name="assigned_date" value="{{ old('assigned_date') ? old('assigned_date') : $task->assigned_date }}">
        @if ($errors->has('assigned_date'))
            <div class="invalid-feedback">
                {{ $errors->first('assigned_date') }}
            </div>
        @endif

        <button class="btn btn-primary mt-2" type="submit">Submit</button>
    </form>

    <br>

    <a href="/tasks" class="btn btn-primary">Return</a>
@endsection
