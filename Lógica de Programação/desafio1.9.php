<?php

function TransformarEmMatriz(string $valores): array
{
    $array_de_arrays = array();
    $valores = str_split(implode('', explode(',', $valores)), 2);

    for ($i=0; $i < count($valores); $i++) { 
        $array_de_arrays[$i] = str_split($valores[$i], 1);
    }

    return $array_de_arrays;
}


print_r(TransformarEmMatriz("1,2,3,4,5,6")); //Array ( [0] => Array ( [0] => 1 [1] => 2 ) [1] => Array ( [0] => 3 [1] => 4 ) [2] => Array ( [0] => 5 [1] => 6 ) )
