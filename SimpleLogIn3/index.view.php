<?php
// System Values.
$name = "ian";
$email = "random@email.com";
$password = "fakepassword";
$nameErr = "Not the name expected";
$emailErr = "Not the name expected";
$passwordErr = "Not the name expected";

// Inputted Values.
$iname = $_POST['name'];
$iemail = $_POST['email'];
$ipass = $_POST['password'];

?><!DOCTYPE html>

<html>

<head>
<title>A Simple Log In </title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="./css/main.css">
<script type="text/javascript" src="js/app.js" defer></script>
<meta name="viewport" content="width=device-width, initial-scale=1. maximum-scale=1, user-scalable=0"> 
</head>

<body>

    <h1>This is my Simple Log In</h1>

  <?php $isSubmitted = !empty($_POST); ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="name"><span class="error">*
         <?php
             if (!$isSubmitted) {
                 echo $nameErr; 
        }
        ?>
           </span>
            
        
<br><br>
        E-mail: <input type="text" name="email"><span class="error">* <?php 
        $emailErr = "Not the email expected";
        $email = "random@email.com";
                if (!$isSubmitted) {
        echo $emailErr;
        }
        ?>
        </span>
<br><br>
        Password: <input type="text" name="password"><span class="error">* <?php
        $password = "fakepassword";
        $passwordErr = "Not the password expected";
                if (!$isSubmitted) {
        echo $passwordErr;
        }
        ?>
        </span>
<br><br>
        <input type="submit">
        </form>
        
<?php 


if(!function_exists("test_input"))  {

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}


  if (($iname === $name) && ($iemail === $email) && ($ipass === $password) ) {
          echo "Welcome, You have succesfully logged in";
  }     else  {
          echo "Information was different than expected.";
  }
 




?>
     
</body>

</html>