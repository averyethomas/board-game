<?php

    define('DB_HOST', 'localhost');
    define('DB_NAME', 'board-game');
    define('DB_USER','root');
    define('DB_PASSWORD','');

    $con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error());

    $db = mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL DB: " . mysqli_error());

    if (mysqli_connect_errno($con)) {

        echo "Failed to connect to MySQL: " . mysqli_connect_error();

    } else {

        //echo 'Successfully connected to your database…';

    }

?>