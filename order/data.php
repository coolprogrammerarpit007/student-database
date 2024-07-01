<?php

    $localhost = "localhost";
    $username = "root";
    $password = "";
    $my_db = "orderDB";


    $conn = new mysqli($localhost,$username,$password,$my_db);


    if($conn->connect_error){
        die("Connection to the databse failed". $conn->connect_error);
    }


    // $stmt = $conn->prepare("INSERT INTO ORDERS(item,amount,customer_id) VALUES(?,?,?)");
    // $stmt->bind_param("sii",$item,$amount,$customer_id);


    // $item = 'keyboard';
    // $amount = 400;
    // $customer_id = 4;
    // $item = 'Mouse';
    // $amount = 300;
    // $customer_id = 4;
    // $item = 'Monitor';
    // $amount = 12000;
    // $customer_id = 6;
    // $item = 'Tablet';
    // $amount = 700;
    // $customer_id = 1;
    // $item = 'Speaker';
    // $amount = 1400;
    // $customer_id = 5;
    // $item = 'Mobile';
    // $amount = 1540;
    // $customer_id = 3;
    // $item = 'Redmi Phone';
    // $amount = 2100;
    // $customer_id = 8;
    // $item = 'Mackbook';
    // $amount = 23000;
    // $customer_id = 10;
    // $item = 'Linux Machine';
    // $amount = 400;
    // $customer_id = 2;
    // $item = 'KALI LINUX';
    // $amount = 3900;
    // $customer_id = 1;

    // $stmt->execute();

    // $sql = "SELECT * FROM orders WHERE amount BETWEEN 300 AND 1500";
    // $sql = "SELECT * FROM orders WHERE amount NOT BETWEEN 300 AND 500";
    // $sql = "SELECT MAX(amount) FROM orders";
    // $sql = "SELECT MIN(amount) FROM orders";
    // $sql = "SELECT * FROM orders WHERE amount = (SELECT MAX(amount) FROM orders)";
    $sql = "SELECT SUM(amount) as total_amount FROM orders";

    $result = $conn->query($sql);

    if($result->num_rows>0){
        $row = $result->fetch_all();
        var_dump($row);
    }