@extends('layouts.app')

@section('content')
    <form action="/tasks" method="POST" class="form-row">
        @csrf
        <label for="name">Name</label>
        <input class="form-control {{ ($errors->has('name')) ? 'is-invalid' : '' }}" type="text" name="name">
        @if ($errors->has('name'))
            <div class="invalid-feedback">
                {{ $errors->first('name') }}
            </div>
        @endif

        <label for="assigned_date">Assigned Date</label>
        <input class="form-control {{ ($errors->has('assigned_date')) ? 'is-invalid' : '' }}" type="date" name="assigned_date">
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
