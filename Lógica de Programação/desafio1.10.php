<?php

function ObterElementosFaltantes(array $vetor1, array $vetor2): array
{
    $compara_array1 = array_diff($vetor1, $vetor2);
    $compara_array2 = array_diff($vetor2, $vetor1);

    return array_unique(array_merge($compara_array1, $compara_array2));
}


print_r(ObterElementosFaltantes([1,2,3,4,5], [1,2,5])); // { 3, 4 }
print_r(ObterElementosFaltantes([1,4,5], [1,2,3,4,5])); // { 2, 3 }
print_r(ObterElementosFaltantes([1,2,3,4], [2,3,4,5])); // { 1, 5 }
print_r(ObterElementosFaltantes([1,3,4,5], [1,3,4,5])); // { }