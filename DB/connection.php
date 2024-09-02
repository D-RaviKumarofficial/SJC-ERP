<?php

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'erp';

    $conn = new mysqli($servername,$username,$password,$dbname);

    if ($conn->connect_error){
        die(''. $conn->connect_error);
    }else{
        // echo "connected successsfully";
    }
?>