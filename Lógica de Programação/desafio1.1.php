<?php

function CalcularFatorial($fact)
{
    if($fact == 0 || $fact == 1) return 1;

    return CalcularFatorial($fact-1) * $fact;
}

echo CalcularFatorial(5); // 120