<?php
    $db_hostname = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_databasename = "educative";

    $con = new mysqli($db_hostname,$db_user,$db_password,$db_databasename);
    
    if($con->connect_error)
    {
        die("connection failed");
    }
    
?>