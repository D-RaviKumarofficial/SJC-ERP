<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icons.min.css">
  <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <?php include 'Sidebar.php'; ?>
    <div class="container-fluid page-body-wrapper">
      <?php include 'Header.php'; ?>
      <!-- form starts -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Student Information Form</h4>
                  <form action="" method="POST" class="forms-sample">
                    <div class="form-group">
                      <label for="id">ID</label>
                      <input type="text" class="form-control" id="id" name="id" placeholder="Enter your ID" required>
                    </div>
                    <div class="form-group">
                      <label for="roll_no">Roll No</label>
                      <input type="text" class="form-control" id="roll_no" name="roll_no" placeholder="Enter your Roll No" required>
                    </div>
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                    </div>
                    <div class="form-group">
                      <label for="dob">Date of Birth</label>
                      <input type="date" class="form-control" id="dob" name="dob" required>
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                      <label for="previous_degree">Previous Degree</label>
                      <input type="text" class="form-control" id="previous_degree" name="previous_degree" placeholder="Enter your previous degree" required>
                    </div>
                    <div class="form-group">
                      <label for="address">Address</label>
                      <textarea class="form-control" id="address" name="address" rows="4" placeholder="Enter your address" required></textarea>
                    </div>
                    <div class="form-group">
                      <label for="sports">Sports</label>
                      <input type="text" class="form-control" id="sports" name="sports" placeholder="Enter the sports you play" required>
                    </div>
                    <div class="form-group">
                      <label for="extra_activities">Extra-Curricular Activities</label>
                      <textarea class="form-control" id="extra_activities" name="extra_activities" rows="3" placeholder="Enter your extra-curricular activities" required></textarea>
                    </div>
                    <div class="form-group">
                      <label for="area_of_interest">Area of Interest</label>
                      <input type="text" class="form-control" id="area_of_interest" name="area_of_interest" placeholder="Enter your area of interest" required>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button type="reset" class="btn btn-light">Reset</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- form ends -->
    </div>
  </div>
  <?php include 'Script.php'; ?>
</body>

</html>

<?php
include "../DB/connection.php";

// Capture form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $roll_no = $_POST['roll_no'];
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $previous_degree = $_POST['previous_degree'];
    $address = $_POST['address'];
    $sports = $_POST['sports'];
    $extra_activities = $_POST['extra_activities'];
    $area_of_interest = $_POST['area_of_interest'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO students (id, roll_no, name, dob, email, previous_degree, address, sports, extra_activities, area_of_interest) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssssssss", $id, $roll_no, $name, $dob, $email, $previous_degree, $address, $sports, $extra_activities, $area_of_interest);

    if ($stmt->execute()) {
        echo "<script>
            alert('Data inserted successfully!');
            window.location.href = 'index.php';  // Redirect to your admin page
        </script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

?>
