<?php

$dbHost = "localhost";
$dbUser = "root"; 
$dbPass = ""; 
$dbname = "customer"; 

$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["Firstname"];
    $last_name = $_POST["Lastname"];
    $full_address = $_POST["FullAddress"];
    $email_address = $_POST["EmailAddress"];
    $phone_number = $_POST["PhoneNumber"];
    $instrument = $_POST["Instrument"];
    $quantity = $_POST["Qty"];
    $brand = $_POST["Brand"];

 
    $sql = "INSERT INTO CustomerOrders (FirstName, LastName, FullAddress, EmailAddress, PhoneNumber, Instrument, Quantity, Brand)
            VALUES ('$first_name', '$last_name', '$full_address', '$email_address', '$phone_number', '$instrument', $quantity, '$brand')";

    if ($conn->query($sql) === TRUE) {
        header('location: index.php');
    } else {
        header('location: index.php');
    }
}

$conn->close();
?>
