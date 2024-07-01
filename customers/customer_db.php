<?php

$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "CUSTOMER";

$conn = new mysqli($localhost, $username, $password, $dbname);

if ($conn->connect_error) {
    die("conection failed!" . $conn->connect_error);
}

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

// Inserting data into the table
// $sql = "INSERT INTO customerDB(age,first_name,last_name,country)
//         VALUES(31,'JOHN','DOE','USA'),
//         (22,'Robert','Luna','USA'),
//         (22,'DAVID','ROBINSON','UK'),
//         (25,'JOHN','REINHART','UK'),
//         (28,'BETTY','DOE','UAE')

//         ";

// if($conn->query($sql) === true){
//     echo "New Customers are created sucessfully!";
// }
// else{
//     echo "Error, query not worked properly!";
// }


// inserting data into table by creating the template
// query to insert data into the table


// prepare and bind

$stmt = $conn->prepare("INSERT INTO customerDB(age,first_name,last_name,country) VALUES(?,?,?,?)");
$stmt->bind_param("isss", $age, $first_name, $last_name, $country_code);

// set parameters and execute

// $age = 17;
// $first_name = "Raj";
// $last_name = "Verma";
// $country_code = "IND";
// $age = 27;
// $first_name = "Mohit";
// $last_name = "Singh";
// $country_code = "IND";
// $age = 27;
// $first_name = "Ravi";
// $last_name = "Sharma";
// $country_code = "IND";
// $age = 35;
// $first_name = "Michael";
// $last_name = "Jackson";
// $country_code = "USA";
// $age = 45;
// $first_name = "Shane";
// $last_name = "Watson";
// $country_code = "Australia";

$stmt->execute();
$conn->close();
 