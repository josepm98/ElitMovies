<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\PeliculasController;

class Pagina1Controller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        //Inicializamos un objeto de Peliculas Controller, ya que se utilizarán en muchas funciones de diseño
        //$this->Peliculas = new PeliculasController();
    }
    public function index()
    {
        //Devolvemos la vista con todos los datos previos que le habremos de pasar a React, en este caso se pasan los datos del usuario actual y los datos de las peliculas y de su hoja de estilo
        $datos =  
        array(
            'Usuario'   => "User",                          //usuario
            'Peliculas' => $this->Peliculas->Populares(),   //Peliculas
            'Estilo'    => "Estilo",                        //Estilo
            'React'     => "BaseModificada",                //base de React
        );
        //Creo que el estilo será más bien una constante por diseño, por tanto sería una variable de la clase en el constructor, ya se cambiará en un futuro
        //Vista con datos
        return view('inicio')->with('datos', $datos);
    }
    
    public function Ejemplo()
    {
        return view('inicio');
    }
}