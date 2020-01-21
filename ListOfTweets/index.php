
<?php 
    $a="This ";
    $b="is ";
    $c="my ";
    $d="list ";
    $e="of ";
    $f="tweets";
    $greeting="Welcome, {$a}{$b}{$c}{$d}{$e}{$f}";
    $h="A ";
    $i="simple ";
    $j="list ";
    $k="of ";
    $l="Tweets ";
    $m="using ";
    $n="arrays";
    $info="{$h}{$i}{$j}{$k}{$l}{$m}{$n}";
   
        
$tweet = array("This is a humorous quote,", "Never trust a computer you can’t throw out a window", "— Steve Wozniak", "Twitter Author", "Jan.21 2019"); 

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

    require 'index.view.php'; 

?>

