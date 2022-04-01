<?php
error_reporting(0);
require_once '../connection.php';
include '../includes/head.php';

include '../includes/sidNav.php';

?>
<div class=" container">
    <div class="row bg-info">

        <div class="col-sm-12 ">
            <?php include '../includes/topbar.php'; ?>
        </div>
        <div class="col-sm-10 ">

            <div class="form-outline mb-4 p-4  ">
                <input type="search" class="form-control mt-4" onkeyup="searchfunction()" placeholder="Search By Name" id="datatable-search-input" >

            </div>
            
           
            <div class=" p-4">
          <h2 class="mb-4">
            <center>Students Detail</center>
          </h2>



          <?php

          $query = "SELECT * FROM students where org='$org' order by name";
          $data = mysqli_query($conn, $query);
          $total = mysqli_num_rows($data);

          if ($total != 0) {

          ?>

            <table class="table table-bordered  table-hover black  " id="student-table">
              <thead>
                <tr>
                  <th>Registration No </th>
                  <th> Fullname </th>
                  <th>Email </th>
                  <th>Phone no </th>

                  <th>Course </th>
                  <th>Address </th>
                  <th>Date of birth </th>
                  <th>Enrolled Year </th>
                  <th>gender </th>
                  <th>Operations </th>


                </tr>
              </thead>
              <?php
              while ($result = mysqli_fetch_assoc($data)) {
              ?>
                <tr>

                  <td> <a style="text-decoration:none;" href="./searchStudent.php?search=<?php echo $result['registration'];                         ?> "><?php echo $result['registration'];                         ?> </a></td>
                  <td><?php echo $result['name'];                         ?> </td>
                  <td><?php echo $result['email'];                         ?> </td>
                  <td><?php echo $result['phone'];                         ?> </td>

                  <td><?php echo $result['course'];                         ?> </td>
                  <td><?php echo $result['address'];                         ?> </td>
                  <td><?php echo $result['dob'];                         ?> </td>
                  <td><?php echo $result['enrollyear'];                         ?> </td>
                  <td><?php echo $result['gender'];                         ?> </td>
                  <td>

                    <a class="m-3"data-bs-toggle="tooltip" data-bs-placement="top" title="edit details  "
              <?php echo "href='./editStudent.php?reg=$result[registration]';" ?>><i class="fa-solid fa-pen-to-square"></i></a>
                    
                    
                    <a data-bs-placement="button" title="delete record"
 onclick="return confirm('Are you sure you want to delete ?')" <?php echo " href='./deleteStudent.php?reg=$result[registration]';" ?>><i class="fa-solid fa-trash-can"></i></a>


                  </td>


                </tr>



            <?php
              }
            }
            else{
              echo '
              <div class="container ps-md-5 ms-md-5">
              <div class="card container">
              <div class="card-body">
                <h5 class="card-title text-danger">No Records Found</h5>
                <p class="card-text mt-3">Look Like YOu Are New User? You Have Not Register Any Students Till Now .</p>
                <hr>
                <p >Want To Register  Students!</p>
                <a href="./addStudents.php" class="btn btn-primary">Register Now</a>
              </div>
            </div>
            </div>
              ';

            }
            ?>


        </div>
        </div>
    </div>
</div>
</div>

<?php include '../includes/footer.php'; ?>