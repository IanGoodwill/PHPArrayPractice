<DOCTYPE html>

<html>

<head>
    <title>My First POST FORM Submission</title>
</head>

<body>

    <h1>Registered as:</h1>
    <dl>
        <dt>User:</dt>
        <dd><?php 
        $myuser = $_POST['user'];  // let's output our username
        echo $myuser;
        ?> 
        </dd>
        <dt>Email:</dt>
        <dd>
        <?php
        $myemail = $_POST['email'];
        echo $myemail;
        ?>
        </dd>
        <dt>Password:</dt>
        <dd>
        <?php
        $mypassword = $_POST['pass'];
        echo $mypassword;
        ?>
        </dd>
        <dt>Password:</dt>
        <dd>
        <?php
        $mypasscheck = $_POST['passcheck'];
        echo $mypasscheck;
        ?>
        </dd>
    </dl>
    
</body>

</html>

