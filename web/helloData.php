<?php 
    $response = $_POST["response"];
    if (empty($response)){
        echo "<h1>Specify response paramter</h1>"; 
    }else {
	if($response == "JSON") {
        	header('Content-Type: application/json');
        	$json = array(
            		"msg" => "Hello Data it's " . date("M, d, Y h:i:s A")
        	);
        	echo json_encode($json);
             
        }else if($response == "XML") {
		header('Content-Type: text/html');
		echo "<?xml version='1.0' encoding='utf-8'?" . "?>\n" ;
		echo  "Hello Data it's " . date("M, d, Y h:i:s A");
		//echo ($output);
	}
    }
?>

