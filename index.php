<?php


class Persona{

    public $nombre;

    public function __construct($nombre){

        $this->setNombre($nombre);

    }

    public function setNombre($nombre){

        $this->nombre = $nombre;

    }


}