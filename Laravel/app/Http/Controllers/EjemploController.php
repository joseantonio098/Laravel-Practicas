<?php

namespace App\Http\Controllers;

//Creamos nuestro controlador
class EjemploController extends Controller{

    //Gestionando rutas con controladores
    public function inicio($usuario){
        return 'Estás es la página de inicio ' . $usuario;
    }

}