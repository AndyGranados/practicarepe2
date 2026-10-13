<?php

namespace Cafeteria\Modelos;

use Override;

class Postre extends Producto{
    
    public function precioFinal(int $cantidad): float
    {
        $total = $this->precioBase * $cantidad;
        if($cantidad >=3){
            $total += 0.90;
        }
        return $total;
    }
}
?>