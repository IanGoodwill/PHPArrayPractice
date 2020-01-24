<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>PHP Arrays</title>

    <!-- Meta Data: -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>

    <!-- Styles: -->
    <link type="text/css" href="./css/main.css">

    <!-- Scripts: -->
    <script type="text/javascript" src="./js/app.js"></script>
  </head>
  <body>
    <h1>PHP Arrays List</h1>
    <?php include( './templates/nav.php' ); // Navigation file. ?>
    <?php

    # indexed arrays
   $mylist = array( "Aakriti", "Dave", "kulbir","Ian", "Jenny", "phil");
   $mylist2 = ["Bob", "Dylan", "Jerry", "Sienfeld"]
   ;

  // print_r( $mylist); // print in a readable way
  echo $mylist[0];  // show as Aakriti
  echo $mylist[1];  // show as Dave
  echo $mylist[2];  // show as Kulbir
  echo $mylist[3];  // show as Ian
  echo $mylist[4];  // show as Jenny
  echo $mylist[5];  // show as Phil

 ?>
<ul>
  <li>
    <?php echo $mylist2[0]; ?>
  </li>
  <li>
    <?php echo $mylist2[1]; ?>
  </li>
  <li>
    <?php echo $mylist2[2]; ?>
  </li>
  <li>
    <?php echo $mylist2[3]; ?>
  </li>
</ul>
<h2>Key-Value Pair Arrays</h2>
<?php
  $keyValueArray = array(
    "student" => "phil",
    "teacher" => "warren"

  );
  echo $keyValueArray['student'];
  echo '<p>';
  echo $keyValueArray['teacher'];
  echo '</p>';
  echo '<p>', $keyValueArray['student'], '</p>';

?>
<h2>Multi-dimensional Arrays</h2>
<?php
  $students = []; // start an empty array.
  $student = array(
    'name' => 'Jenny',
    'status' => 'In Class',
    'likes' => 'Pokemon',
    'label' => 'student'
  );
  array_push( $students,$student);
  $student = array(
    'name' => 'Dave',
    'status' => 'In Class',
    'likes' => 'cyborgs',
    'label' => 'student'
  );
  array_push($students, $student );
  // var_dump()  // print_r
  var_dump( $students);

  $schoolinfo = [
    'name' => 'Innotech College',
    'city' => 'Edmonton',
    'subjects' => ['Sharepoint', 'Web Development']
  ];
  $myschool = [
    'schoolinfo' => $schoolinfo,
    'students' => $students
  ];
  echo '<pre>';
  var_dump( $myschool);
  echo '</pre>';
?>
<h3><?php echo $myschool['students'][0]['name']; ?> </h3>
<p>
  <strong> Status:</strong>
  <?php $myschool['students'][0]['status']; ?>
  <?php echo $myschool['students'][0]['status']; 
  ?>
  <strong>Likes:<strong>
  <?php echo $myschool['students'][0]['likes'];
  ?>
</p>
  </body>
</html>