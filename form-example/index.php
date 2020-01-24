<DOCTYPE html>

<html>

<head>
    <title>My Form</title>
</head>

<body>

    <h1>My First PHP-Enabled Form</h1>

    <form action="./search.php" method="get">
        <input type="search" name="search"
        placeholder="Please enter a search term...">
        <input type="submit" value="Submit Search">
    </form>

    <h2>Lets try a POST submission</h2>

    <form action="./register.php" method="post">
    <input type="text" name="user" placeholder="Enter your username...">
    <input type="email" name="email" placeholder="Enter your e-mail...">
    <input type="password" name="pass" placeholder="Type in your password!">
    <input type="password" name="passcheck" placeholder="Type in your password again to confirm...">
    <input type="submit" value="Register">
    </form>
</body>

</html>

