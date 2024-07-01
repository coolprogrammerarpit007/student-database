<?php

    $localhost = "localhost";
    $username = "root";
    $password = "";
    $my_db = "CUSTOMER";


    // connecting to the local server and the database.

    $conn = new mysqli($localhost,$username,$password,$my_db);

    if($conn->connect_error){
        die("Connection Failed!".$conn->connect_error);
    }


    // database connected sucessfully

    // $sql = "SELECT first_name,last_name FROM customerDB";
    // $sql = "SELECT first_name,last_name FROM customerDB WHERE last_name = 'ROBINSON'";
    // $sql = "SELECT age,country FROM customerDB WHERE country = 'USA'";
    // $sql = "SELECT * FROM customerDB WHERE age >= 25";
    // $sql = "SELECT * FROM customerDB WHERE last_name = 'DOE' AND country = 'USA'";
    // $sql = "SELECT * FROM customerDB WHERE last_name = 'DOE' OR country = 'USA'";
    // $sql = "SELECT * FROM customerDB WHERE NOT country = 'USA'";
    // $sql  = "SELECT * FROM customerDB WHERE (country = 'USA' OR country = 'UK') AND age >= 26";
    // $sql  = "SELECT * FROM customerDB WHERE NOT country = 'USA' AND NOT last_name = 'DOE'";
    // $sql  = "SELECT DISTINCT country FROM customerDB";
    // $sql  = "SELECT DISTINCT age FROM customerDB";
    // $sql  = "SELECT DISTINCT first_name , country FROM customerDB";
    // $sql  = "SELECT COUNT(DISTINCT country) FROM customerDB";
    // $sql  = "SELECT CONTACT(first_name,' ',last_name) AS full_name FROM customerDB";
    // $sql = "SELECT * FROM customerDB LIMIT 5 OFFSET 3";
    // $sql = "SELECT * FROM customerDB WHERE country IN ('USA','IND')";
    $sql = "SELECT * FROM customerDB WHERE country NOT IN ('USA','IND')";

    $result = $conn->query($sql);

    if($result->num_rows>0){
        $row = $result->fetch_all();
        var_dump($row);
    }

    $conn->close();