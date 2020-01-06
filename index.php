<?php
/**
 * URL: http://rcox.greenriverdev.com/IT328/pp1/index.php
 * Author: Robert Cox
 * Version: 1.0
 * Date: 1/6/20
 * Pair Program 1
 **/
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Program 1</title>
</head>
<body>
<h1>Pair Program 1</h1>
<?php
$numbers = array(7, 9, 8, 9, 8, 8, 6);

function printArr($arr){
    foreach ($arr as $i){
        echo "$i<br>";
    }
}

printArr($numbers);
?>
</body>
</html>
