<?php 
/*
This can be many lines long
*/
#let's keep trak of some page views
// Title text.

$myvar= 'Hello, World!'; 
$filename = 'viewcount.txt';
$countfile = fopen( $filename, 'r' );
$oldcount = (integer) fread( $countfile, filesize( $filename ) );
$countfile = fopen( $filename, 'w' );
$newcount = $oldcount + 1;
fwrite( $countfile, $newcount);
fclose( $countfile );

?> <DOCTYPE html>

<html>

    <head>
        <title><?php echo $myvar; ?> </title>
    </head>

    <body>

        <h1>My First PHP Website</h1>

        <p>

            <?php echo $myvar;  ?>

            <?php echo 5 * 3; ?>
        </p>

    <footer>

    <h2>Pageview Count:</h2>

    <strong>

        <?php echo $newcount; ?>

    </strong>

</footer>

    </body>

</html>