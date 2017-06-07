<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Alumno;
use App\User;

class AlumnoController extends Controller
{
    public function index(){


      $students=Student::all();

      return $students;


    }

    public function show($id){
      $student=Student::where("id_t_usuarios", "=", $id)->first();
      return $student;
    }

    public function create(Request $request){

      $student = new Student();


    }
}
