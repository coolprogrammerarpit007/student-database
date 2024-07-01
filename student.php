<?php

    // Creating Table and inserting students into a table

    $localhost = "localhost";
    $username = "root";
    $password = "";
    $myDB = "studentDB";


    // connecting to the database

    $conn = new mysqli($localhost,$username,$password,$myDB);

    // error handling for connecting to database!

    if($conn->connect_error){
        die("Connection to databae failed!".$conn->error);
    }

    // echo("Database connected sucessfully!");

    // Now creating a table into database

    $sql = "CREATE TABLE STUDENT(
        id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        student_name VARCHAR(20),
        departmant VARCHAR(20),
        email_id VARCHAR(20),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP  
    )";


if($conn->query($sql)){
    echo "Created a table sucessfully in the database!";
}
else{
    echo "NOT Sucesffuly created database!";
}

$conn->close();