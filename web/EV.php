<?php

$server = [
    'Host Server Name'=> $_SERVER['SERVER_NAME'],
    'Host Header'=> $_SERVER['HTTP_HOST'],
    'Document Root' => $_SERVER['DOCUMENT_ROOT'],
    'Current page' => $_SERVER['PHP_SELF'],
    'Script Name' => $_SERVER['SCRIPT_NAME'],
    'Absoulte Path' => $_SERVER['SCRIPT_FILENAME'],
    'Gateway Interface' => $_SERVER['GATEWAY_INTERFACE'],
    'Server Addr' => $_SERVER['SERVER_ADDR'],
    'Server Name' => $_SERVER['SERVER_NAME'],
    'Server Software' => $_SERVER['SERVER_SOFTWARE'],
    'Request Method' => $_SERVER['REQUEST_METHOD'],
    'Request Time' => $_SERVER['REQUEST_TIME'],
    'Request Time Float' => $_SERVER['REQUEST_TIME_FLOAT'],
    'Query String' => $_SERVER['QUERY_STRING']



];
print_r($server)
?>
