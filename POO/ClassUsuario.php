<?php

class Usuario{
    private $strNombre;
    private $strEmail;
    private $strTipo;
    private $strCalave;
    protected $strFechaRegistro;
    static $strEstado="Activo";

    function __construct(string $nombre, string $email, string $tipo)
    {
        $this->strNombre=$nombre;
        $this->strEmail=$email;
        $this->strTipo=$tipo;
        $this->strCalave=rand();
        $this->strFechaRegistro=date('Y-m-d H:m:s');
        
    }

    public function getNombre():string //modificadores de acceso
    {
        return $this->strNombre;
    }


    public function getEmail():string //modificadores de acceso
    {
        return $this->strEmail;
    }

    public function getPerfil()
    {
        echo "<h3> Datos Usuarios </h3> ";
        echo "nombre: ". $this->strNombre. "<br>";
        echo "correo: ". $this->strEmail. "<br>";
        echo "clave: ". $this->strCalave. "<br>";
        echo "fecha registro: ". $this->strFechaRegistro. "<br>";
        echo "estado: ". self::$strEstado. "<br>";


    }

    public function setCambiarClave(string $pass)
    {
        $this ->strCalave=$pass;
    }


   

}