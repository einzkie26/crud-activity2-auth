<?php 
include '../database/db.php';

$tableName = 'fillups';
$tableExists = $conn->query("SHOW TABLES LIKE '$tableName'")->num_rows > 0;

if (!$tableExists) {
    $sql = "CREATE TABLE $tableName (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        full_name VARCHAR(50) NOT NULL,
        password VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL UNIQUE
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Table <span style='background-color:rgb(0, 55, 255);'>$tableName</span> created successfully.";
    } else {
        echo "Error creating table: " . $conn->error;
    }
} else {
    echo "Table <span style='background-color:rgb(238, 255, 0);'>$tableName</span> already exists.";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checking table</title>
</head>
<body>
    <a href="../index.php">Back to Home</a>
</body>
</html>