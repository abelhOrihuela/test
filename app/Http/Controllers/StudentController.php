<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Student;
use DB;



class StudentController extends Controller
{
  public function index(){


    $students=Student::all();

    return $students;


  }

  public function show($id){


    $statement="SELECT  ta.id_t_usuarios, ta.nombre, ta.ap_paterno, tm.nombre, tc.calificacion, tc.fecha_registro FROM t_alumnos ta, t_calificaciones tc, t_materias tm
		WHERE ta.id_t_usuarios=tc.id_t_usuarios
        AND tm.id_t_materias=tc.id_t_materias
        AND ta.id_t_usuarios=".$id;


    $result=DB::select(DB::raw($statement));

    return $result;

  }

  public function create(Request $request){

    $student = new Student();


  }
}
