<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Add Staff</title>
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
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="assets/images/favicon.png" />

  <style>
    /* Custom styles to remove grey background from text fields */
    .form-control {
      background-color: white; /* Set background color to white */
      color: black; /* Set text color to black */
    }
    .form-label{
        color:black;
    }
   
  </style>
</head>

<body>
  <div class="container-scroller">
    <?php include 'Sidebar.php'; ?>
    
    <div class="container-fluid page-body-wrapper">
      <?php include 'Header.php'; ?>

      <div class="container mt-5">
        <h2 class="text-center">Add Staff Data</h2>

        <!-- Staff Data Form -->
        <form action="" method="POST" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" name="name" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="year_of_experience" class="form-label">Years of Experience</label>
              <input type="number" class="form-control" name="year_of_experience" required min="0">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="dob" class="form-label">Date of Birth</label>
              <input type="date" class="form-control" name="dob" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="qualification" class="form-label">Qualification</label>
              <input type="text" class="form-control" name="qualification" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 mb-3">
              <label for="address" class="form-label">Address</label>
              <textarea class="form-control" name="address" required rows="3"></textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="handling_subject" class="form-label">Handling Subject</label>
              <input type="text" class="form-control" name="handling_subject" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="photo" class="form-label">Photo</label>
              <input type="file" class="form-control" name="photo" accept="image/*" required>
            </div>
          </div>
          <button type="submit" class="btn btn-primary" name="add_staff">Add Staff</button>
        </form>

        <?php
        // Database connection
        include '../DB/connection.php';

        // Handle form submission
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_staff'])) {
            $name = $_POST['name'];
            $year_of_experience = $_POST['year_of_experience'];
            $dob = $_POST['dob'];
            $address = $_POST['address'];
            $qualification = $_POST['qualification'];
            $handling_subject = $_POST['handling_subject'];

            // Handle image upload
            if (!empty($_FILES["photo"]["name"])) {
                $target_dir = "uploads/"; // Specify the directory for uploads
                $photo = $target_dir . basename($_FILES["photo"]["name"]);
                
                // Check if the upload directory exists
                if (!is_dir($target_dir)) {
                    mkdir($target_dir, 0777, true); // Create the directory if it doesn't exist
                }

                // Move the uploaded file to the target directory
                if (move_uploaded_file($_FILES["photo"]["tmp_name"], $photo)) {
                    // Prepare and bind
                    $stmt = $conn->prepare("INSERT INTO staff (name, year_of_experience, dob, address, qualification, handling_subject, photo) VALUES (?, ?, ?, ?, ?, ?, ?)");
                    $stmt->bind_param("sisssss", $name, $year_of_experience, $dob, $address, $qualification, $handling_subject, $photo);

                    if ($stmt->execute()) {
                        echo "<script>alert('Staff added successfully!'); window.location.href = 'staff.php';</script>";
                    } else {
                        echo "<script>alert('Failed to add staff');</script>";
                    }
                } else {
                    echo "<script>alert('Failed to upload photo');</script>";
                }
            } else {
                echo "<script>alert('Please upload a photo');</script>";
            }
        }
        ?>
      </div>
    </div>
  </div>

  <?php include 'Script.php'; ?>
</body>

</html>
