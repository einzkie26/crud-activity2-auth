<?php
include '../database/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['fname'];
    $password = $_POST['pw'];
    $email = $_POST['email'];

    if (empty($full_name) || empty($password) || empty($email)) {
        echo "All fields are required.";
        exit();
    }

    $stmt = $conn->prepare("INSERT INTO fillups (full_name, password, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $full_name, $password, $email);

    if ($stmt->execute()) {
        header("Location: success.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
