<?php

function CalcularValorComDescontoFormatado(string $valor, string $desconto): string
{
    $valor = trim(str_replace('R$', '', $valor));
    $valor = str_replace('.', '', $valor);
    $valor = floatval($valor);

    $desconto = trim(str_replace('%', '', $desconto));
    $desconto = intval($desconto);

    $total = $valor - ($valor * $desconto / 100);


    return "R$ " . number_format($total, 2, ',', '.');
}



echo CalcularValorComDescontoFormatado("R$ 6.800,00", "30%"); // "R$ 4.760,00"

