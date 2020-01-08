<?php

function printArr($arr){
    foreach ($arr as $i){
        echo "$i<br>";
    }
}

function largest($arr){
    $largest = 0;
    foreach ($arr AS $i){
        if($i > $largest){
            $largest = $i;
        }
    }
    return $largest;
}