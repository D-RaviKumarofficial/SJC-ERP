<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin</title>
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="shortcut icon" href="assets/images/favicon.png" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
  <div class="container-scroller">
    <?php include 'Sidebar.php'; ?>
    <div class="container-fluid page-body-wrapper">
      <?php include 'Header.php'; ?>
      <div class="main-panel">
        <div class="content-wrapper">
          <h3>Enter Student Marks</h3>
          <form id="marksForm">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>S.No</th>
                  <th>Name</th>
                  <th>1st CIA</th>
                  <th>2nd CIA</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $names = ['Student 1', 'Student 2', 'Student 3', 'Student 4', 'Student 5', 'Student 6', 'Student 7', 'Student 8', 'Student 9', 'Student 10', 'Student 11', 'Student 12', 'Student 13', 'Student 14', 'Student 15', 'Student 16', 'Student 17', 'Student 18'];
                foreach ($names as $index => $name) {
                  echo "<tr>
                          <td>" . ($index + 1) . "</td>
                          <td>$name</td>
                          <td><input type='number' name='first_cia[]' required></td>
                          <td><input type='number' name='second_cia[]' required></td>
                        </tr>";
                }
                ?>
              </tbody>
            </table>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php include 'Script.php'; ?>

  <script>
    $(document).ready(function() {
      $("#marksForm").on('submit', function(e) {
        e.preventDefault();
        
        $.ajax({
          url: 'save_marks.php',
          type: 'POST',
          data: $(this).serialize(),
          success: function(response) {
            // Show SweetAlert on success
            Swal.fire({
              icon: 'success',
              title: 'Success',
              text: 'Marks saved successfully!'
            });
          },
          error: function(xhr) {
            // Log the error response
            console.error(xhr.responseText); 
            // Show SweetAlert on error
            Swal.fire({
              icon: 'error',
              title: 'Error',
              text: 'There was an error saving the marks: ' + xhr.responseText
            });
          }
        });
      });
    });
  </script>
</body>

</html>
