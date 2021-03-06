<!DOCTYPE html>

<html>

<head>
<title>My List Of Tweets</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href=".\css\main.css.">
<script type="text/javascript" src="js/app.js" defer></script>
<meta name="viewport" content="width=device-width, initial-scale=1. maximum-scale=1, user-scalable=0"> 
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Exo&amp;display=swap'>
</head>

<body>
   
    <h1>
    <?= $greeting ?>
     </h1>
     
    <h2>
        <?= $info  ?>
    </h2>

    <article class="twtcont">

    <ul>

    <?php

    foreach($tweet as $twt) {
        echo "<li>$twt</li>";
    }
    ?>

    </ul>

    <?php
    $keys = array_keys($tweets); 
    for($i = 0; $i < count($tweets); $i++) { 
        echo $keys[$i] . "\n<br>"; 
        foreach($tweets[$keys[$i]] as $key => $value) { 
            echo $key . " : " . $value . "\n<br>"; 
        } 
        echo "\n"; 
    } 
    ?>

    <section class="twtrcard">

    <h3> <?= $tweets[0]['name'] ?> </h3>

    <p>
    <?= $tweets[0]['twt1'] ?>
    </p>

    <p>
    <?= $tweets[0]['twt2'] ?>
    </p>

    </section>

    <section class="twtrcard2">

        <h3> <?= $tweets[1]['name'] ?> </h3>

        <p>
        <?= $tweets[1]['twt1'] ?>
        </p>

        <p>
        <?= $tweets[1]['twt2'] ?>
        </p>

    </section>

    <section class="twtrcard3">

    <h3> <?= $tweets[2]['name'] ?> </h3>

    <p>
    <?= $tweets[2]['twt1'] ?>
    </p>

    <p>
    <?= $tweets[2]['twt2'] ?>
    </p>

    </section>

</article>

</body>

</html>