<?php

//Model estudiante
class Estudiante {
    //defino atributos
    private $idEstudiante;
    private $cedula;
    private $nombre;
    private $apellido;
    private $fechaNacimiento;
    private $telefono;
    private $correo;
    private $estado;
    
    //constructor 
    function __construct() {
        //inicializar los  atributos
        $this->idEstudiante=0;
        $this->cedula="";
        $this->nombre="";
        $this->apellido="";
        $this->fechaNacimiento="";
        $this->telefono="";
        $this->correo="";
        $this->estado=1;
         
    }
    //Metodos gett and setter 
    function getIdEstudiante() {
        return $this->idEstudiante;
    }

    function getCedula() {
        return $this->cedula;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getFechaNacimiento() {
        return $this->fechaNacimiento;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getEstado() {
        return $this->estado;
    }

    function setIdEstudiante($idEstudiante) {
        $this->idEstudiante = $idEstudiante;
    }

    function setCedula($cedula) {
        $this->cedula = $cedula;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setFechaNacimiento($fechaNacimiento) {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }


            
    
}
