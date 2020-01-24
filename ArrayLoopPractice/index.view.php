<!DOCTYPE html>
<html lang="en-US">
  <head>

    <title>PHP Arrays</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <script type="text/javascript" src="./js/app.js"></script>

  </head>

  <body>

    <section class="foreach">

    <ul>
        
    <?php foreach( $animals as $name => $size) : ?>

            <li>
<strong><?= $name; ?></strong><?= $size; ?>
            </li>

    <?php endforeach; ?>

        </ul>

    </section>

    <section class="for">

    <ul>


    <li>
    <?php
    $keys = array_keys($animals);
    for( $i = 0; $i < count($animals); $i++ ) {
    echo $keys[$i] . "\n";
    foreach($animals[$keys[$i]] as $key => $value)  {
        echo $key . " : " . $value . "\n";
    }
    echo "\n";
}
?>

</li>

</ul>

</section>

<section class="while">

<ul>

<li>

<?php 
$counter = 0;
$max = count($animals);
while( $counter < $max ) {
    echo $animals[$counter];
    $counter++;
}
?>
</li>

</ul>

</section>

  </body>

  <footer>
  
  </footer>

  <html>
  