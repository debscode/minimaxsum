<?php

// Complete the miniMaxSum function below.
function miniMaxSum($arr) {
    $arr2=$arr;
    $max=max($arr);
    $min=min($arr);
    $indMax=array_search($max,$arr);
    $indMin=array_search($min,$arr);
    unset($arr[$indMin]); //quito el minimo elemento del array para generar arreglo con la maxima suma
    unset($arr2[$indMax]);//quito el maximo elemento del array para generar arreglo con la minima suma
    $sumMax=0;
    $sumMin=0;
    foreach ($arr as $key => $value) {
        $sumMax+=$value;
    }
    foreach ($arr2 as $key => $value) {
        $sumMin+=$value;
    }
    echo $sumMin.' '.$sumMax;
}

$stdin = fopen("datos.txt", "r");

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);

fclose($stdin);