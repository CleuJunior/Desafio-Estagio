<?php

Class Maquina{
    private $produtos = array(
        "Lata A" => 3.40, 
        "Lata B" => 5.50, 
        "Lata C" => 6.00, 
        "Lata D" => 2.30
    );
    
    private $qt_estoque = array (
        "Lata A" => 30, 
        "Lata B" => 23, 
        "Lata C" => 15, 
        "Lata D" => 8

    );

    public function comprar()
    {
        return $this->$produtos;
    }

     
    public static function estoque()
    {
        return "Lata A: 30" . PHP_EOL .
               "Lata B: 23"  . PHP_EOL .
               "Lata C: 15"  . PHP_EOL .
               "Lata D: 8"   . PHP_EOL;
    }
}

echo Maquina::estoque();


$m = new Maquina();
print_r($m->comprar());