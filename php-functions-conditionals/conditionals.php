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
<?php
$var =3;

if ($var === 3) {
    echo 'This value is 3';
} elseif ( $var ==2 ) {
    echo 'This value is 2';
} else {
    echo 'this value is not 2';
}

echo '<br><br><br>';

$var2= 4;

if ( $var2 == 3)    {
    echo 'Our variable is 3';
}  else  {
    echo 'Var 2 comparison failed.';
}


?>
</body>

</html>