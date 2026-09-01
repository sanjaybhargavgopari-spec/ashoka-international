<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $full_name = $_POST['full_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $passport = $_POST['passport'];
    $service = $_POST['service'];
    $country = $_POST['country'];
    $message = $_POST['message'];

    $sql = "INSERT INTO applications
    (full_name, phone, email, passport, service, country, message)
    VALUES
    ('$full_name', '$phone', '$email', '$passport', '$service', '$country', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Application submitted successfully!');
                window.location='index.html';
              </script>";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>