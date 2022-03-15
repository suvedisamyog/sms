<?php
    error_reporting(0);
    require './includes/session.php';

include './includes/header.php';
include './includes/navbar.php';
include './includes/scripts.php';
include './includes/bootstrap.php';
?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
      <?php 
include './includes/topbar.php';
                    ?>
                </nav>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                <div class="row">
                <?php
require './connection.php';
require './includes/scripts.php';
?>
 <h2 class="black"> Students Detail</h2>
 <?php
 require_once './connection.php';
 $query="SELECT * FROM public ";
 $data=mysqli_query($conn,$query);
 $total=mysqli_num_rows($data);
 if ($total !=0){
?>
<table class="table table-bordered table-hover black">
<thead>
      <tr> 
      <th>S.N </th>
          <th> Fullname </th> 
          <th>Email </th> 
          <th>Phone no </th> 
          <th>Course </th> 
          <th>Queries </th> 
      </tr>
      </thead>
      <?php
      while($result=mysqli_fetch_assoc($data)){
          echo "
          <tr>
          <td>".$result['sn']."</td>
          <td>".$result['name']."</td>
          <td>".$result['email']."</td>
          <td>".$result['phone']."</td>
          <td>".$result['course']."</td>
          <td>".$result['question']."</td>
            </tr>
          ";
      }
    }
    else {
        echo 'List is empty';
      }
      ?>
                </div>
            </div>
            <!-- End of Main Content -->
    <?php 
include './includes/footer.php';
?>
