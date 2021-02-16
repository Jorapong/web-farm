<?php

    $server = "192.168.1.48";
    $user = "test";
    $password = "";
    $db_name = "farm_db";
    $conn = new mysqli($server,$user,$password,$db_name);
    if($conn->connect_errno) {
        printf("ไม่สามารถเชื่อมต่อฐานข้อมูลได้", $conn->connect_error);
        exit();
    }
    mysqli_set_charset($conn, 'utf8');

?>