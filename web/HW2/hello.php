
<?php 
    $hello = "Hello World";
    $color_code = array('#FFFF00', '#0000FF', '#FFFFFF');
    $random_color = $color_code[array_rand($color_code)];
    echo "Hello Web World from Language PHP on "; echo date("M, d, Y h:i:s A"); echo " stamp enjoy my COLOR page!"; 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HELLO WORLD!</title>
</head>
<body style="background:<?php echo $random_color;?>">

<br>
<a href="../../index.html">Go back to homepage</a>





</body>
</html>

