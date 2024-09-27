<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retrieve Student Marks</title>
    <link rel="stylesheet" href="(link unavailable)">
    <style>
        body {
            background-color: #f5f5f5;
        }
        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container mt-5 pt-5">
        <h2 class="text-center mb-4">Retrieve Student Marks</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="name">Student Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Retrieve Marks</button>
        </form>
        <div id="result" class="mt-4"></div>
    </div>

    <script src="(link unavailable)"></script>
    <script src="(link unavailable)"></script>
</body>
</html>




<?php
// Include error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection (change the credentials accordingly)
include "../DB/connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];

    // Prepare the SQL statement
    $stmt = $conn->prepare("SELECT first_cia, second_cia FROM student_marks WHERE name = ?");

    // Bind parameters
    $stmt->bind_param("s", $name);

    // Execute the prepared statement
    if ($stmt->execute()) {
        $stmt->bind_result($first_cia, $second_cia);
        $stmt->fetch();

        // Check if student exists
        if ($first_cia !== null && $second_cia !== null) {
            echo "
                <div class='alert alert-success'>
                    <h4>Student Marks:</h4>
                    <p>Student Name: $name</p>
                    <p>First CIA: $first_cia</p>
                    <p>Second CIA: $second_cia</p>
                </div>
            ";
        } else {
            echo "
                <div class='alert alert-danger'>
                    Student not found!
                </div>
            ";
        }
    } else {
        echo "
            <div class='alert alert-danger'>
                Database error: " . $stmt->error . "
            </div>
        ";
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>