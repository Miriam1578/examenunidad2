<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    protected $table = 'Empleados';
    protected $primarykey = 'id_empleado';
    protected $fillable = ['Nombre', 'Apellido','Direccion','Codigo_Postal','Telefono','Empresa'];
}
