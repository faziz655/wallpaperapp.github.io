<?php

    //database configuration
    $host       = 'localhost';
    $user       = 'admin';
    $pass       = 'admin';
    $database   = 'wallpaper app';

    $connect = new mysqli($host, $user, $pass, $database);

    if (!$connect) {
        die ('connection failed: ' . mysqli_connect_error());
    } else {
        $connect->set_charset('utf8mb4');
    }

    $ENABLE_RTL_MODE = 'false';

?>