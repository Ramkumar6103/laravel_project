<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    public function viewForm(){
        $students = Student::all();
        // return view('student-reg',['student' => $student]);
        return view('student-reg',compact('students'));
    }

    public function addStudent(Request $request){
        //dd($request->all());
        Student::create($request->all());
        return redirect()->route('home')->with('message','Student created successfully!');
    }
}
