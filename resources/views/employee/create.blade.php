@extends('layouts.app')

@section('content')
    <h3>Add Employee | <a href="/employee" class="btn btn-primary">Return</a></h3> 

    <br>

    <form method="POST" action="/employee">
        @csrf
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control {{ $errors->has('first_name') ? 'is-invalid' : '' }}" id="first_name"
                name="first_name">
            @if ($errors->has('first_name'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('first_name') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="first_name">Middle Name</label>
            <input type="text" class="form-control {{ $errors->has('middle_name') ? 'is-invalid' : '' }}"
                id="middle_name" name="middle_name">
            @if ($errors->has('middle_name'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('middle_name') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control {{ $errors->has('last_name') ? 'is-invalid' : '' }}" id="last_name"
                name="last_name">
            @if ($errors->has('last_name'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('last_name') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" id="address"
                name="address">
            @if ($errors->has('address'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('address') }}</strong>
                </span>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
