<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../statics/css/bootstrap.min.css">
    <title>Show Fill Ups</title>
</head>
<body class="bg-dark">
    <div class="container d-flex justify-content-center p-1 pe-3 ps-3 mt-5 text-bg-primary">
        <div class="col-7 m-auto">
            <div class="row">
                <p class="display-5">List of Fill Ups</p>
                <button class="text-bg-secondary m-4 col-3"><a href="../views/home.php" class="text-black">Back to Fill up</a></button>
            </div>
        <div class="col-10">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../database/db.php';

                    $sql = "SELECT * FROM fillups";
                    try {
                        $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["id"] . "</td>";
                            echo "<td>" . $row["full_name"] . "</td>";
                            echo "<td>" . $row["email"] . "</td>";
                            echo "<td>
                            <a href='../handler/edit_fillup_handler.php?id=" . $row["id"] . "' class='btn btn-warning btn-sm'>Edit</a>
                            <a href='../handler/delete_fillup_handler.php?id=" . $row["id"] . "' class='btn btn-danger btn-sm' onclick='return confirm(\"Are you sure you want to delete this record?\")'>Delete</a>
                            </td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='3'>There's no data found</td></tr>";
                    }
                } catch (Exception $th) {
                    echo "<span class='text-warning'>Error: Create table first </span>";
                }

                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>

    </div>
</body>
</html>