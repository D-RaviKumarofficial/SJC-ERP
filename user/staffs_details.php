<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Retrieve Staff Data</title>
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
            Retrieve Staff Data
          </div>
          <div class="card-body">
            <form action="#" method="POST">
              <div class="form-group mb-4">
                <label for="staff_name">Select Staff Name:</label>
                <select name="staff_name" class="form-control form-control-lg" id="staff_name" required>
                  <option value="">-- Select Staff --</option>
                  <?php
                  include "../DB/connection.php";
                  $sql = "SELECT name FROM staff"; // Adjust this query according to your staff table
                  $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                      echo '<option value="' . htmlspecialchars($row['name']) . '">' . htmlspecialchars($row['name']) . '</option>';
                    }
                  }
                  ?>
                </select>
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

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $staff_name = $_POST['staff_name'];

      // Prepare the SQL query to retrieve all data by staff name
      $sql = "SELECT * FROM staff WHERE name = ?"; // Adjust this query according to your staff table
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("s", $staff_name); // "s" denotes a string type
      $stmt->execute();
      $result = $stmt->get_result();

      if ($result->num_rows > 0) {
          // Display data in a table format
          echo '<div class="container mt-5">';
          echo '<h2 class="text-center">Staff Details</h2>';
          echo '<table class="table table-bordered">';
          echo '<thead><tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Year of Experience</th>
                  <th>Date of Birth</th>
                  <th>Address</th>
                  <th>Qualification</th>
                  <th>Handling Subject</th>
                  <th>Photo</th>
                </tr></thead><tbody>';

          // Fetch and display each row
          while ($row = $result->fetch_assoc()) {
              echo '<tr>';
              echo '<td>' . htmlspecialchars($row['id']) . '</td>';
              echo '<td>' . htmlspecialchars($row['name']) . '</td>';
              echo '<td>' . htmlspecialchars($row['year_of_experience']) . '</td>';
              echo '<td>' . htmlspecialchars($row['dob']) . '</td>';
              echo '<td>' . htmlspecialchars($row['address']) . '</td>';
              echo '<td>' . htmlspecialchars($row['qualification']) . '</td>';
              echo '<td>' . htmlspecialchars($row['handling_subject']) . '</td>';
              echo '<td><img src="../admin/uploads/' . htmlspecialchars($row['photo']) . '" alt="Photo" style="width: 100px; height: auto;"/></td>';

              echo '</tr>';
          }

          echo '</tbody></table>';
          echo '</div>';
      } else {
          echo '<div class="container mt-5"><div class="alert alert-danger text-center">No record found for Staff Name ' . htmlspecialchars($staff_name) . '.</div></div>';
      }

      $stmt->close();
  }

  $conn->close();
  ?>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
