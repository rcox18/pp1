<?php

use function Sodium\add;

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

function removeDups($arr){
    $newArr = array();
    foreach ($arr AS $i){
        if(!in_array($i, $newArr)){
            $newArr[] = $i;
        }
    }
    return $newArr;
}