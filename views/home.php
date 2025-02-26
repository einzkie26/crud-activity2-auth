<?php include '../database/db.php';
include '../authentication/auth.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../statics/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" />
    <script src="../statics/js/bootstrap.js"></script>
    <title>Fill Up Form</title>
</head>
<body class="bg-dark">
    <div class="container d-flex justify-content-center mt-2 text-bg-primary p-1 mb-auto pe-1 ps-3">
        <div class="col-6">
            <div class="row">
                <p class="display-5">Fill Up</p>
                <a href="../handler/logout_handler.php" class="btn btn-danger btn-sm position-fixed bottom-0 start-0 mb-3 ms-3"><i class="fa-solid fa-right-from-bracket"></i>&nbsp;Logout</a>
            </div>
            <div class="row">
                <form action="../handler/add_fillup_handler.php" method="POST">
                    <div class="form-group col-6 mx-5 mt-5">
                        <label for="fname">Full Name:</label>
                        <input type="text" name="fname" id="fname" class="form-control" required>
                    </div>
                    <div class="form-group col-6 mx-5 mt-5">
                        <label for="pw">Password:</label>
                        <input type="password" name="pw" id="pw" class="form-control" required>
                    </div>
                    <div class="form-group col-6 mx-5 mt-5">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-success mx-1 p-3 mt-5">Submit</button>
                    <button type="button" class="btn btn-secondary mx-auto p-3 mt-5"><a href='show_fillups.php' class="text-white text-decoration-none">Show Fill Ups</a></button>
                </form>
                <form action="../handler/checking_table_handler.php" method="post">
                    <p class="mt-3">Recovery Options:</p>
                    <div class="col-5">
                    <button type="submit" class="btn btn-primary mx-auto p-3 mt-1">Check and Create table</button>
                    <a href='../handler/delete_table_handler.php' class='btn btn-primary mx-auto p-3 mt-1' onclick='return confirm("Are you sure you want to delete the table also the data?")'>Delete Table</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>AOS.init();</script>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>