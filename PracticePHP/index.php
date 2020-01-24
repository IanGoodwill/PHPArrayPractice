<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>PHP Arrays</title>

    <!-- Meta Data: -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>

    <!-- Styles: -->
    <link rel="stylesheet" type="text/css" href="./css/main.css">

    <!-- Scripts: -->
    <script type="text/javascript" src="./js/app.js"></script>
  </head>
  <body>
    <h1>PHP Arrays Home</h1>
    <?php include( './templates/nav.php' ); // Navigation file. ?>
    <?php include( './loops.php' ); // loops file. ?>
    <?php
      // Your PHP here!
      echo( "Hello, world!" );
    ?>

    

<ul class="twtrcard">

<?php foreach($tweets as $tweet) : ?>

  <li>

  <h2>
  <?php echo $tweet['name']; ?>
  </h2>
  
  <strong>
  <?php echo $tweet['content']; ?>
</strong>
  
  <p>
  <?php echo $tweet['date_posted']; ?>

  <?php echo $tweet['likes']; ?>
  
  <?php echo $tweet['shares']; ?>

  <?php echo $tweet['retweets']; ?>

  <?php echo $tweet['image']; ?>

  <?php echo $tweet['published']; ?>

  </p>
 
  </li>

    <?php endforeach; ?>

  </ul>

 

<section>
<?php


 foreach($tweets as $tweet) : ?>
<?php if ($tweet['content']) : ?>
     <li>  
  <?php echo $tweet['name'];  echo '<br>';?>

  <?php if ($tweet['retweets'] >= 2) {
    echo "You are very popular"; 
    echo '<br>';
  } else  {
    echo "You are not very popular";
    echo '<br>';
  }
  
  if ($tweet['image'] == NULL) {
    echo "No Image uploaded"; 
    echo '<br>';
    
  } else  {
    echo "Check out my image";
    echo '<br>';
  }
  
  if ($tweet['date_posted'] == 'January 21, 2020') {
    echo "Welcome to the year 2020"; 
    echo '<br>';
  }
  
    if ($tweet['date_posted'] == 'February 16, 2020') {
      echo "Welcome to the year 2020"; 
      echo '<br>';
      
  } else  {
    echo "You have not posted yet this year.";
    echo '<br>';
  }
  if ($tweet['shares'] >= 1) {
    echo "Your friends have shared your post"; 
    echo '<br>';
    
} else  {
  echo "Follow more people for additional shares";
  echo '<br>';
}
if ($tweet['likes'] >= 1) {
  echo "Your friends have liked your post"; 
  echo '<br>';
  
} else  {
echo "Follow more people for additional likes";
echo '<br>';

}
if ($tweet['published'] == TRUE) {
  echo "You have posted"; 
  echo '<br>';
  
} else  {
echo "You have not posted";
echo '<br>';

}
  ?>
</li>

<?php endif; ?>

<?php endforeach; ?>
</ul>
