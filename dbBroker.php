<?php
    $host = "localhost";
    $db = "kolokvijumi";
    $user = "root";
    $password = "";

    $conn = new mysqli($host,$user,$password,$db);
    if($conn->connect_errno){
        exit("Neuspesna konekcia: $conn->connect_error; kod: $conn->connect_errno");
    }

?>