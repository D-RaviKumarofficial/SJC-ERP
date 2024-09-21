<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Retrieve Data by ID</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h2 class="text-center mb-4">Retrieve Student Data by ID</h2>
    <form action="retrieve.php" method="POST">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="form-group mb-3">
            <label for="id">Enter ID:</label>
            <input type="number" name="id" class="form-control" id="id" placeholder="Enter ID" required>
          </div>
          <div class="form-group text-center">
            <button type="submit" class="btn btn-primary">Search</button>
          </div>
        </div>
      </div>
    </form>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
include "../DB/connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    // Prepare the SQL query to retrieve the data by ID
    $sql = "SELECT * FROM students WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Display data in a table format
        echo '<div class="container mt-5">';
        echo '<h2 class="text-center">Student Details</h2>';
        echo '<table class="table table-bordered">';
        echo '<thead><tr>
                <th>ID</th>
                <th>Name</th>
                <th>Date of Birth</th>
                <th>Email</th>
                <th>Previous Degree</th>
                <th>Address</th>
                <th>Sports</th>
                <th>Extra-Curricular Activities</th>
                <th>Area of Interest</th>
              </tr></thead><tbody>';

        // Fetch and display each row
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['name'] . '</td>';
            echo '<td>' . $row['dob'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['previous_degree'] . '</td>';
            echo '<td>' . $row['address'] . '</td>';
            echo '<td>' . $row['sports'] . '</td>';
            echo '<td>' . $row['extra_activities'] . '</td>';
            echo '<td>' . $row['area_of_interest'] . '</td>';
            echo '</tr>';
        }

        echo '</tbody></table>';
        echo '</div>';
    } else {
        echo '<div class="container mt-5"><div class="alert alert-danger">No record found for ID ' . $id . '.</div></div>';
    }

    $stmt->close();
}

$conn->close();
?>
