<?php
class Producto{

    public $strDescripcion;
    public $fltprecio;
    protected $intStockMinimo= 10;
    protected $strStatus = "Activo";

    public function __construct(string $descripcion, float $precio)
    {
        $this-> strDescripcion = $descripcion;
        $this-> fltprecio = $precio;  
    }

    public function getInfoProducto(){
        $arrProducto = array(
            'producto' => $this->strDescripcion,
            'precio' => $this->fltprecio,
            'stok_minimo' => $this->intStockMinimo,
            'estado' => $this->strStatus
    );
    return $arrProducto;
    }
}