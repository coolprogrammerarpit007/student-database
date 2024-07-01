<?php

// Creating the order database and table in it

$localhost = "localhost";
$username = "root";
$password = "";
$my_db = "orderDB";


// $conn = new mysqli($localhost,$username,$password);
$conn = new mysqli($localhost,$username,$password,$my_db);

if($conn->connect_error){
    die("Connection Error". $conn->error);
}

// else{

//     echo "Sucessfully, created the orders database!";
// }


// $sql = "CREATE DATABASE orderDB";

// if($conn->query($sql)){
//     echo "Successfully, created the database!";
// }
// else{
//     echo "Error occurs!";
// }


$sql = "CREATE TABLE ORDERS(
order_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
item VARCHAR(30) NOT NULL,
amount INT(6) NOT NULL,
customer_id INT(6) NOT NULL
)";

if($conn->query($sql)){
    echo "Sucessfully Created a order table in the database";
}
else{
    echo "Table not created!";
}

$conn->close();