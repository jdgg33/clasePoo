<?php


//Palabra reservada class y nombre de la clase iniciando en mayúscula
//Clase

class Persona{

//Atributos de la clase

public $nombre;
public $apellido;

//Constructor de la clase

public function __construct(){

    $this->nombre="hola tu"; 

}


//Métodos de la clase

public function saludar ($nombre){
    echo("Hola como vas del virus ".$nombre);
}

}


?>