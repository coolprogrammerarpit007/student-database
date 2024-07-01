<?php

    $localhost = "localhost";
    $username = "root";
    $password = "";

    // connecting to the local server and creating database.

    $conn = new mysqli($localhost,$username,$password);

    // checking if connection is working!

    if($conn->connect_error){
        die("Unfortunately, Connection Failed!".$conn->connect_error);
    }


    // setting up database

    $sql = "CREATE DATABaSE studentDB";

    if($conn->query($sql) === true){
        echo "Database is created sucessfully!";
    }
    else{
        echo "Database failed connection!";
    }