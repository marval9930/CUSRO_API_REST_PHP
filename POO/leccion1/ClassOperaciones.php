<?php
class operaciones
{

    public $cantidadUno = 0;
    public $cantidadDos = 0;
    public $resultado = 0;

    function __construct($int1, $int2)
    {
        $this->cantidadUno = $int1;
        $this->cantidadDos = $int2;
    }

    public function getSuma()
    {
        $this->resultado = $this->cantidadUno + $this->cantidadDos;
        return $this->resultado;
    }

    public function getResta()
    {
        $this->resultado = $this->cantidadUno - $this->cantidadDos;
        return $this->resultado;
    }

    public function getMultiplicasion()
    {
        $this->resultado = $this->cantidadUno * $this->cantidadDos;
        return $this->resultado;
    }

    public function getDivicion()
    {
        $this->resultado = $this->cantidadUno / $this->cantidadDos;
        return $this->resultado;
    }
}
