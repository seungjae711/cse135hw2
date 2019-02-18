<?php
	session_destroy();
        //if(isset($_COOKIE['username'])){
        $name = $_COOKIE['username'];
        setcookie('username', $name, time()-1);

        unset($_SESSION['username']);
      
        setcookie(session_name(),"",time()-3600, "/");
               
        $_SESSION = array();
        session_destroy();
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
    <h1>YOU ARE IN SESSIONPAGE2</h1>

    <ul>
        <li><a href="sessionpage1.php">sessionpage1</a></li>
        <li><a href="sessionpage2.php">sessionpage2</a></li>
    </ul>

<?php
       echo "Howdy stranger. Please tell me your name on page1!";
?>

</body>
</html>

