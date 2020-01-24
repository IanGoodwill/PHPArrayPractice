<DOCTYPE html>

<html>

<head>
    <title>My Get Submission</title>
</head>

<body>

    <h1>What did I submit?!</h1>

   <p>
        <?php
        // let's get our GET submission...
        $search = $_GET['search'];
        # let's show it to the user
        echo $search;
        ?>
   </p>

</body>

</html>

