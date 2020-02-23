<?php

$temp = [10, 2, 3, 5, 12, -1, -5, -0.5, -0.1, 0.1, 0.1];


function Zero($table)
{

    $mintable = [];
    $min = 100;

    for ($i = 0; $i < count($table); $i++) {

        if ($min > abs($table[$i])) {
            $min = abs($table[$i]);
            $mintable = array();
            array_push($mintable, $table[$i]);
        } elseif ($min === abs($table[$i])) {
            array_push($mintable, $table[$i]);
        }
    }


    return $mintable;

}


print_r(Zero($temp));