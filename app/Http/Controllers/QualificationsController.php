<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Qualification;

use App\Http\Requests;

class QualificationsController extends Controller
{
  public function create(Request $request){

    $qualification = new Qualification();

    $qualification->id_t_materias=$request->id_t_materias;
    $qualification->id_t_usuarios=$request->id_t_usuarios;
    $qualification->calificacion=$request->calificacion;
    $qualification->fecha_registro=$request->fecha_registro;

    $qualification->save();

      return response()->json(['success' => "ok", 'msg' => 'calificacion registrada' ]);


  }

  public function update(Request $request){

    $qualification = Qualification::where('id_t_calificaciones','=',$request->id_t_calificaciones);


    if($qualification->update($input)){

      return response()->json(['success' => "ok", 'msg' => 'calificacion actualizada' ]);

    }else{
      abort(404);
    }
  }

  public function destroy($id){

    $qualification = Qualification::where('id_t_calificaciones','=',$id);
    //return $qualification;
    if($qualification->forceDelete()){

      return response()->json(['success' => "ok", 'msg' => 'calificacion eliminada' ]);

    }else{
      abort(404);
    }

  }
}
