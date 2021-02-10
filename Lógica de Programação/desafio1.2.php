<?php

function CalcularPremio(int $premio, string $tipo, $mult)
{
    if(empty($mult)){
        switch($tipo){
            case "basic":
            return number_format($premio * 1, 2);
            case "vip":
            return number_format($premio * 1.2, 2);
            case "premium":
            return number_format($premio * 1.5, 2);
            case "deluxe":
            return number_format($premio * 1.8, 2);
            case "special":
            return number_format($premio * 2, 2);
        }
    }else{
        return number_format($premio * $mult, 2);
    } 

}

echo CalcularPremio(100, "vip", null) . PHP_EOL; // 120.00
echo CalcularPremio(100, "basic", 3) .  PHP_EOL; // 300.00