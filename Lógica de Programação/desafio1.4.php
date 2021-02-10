<?php

function CalcularVogais($string)
{
    $string = strtolower($string);
    return substr_count($string, 'a') + substr_count($string, 'e') + 
    substr_count($string, 'i') + substr_count($string, 'o') + substr_count($string, 'u');

    
}



echo CalcularVogais('Luby Software'); // 4
