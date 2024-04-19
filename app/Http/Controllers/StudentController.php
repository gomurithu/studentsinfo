<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
   

    public function create()
    {
        return view('add.student');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            
        ]);

        Student::create($request->all());

        return redirect()->route('store.student')
                         ->with('success', 'Student added successfully.');
    }

   
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('edit.student', compact('student'));
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required|integer',
            'grade' => 'required'
        ]);

        $student = Student::findOrFail($id);
        $student->update($request->all());

        return redirect()->route('update.student')
                         ->with('success', 'Student updated successfully.');
    }

    
    public function delete($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('delete.student')
                         ->with('success', 'Student deleted successfully.');
    }
}

