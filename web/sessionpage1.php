<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sessionpage1</title>
</head>
<body>
    <h1>YOU ARE IN SESSIONPAGE1</h1>

    <form action="sessionpage1.php" method = "post">
        <label for="name">User name:</label>
        <input type="text" name="name" id="name"><br>
        <input type="submit" name="submit" value="submit" onclick ="hello()">
    </form>


    <ul>
        <li><a href="sessionpage1.php">sessionpage1</a></li>
        <li><a href="sessionpage2.php">sessionpage2</a></li>
    </ul>


<?php
     if(!isset($_SESSION['username'])){
        echo "hello!";
     }else {
	echo "Hello! " . $_SESSION['username'] . "you are logged in";
     }
?>


</body>
</html>


<script>
    function hello() {
    <?php  
        $UN = $_POST["name"];
        $second = 14400;
        $expire = time() + $second;
        setcookie("username", $UN, $expire, "/");
        $_SESSION["username"] = $UN;
    ?>
    }
<script>


