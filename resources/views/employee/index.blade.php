@extends('layouts.app')

@section('content')
    @if (session('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
    @endif

    <br>
    <a href="/employee/create" class="btn btn-primary">Add Employee</a>
    <h1 class="text-center">Employee List</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Middle</th>
                <th scope="col">Last</th>
                <th scope="col">Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <th>{{ $employee->id }}</th>
                    <td>{{ $employee->first_name }}</td>
                    <td>{{ $employee->middle_name }}</td>
                    <td>{{ $employee->last_name }}</td>
                    <td>{{ $employee->address }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
