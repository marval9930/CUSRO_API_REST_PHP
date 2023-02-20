<?php
require_once("Operacion.php");
require_once("OperacionesBasicas.php");

class Calcular implements Operacion, OprecionBasica
{

    public function raizCuadrada(float $numero): float
    {
        $total = sqrt($numero);
        return $total;
    }

    public function potencia(int $numero, int $potencia): int
    {
        $total = pow($numero, $potencia);
        return $total;
    }

    public function op_basica(float $num1, float $num2, string $operacion)
    {
        if($operacion == '+'){
            $resultado= $num1+$num2;
        }elseif($operacion == '-'){

            $resultado= $num1-$num2;

        }elseif($operacion == '*'){

            $resultado= $num1*$num2;

        }elseif($operacion == '/'){

            $resultado= $num1/$num2;
        }else{
            $resultado = "operacion no valida";
        }
        return $resultado;
    }
}
