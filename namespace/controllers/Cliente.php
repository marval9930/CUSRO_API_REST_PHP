<?php 
namespace Controllers;
//require_once("../models/Persona.php");
require_once("../autoload.php");
use models\Persona;


class Cliente extends Persona{
    protected $fltCredito;

    function __construct(int $dpi, string $nombre, int $edad)
    {
        parent::__construct($dpi,$nombre,$edad);
    }

    public function setCredito(string $puesto){
        $this->fltCredito=$puesto;
    }

    public function getCredito():float
    {
       return $this->fltCredito;
    }

     
    public function getDatosPersonales(){
        $datos="
        <h2>DATOS PERSONALES</h2>
        DPIO:{$this->intDpi}<br>
        NOMBRE:{$this->strNombre}<br>
        EDAD:{$this->intEdad}<br>
        ";

        return $datos;
    }
    
    public function setMensaje(string $mensaje)
    {
        $this->mensaje = $mensaje;
    }

    public function getMensaje():string
    {
        return $this->mensaje. ' ' . $this->strNombre;
    }

}