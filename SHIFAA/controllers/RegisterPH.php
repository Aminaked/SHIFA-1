<?php

include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
    $pharmacy_name = $_POST['pharmacy_name'];
    $pharmacy_liscense= $_POST['pharmacy_liscense'];
    $phone= $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    

   
    $sql = "INSERT INTO pharmacy (pharmacy_name,pharmacy_liscense_number, phone_number, email, password) VALUES ('$pharmacy_name','$pharmacy_liscense','$phone','$email','$password')";

   
    if ($conn->query($sql) === TRUE) {
        echo "Pharmacy  added successfully";
        header("location: ../views/PHhomepage.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
    $conn->close();

?>