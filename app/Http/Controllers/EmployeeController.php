<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeFormRequest;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $employees = Employee::all();

        return view('employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployeeFormRequest $request)
    {
        // $request->validate([
        //     'first_name' => 'required|min:2',
        //     'middle_name' => 'nullable|min:2',
        //     'last_name' => 'required|min:2',
        //     'address' => 'required|min:2'
        // ]);
        
        Employee::create([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'address' => $request->address
        ]);

        return redirect('/employee')->with('message', 'Successfully created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employee = Employee::find($id);

        return view('employee.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $employee = Employee::find($id);

        view('employee.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EmployeeFormRequest $request, string $id)
    {
        $employee = Employee::find($id);
        $employee = tap($employee)->update([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'address' => $request->address
        ]);

        return redirect('/employee')->with('message', 'Successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $employee = Employee::find($id);
        $employee->delete();

        return redirect('/employee')->with('message', 'Successfully Deleted!');
    }
}
