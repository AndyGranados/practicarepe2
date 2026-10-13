<?php
namespace Cafeteria\Enums;

enum Tamano: string{
    case Pequeno = "P";
    case Mediano ="M";
    case Grande = "G";

    public function recargo():float{
        return match($this){
            self::Pequeno=> 50.00,
            self::Mediano => 50.25,
            self::Grande => 50.50,
        };
    }
}

?>
