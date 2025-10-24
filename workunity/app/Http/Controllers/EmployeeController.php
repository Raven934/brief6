<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('employees');
    }

    public function list()
    {
        return view('employees.list');
    }

    public function create()
    {
        return view('employees.create');
    }
}
