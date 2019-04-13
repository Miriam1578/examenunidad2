<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    //
    protected $table='Categorias_preguntas';
    protected $primarykey='id_catpreg';
    protected $fillable=['nom_cat'];

}
