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

    <h1>This is my List of Tweets</h1>

    <h2>A simple list of Tweets using arrays</h2>

    <article class="twtcont">

<?php


$tweets = array( 
    array( 
        "name" => "Dorothy Parker",
        "twt1" => "The cure for boredom is curiosity",
        "twt2" => "There is no cure for curiosity",
    ),
    array( 
        "name" => "Brian Ree",
        "twt1" => "Everything is designed",
        "twt2" => "Few things are designed well",
    ),
    array( 
        "name" => "Emo Philips",
        "twt1" => "A computer once beat me at chess",
        "twt2" => "But it was no match for me at kick boxing",
    )
    );


    $keys = array_keys($tweets); 
    for($i = 0; $i < count($tweets); $i++) { 
        echo $keys[$i] . "\n<br>"; 
        foreach($tweets[$keys[$i]] as $key => $value) { 
            echo $key . " : " . $value . "\n<br>" 
        } 
        echo "\n"; 
    } 
      



?>

</article>

</body>

</html>