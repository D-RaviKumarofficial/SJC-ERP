<?php
// Include error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection (change the credentials accordingly)
include "../DB/connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $names = ['Student 1', 'Student 2', 'Student 3', 'Student 4', 'Student 5', 'Student 6', 'Student 7', 'Student 8', 'Student 9', 'Student 10', 'Student 11', 'Student 12', 'Student 13', 'Student 14', 'Student 15', 'Student 16', 'Student 17', 'Student 18'];
  
  $first_cia = $_POST['first_cia'];
  $second_cia = $_POST['second_cia'];

  $all_success = true;

  // Begin a transaction
  $conn->begin_transaction();

  try {
    for ($i = 0; $i < count($names); $i++) {
      $name = $names[$i];
      $first_mark = $first_cia[$i];
      $second_mark = $second_cia[$i];

      // Prepare the SQL statement
      $stmt = $conn->prepare("INSERT INTO student_marks (name, first_cia, second_cia) VALUES (?, ?, ?)");
      $stmt->bind_param("sii", $name, $first_mark, $second_mark);

      // Execute the prepared statement
      if (!$stmt->execute()) {
        throw new Exception("Error executing query: " . $stmt->error);
      }
    }

    // Commit the transaction
    $conn->commit();
    http_response_code(200); // Success response
  } catch (Exception $e) {
    // Rollback the transaction on error
    $conn->rollback();
    error_log("Database error: " . $e->getMessage()); // Log the error for debugging
    http_response_code(500); // Error response
  } finally {
    $stmt->close();
    $conn->close();
  }
}
?>
