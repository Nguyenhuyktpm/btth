<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function get_all_student(){
        $students = Student::all();
        return view('student_manage',['students' => $students]);
    }
    
    public function get_student_by_id($id){
        $student = Student::find($id);
        return view('student_edit', compact('student'));
        
    }
    public function edit(Request $request , $id){

        $validatedData = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'birthday' => 'required',
        ]);

        $student = Student::find($id);
       
        $student->fullname = $request->input('name');
        $student->address  = $request->input('address');
        $student->birthday = $request->input('birthday');
     
            $student->update();
            return redirect('manage');
    }
    public function add_student(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'birthday' => 'required',
        ]);
        $student = new Student();
        $student->fullname = $request->input('name');
        $student->address  = $request->input('address');
        $student->birthday = $request->input('birthday');
        $student->save();
        return redirect('manage');
    }
}
