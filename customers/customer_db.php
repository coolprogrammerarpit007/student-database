<?php

    $localhost = "localhost";
    $username = "root";
    $password = "";
    $dbname = "CUSTOMER";


    $conn = new mysqli($localhost,$username,$password,$dbname);


    if($conn->connect_error){
        die("conection failed!". $conn->connect_error);
    }
    // else{
    //     echo "Connected to the database sucessfully!";
    // }


// Creating a table in the database

//    $sql = "CREATE TABLE customerDB(
//         customer_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//         age TINYINT(2) NOT NULL,
//         first_name VARCHAR(30) NOT NULL,
//         last_name VARCHAR(30) NOT NULL,
//         country VARCHAR(30)  NOT NULL
//     )";


// if($conn->query($sql) === TRUE){
//     echo "Customer table created sucessfully";
// }
// else{
//     echo "Connection to the table broken!";
// }

$conn->close();