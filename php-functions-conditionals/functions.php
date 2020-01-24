<!DOCTYPE html>

<html>

<head>
<title>php-functions-conditionals</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="./css/main.css">
<script type="text/javascript" src="js/app.js" defer></script>
<meta name="viewport" content="width=device-width, initial-scale=1. maximum-scale=1, user-scalable=0"> 
</head>

<body>

<h1>My number is: <?php testFunc(); ?> </h1>

<section>
<?php
function _empty ($value) {
    if (( $value == '') || ( $value === 0) || ($value === 0.0)) {
        return TRUE;
    } else {
        return FALSE;
    }
}

if(_empty( '' )) {
    echo 'I am empty<br>';
}  else  {
    echo 'I am not empty<br>';
}
if(_empty( 'I\im a different value?' )) {
    echo 'I am empty<br>';
}  else  {
    echo 'I am not empty<br>';
}
if(_empty( 236)) {
    echo 'I am empty<br>';
}  else  {
    echo 'I am not empty<br>';
}

function myPHPAdder( $num1, $num2) {
    return $num1 + $num2;
}
function myPHPConcatenator( $string1, $string2, $echo=FALSE) {
    $fullstring = $string1 . $string2;
    if  ( $echo == TRUE)  {
        echo $fullstring;
    }

    return $string1 . $string2;
}
echo myPHPAdder(3,5) . '<br>';

echo myPHPConcatenator(10, 5) . '<br>';

echo myPHPConcatenator('Hello ','world', TRUE) . '<br>';

function testFunc() {
  echo  $_GET['test'] + 5;  
}
testFunc();
testFunc();
?>
</section>

</body>

</html>