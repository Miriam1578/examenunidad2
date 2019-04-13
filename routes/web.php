<?php

Route::get("/",function(){
    return view ("layout.layout");
});

Route::resource('categorias','CategoriasController');
Route::resource('nacionalidades','NacionalidadesController');
Route::resource('empleados','EmpleadosController');