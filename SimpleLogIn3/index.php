     
 <?php 

include "index.view.php";

 echo $_POST["name"]; 
 ?>
        Welcome, Your name is: <?php echo $_POST["name"]; ?>
        <br>
        Your email address is: <?php echo $_POST["email"]; ?>
        <br>
        Your password is: <?php echo $_POST["password"]; ?>
        <br>
        
 <?php
$name = "ian";
$email = "random@email.com";
$password = "fakepassword";
$nameErr = "Not the name expected";
$emailErr = "Not the name expected";
$passwordErr = "Not the name expected";

function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;

if ($isSubmitted) {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $password = test_input($_POST["password"]);
}   else  {
        echo "unexpected error.";
}  


  if (($name === "ian") && ($email === "random@email.com") && ($password === "fakepassword") ) {
          echo "Welcome";
  }     else  {
          echo "Information was different than expected.";
  }
 


}

?>
     
</body>

</html>