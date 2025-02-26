<?php
include '../database/db.php';

$tableName = 'fillups';
$tableExists = $conn->query("SHOW TABLES LIKE '$tableName'")->num_rows > 0;

if ($tableExists) {
    $sql = "DROP TABLE $tableName";

    if ($conn->query($sql) === TRUE) {
        echo "Table has been removed successfully.";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    } else {
        echo "Table does not exist.";
    }


$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="statics/css/bootstrap.min.css">
    <title>Delete Table</title>
</head>
<body>
<a href="../index.php">Back to Home</a>
</body>
</html>