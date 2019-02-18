<?php   
    $method = $_POST["method"];
    if (!empty($method)){
        $name = $_POST["name"];
        $color = $_POST["color"];

    }else {
        $name = $_GET["name"];
        $color = $_GET["color"];

    }
    echo "Hello " . $name . " from a Web app written PHP on " . date("M, d, Y h:i:s A");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HELLO WORLD!</title>
</head>
<body style="background:<?php echo $color;?>">

<br>
<a href="./index.html">Go back to homepage</a>
