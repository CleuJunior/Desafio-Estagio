<?php

function BuscarPessoa(array $vetor, string $nome): array
{
    $vetor_nomes = array();
    $index_nomes = 0;

    foreach ($vetor as $valor) {
        if(str_contains($valor, $nome)){
            $vetor_nomes[$index_nomes] = $valor;
            $index_nomes++;
        }
    }

    return $vetor_nomes;
}

$nome = ["John Doe", "Jane Doe", "Alice Jones", "Bobby Louis", "Lisa Romero"];

print_r(BuscarPessoa($nome, "Doe")); //{ "John Doe", "Jane Doe" }
print_r(BuscarPessoa($nome, "Alice")); //{ "Alice Jones" }
print_r(BuscarPessoa($nome, "Louis")); //{ "Bobby Louis" }
 