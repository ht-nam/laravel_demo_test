<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function get_all_student()
    {
        $data = Student::all();
        return view('students.student_manage', ['students' => $data]);
    }

    public function add_student_form()
    {
        return view('students.student_add');
    }

    public function add_student(Request $request)
    {
        Student::create([
            'fullname' => $request->name,
            'birthday' => $request->dob,
            'address' => $request->address
        ]);
        return redirect('/students');
    }

    public function get_student_by_id($id)
    {
        $data = DB::select('SELECT * FROM students WHERE id=:id', ['id' => $id]);
        return view('students.student_edit', ['data' => $data]);
    }

    public function edit(Request $request, $id)
    {
        $std = Student::find($id);
        $std->update([
            'fullname' => $request->name,
            'birthday' => $request->dob,
            'address' => $request->address
        ]);
        return redirect('/students');
    }

    public function delete($id)
    {
        $std = Student::find($id);
        $std->delete();
        return redirect('/students');
    }
}
