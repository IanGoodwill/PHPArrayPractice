<DOCTYPE html>

<html>

<head>
    <title>Submit to Self</title>
</head>

<body>
    <h1>Lets submit back to THIS page, instead of another</h1>
    <form action="#" method="get">
        Pick A, B, or C!
        <br>
        <input type="radio" name="choose" value="A">
        A
        <br>
        <input type="radio" name="choose" value="B">
        B 
        <br>
        <input type="radio" name="choose" value="C">
        C 
        <br>
        <input type="submit" name="submitted" value="send">
    </form>
    <h2>We Submitted:</h2>
    <p>
        <strong><em><?php echo $_GET['choose']; ?></em></strong>

</body>

</html>

