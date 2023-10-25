<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;
use App\Http\Controllers\StudentController;


class StudentController extends Controller
{

    public function index(){
    //    return Students::all(); 
    return view('students.show', [
        'students' => Student::all()
    ]);
    }
    
}
