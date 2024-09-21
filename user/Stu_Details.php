<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Retrieve Data by Roll No</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    body {
      background-color: #f8f9fa;
    }
    .card {
      background-color: #fff;
      border: none;
      border-radius: 1rem;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .card-header {
      background-color: #007bff;
      color: #fff;
      border-radius: 1rem 1rem 0 0;
      font-size: 1.25rem;
      font-weight: bold;
      text-align: center;
      padding: 1rem;
    }
    .form-group label {
      font-weight: bold;
      color: #495057;
    }
    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
      padding: 0.75rem 1.5rem;
      font-size: 1rem;
    }
    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #004085;
    }
    .table {
      margin-top: 2rem;
    }
    .table th {
      background-color: #007bff;
      color: white;
    }
    .alert {
      margin-top: 2rem;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            Retrieve Student Data by Roll No
          </div>
          <div class="card-body">
            <form action="#" method="POST">
              <div class="form-group mb-4">
                <label for="roll_no">Enter Roll No:</label>
                <input type="text" name="roll_no" class="form-control form-control-lg" id="roll_no" placeholder="Enter Roll No" required>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary">Search</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
include "../DB/connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $roll_no = $_POST['roll_no'];

    // Prepare the SQL query to retrieve the data by roll_no
    $sql = "SELECT * FROM students WHERE roll_no = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $roll_no); // "s" denotes a string type
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Display data in a table format
        echo '<div class="container mt-5">';
        echo '<h2 class="text-center">Student Details</h2>';
        echo '<table class="table table-bordered">';
        echo '<thead><tr>
                <th>ID</th>
                <th>Roll No</th>
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
            echo '<td>' . $row['roll_no'] . '</td>';
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
        echo '<div class="container mt-5"><div class="alert alert-danger text-center">No record found for Roll No ' . $roll_no . '.</div></div>';
    }

    $stmt->close();
}

$conn->close();
?>
