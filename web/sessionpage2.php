<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sessionpage2</title>
</head>
<body>
    <h1>YOU ARE IN SESSIONPAGE2</h1>
    <ul>
        <li><a href="sessionpage1.php">sessionpage1</a></li>
        <li><a href="sessionpage2.php">sessionpage2</a></li>
    </ul>



<?php
       echo "Hi " .$_SESSION['username'] ." nice to meet you!";
   
?>

<form action="sessionpage2.5.php" method = "post">
    <input type="submit" name="Clear Session" value="Clear Session">
</form>



</body>
</html>
