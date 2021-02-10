<?php

function ContarNumerosPrimos(int $primos): int
{
    if($primos == 1) return 0;
    if($primos == 2) return 1;
    $count = 1;
    for($x=3; $x<=$primos; $x++) {
        if(max_div($x) == 2)  $count++;
    }
    return $count;

}

function max_div(int $num): int
{
    $conta_divisores = 0;
    for ($i=1; $i <=$num ; $i++) { 
        if($num % $i == 0) $conta_divisores++;
        

    }
    return $conta_divisores;
}




echo ContarNumerosPrimos(10) . PHP_EOL; // 4