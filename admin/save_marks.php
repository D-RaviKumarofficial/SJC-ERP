<?php
// Include error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection (change the credentials accordingly)
include "../DB/connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $names = ['Jerin Sujith A', 'Karthika.E', 'Masiga Thabasum.S', 'Snega.R', 'Versha.K', 'Bhuvaneshwaran', 'Nizar', 'Janu', 'Naveen', 'Ravi', 'Sam', 'Santha', 'Vimal', 'Nithish', 'Vaishu', 'Vasanth', 'Suriya', 'Rex'];

  
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
