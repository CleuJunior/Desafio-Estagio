<?php

function CalcularDiferencaData(string $data1, string $data2): int
{
    $data1 = str_split($data1, 2);
    $data2 = str_split($data2, 2);

    $data_formatada1 = date_create($data1[0] . '-' . $data1[1] . '-' . $data1[2] . $data1[3]);
    $data_formatada2 = date_create($data2[0] . '-' . $data2[1] . '-' . $data2[2] . $data2[3]);

    $diff = date_diff($data_formatada1,$data_formatada2);

    return $diff->d;
}


echo CalcularDiferencaData("10122020", "25122020"); // 15



