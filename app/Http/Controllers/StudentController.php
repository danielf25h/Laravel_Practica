<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function createStudent(){
        return view('Students.students');
    }

    public function editStudent(){
        return view('Students.editarEstudiante');
    }

    public function deleteStudent(){
        return view('Students.eliminarEstudiante');
    }
    public function crearStudent(){
        return view('Students.crearEstudiante');
    }

}
