<?php   
    $tweets = array();

    array_push( $tweets, [
        'name' => 'Jenkins',
        'content' => 'My first Tweet! LOL',
        'date_posted' => 'January 21, 2020',
        'likes' => 3,
        'shares' => 6,
        'retweets' => 2,
        'image' => 'tweet1.jpg', 
        'published' => TRUE
    ]);

array_push( $tweets, [
    'name' => 'Gabriella',
    'content' => 'I really like dogs!',
    'date_posted' => 'February 16, 2020',
    'likes' => 9999,
    'shares' =>864,
    'retweets' => 987,
    'image' => NULL,
    'published' => TRUE
]);

array_push( $tweets, [
    'name' => 'Sammy',
    'content' => 'I\'ll finish this Tweet later...',
    'date_posted' => 'July 3, 2019',
    'likes' => 0,
    'shares' => 0,
    'retweets' => 0,
    'image' => NULL,
    'published' => FALSE
]);

?>

    <h1>Loops!</h1>
    <?php include './templates/nav.php'; ?>
    <h2>First Loop</h2>

    <ul>
<?php foreach($tweets as $tweet) : ?>
<?php if ($tweet['published']) : ?>
     <li>  
  <?php echo $tweet['name']; ?>
</li>
<?php endif; ?>
<?php endforeach; ?>
</ul>

 

