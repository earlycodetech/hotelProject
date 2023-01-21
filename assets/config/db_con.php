<?php

    /* ONline Connection */ 
    $dbHost = "localhost";
    $dbUser = "u710683456_hotel_project";
    $dbPassword = "H#jD3usb7";
    $dbName = "u710683456_hotel_project";
    


    /* Local Connection */ 
    // $dbHost = "localhost";
    // $dbUser = "root";
    // $dbPassword = "";
    // $dbName = "hotel_project";


   $connectDB = mysqli_connect(
        $dbHost,
        $dbUser,
        $dbPassword,
        $dbName
    );

    if (!$connectDB) {
        die("Failed to connect to database:". mysqli_connect_error());
    }