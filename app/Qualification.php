<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{


  protected $table="t_calificaciones";
  public $timestamps = false;

  protected $fillable = ['id_t_materias'];


    //
}
