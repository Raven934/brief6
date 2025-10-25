<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('employees');
    }

    public function list()
    {
        $employees = Employee::all();
        return view('list', compact('employees'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $rules = [
            'nom' => 'required|max:255',
            'prenom' => 'required|max:255', 
            'email' => 'required|email|unique:employees',
            'telephone' => 'nullable|max:20',
            'departement' => 'required|max:255',
            'poste' => 'nullable|max:255',
            'date_embauche' => 'nullable|date',
            'salaire' => 'nullable|numeric|min:0'
        ];
        
        $data = $request->validate($rules);
        Employee::create($data);
        
        return redirect()->route('employees.list')->with('success', 'Employé créé avec succès!');
    }

    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, Employee $employee)
    {
        $rules = [
            'nom' => 'required|max:255',
            'prenom' => 'required|max:255',
            'email' => 'required|email|unique:employees,email,' . $employee->id,
            'telephone' => 'nullable|max:20', 
            'departement' => 'required|max:255',
            'poste' => 'nullable|max:255',
            'date_embauche' => 'nullable|date',
            'salaire' => 'nullable|numeric|min:0'
        ];
        
        $data = $request->validate($rules);
        $employee->update($data);
        
        return redirect()->route('employees.list')->with('success', 'Employé modifié avec succès!');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.list')->with('success', 'Employé supprimé avec succès!');
    }
}
