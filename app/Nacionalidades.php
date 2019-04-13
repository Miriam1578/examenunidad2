<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nacionalidades extends Model
{
    protected $table='Nacionalidades';
    protected $primarykey='id_nacionalidad';
    protected $fillable=['nom_na'];
}
