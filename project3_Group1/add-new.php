<?php
include "database.php";

if (isset($_POST["submit"])) {
   $level = $_POST['level'];
   $creditHours = $_POST['creditHours'];
   $courseCode = $_POST['courseCode'];
   $semester = $_POST['semester'];

   $sql = "INSERT INTO `courses`(`courseCode`, `level`, `creditHours`, `semester`) VALUES ($courseCode,'$level','$creditHours','$semester')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: indexx.php?msg=New record created successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title>Courses</title>
</head>

<body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #0d6efd;">
     Courses Application
   </nav>

   <div class="container">
      <div class="text-center mb-4">
         <h3>Add New Course</h3>
         <p class="text-muted">Complete the form below to add a new Course</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Level:</label>
                  <input type="text" class="form-control" name="level" placeholder="Level 100">
               </div>

               <div class="col">
                  <label class="form-label">Credit Hour:</label>
                  <input type="text" class="form-control" name="creditHours" placeholder="3">
               </div>
            </div>

            <div class="mb-3">
               <label class="form-label">Course Code:</label>
               <input type="text" class="form-control" name="courseCode" placeholder="CPEN-203">
            </div>

            <div class="form-group mb-3">
               <label>Semester:</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="semester" id="1" value="1">
               <label for="1" class="form-input-label">1</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="semester" id="2" value="2">
               <label for="2" class="form-input-label">2</label>
            </div>

            <div>
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="index.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>