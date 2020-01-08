<?php

use function Sodium\add;

function printArr($arr){
    foreach ($arr AS $i){
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

function distribution($arr){
    $tempArr = removeDups($arr);
    $newAssoc = array();
    foreach ($tempArr AS $i){
        $newAssoc[$i] = 0;
    }
    foreach ($arr AS $j){
        if(array_key_exists($j, $newAssoc)){
            $newAssoc[$j]++;
        }
    }
    ksort($newAssoc);
    return $newAssoc;
}