<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'ecommerceapp';

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve the form data
    $name = $_POST['work_type'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    $s_image = $_POST['s_image'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Insert the form data into the database
    $sql = "INSERT INTO service_info (id, work_type, description, image, s_image, whatsapp_no, s_status) 
            VALUES ('6', $name', '$description', '$image', '$s_image', '$phone', 'PENDING')";

    if (mysqli_query($conn, $sql)) {
        echo "Record added successfully";
    } else {
        echo "Error adding record: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>
