<?php

function ObterElementosPares(array $vetor): array
{
    $vetor_pares = array();
    $index_par = 0;
    for ($index=0; $index < count($vetor); $index++) { 
       if($vetor[$index] % 2 == 0 ){
        $vetor_pares[$index_par] = $vetor[$index];
        $index_par++; 
       } 
    }

    return $vetor_pares;
}


print_r(ObterElementosPares([1,2,3,4,5])); // { 2, 4 }

