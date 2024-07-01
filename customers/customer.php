<?php

    $localhost = "localhost";
    $username = "root";
    $password = "";


    $conn = new mysqli($localhost,$username,$password);

    if($conn->connect_error){
        die("Conection Failed! ".$conn->connect_error);
    }


    // echo "sucessfully connected to server";

    // creating customer database

    $sql = "CREATE DATABASE CUSTOMER";

    if($conn->query($sql)){
        echo "Customer Created sucessfully!";
    }
    else{
        echo "database not created!";
    }