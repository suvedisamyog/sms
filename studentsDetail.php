
<?php 
require './includes/session.php';

include './includes/header.php';
include './includes/navbar.php';
error_reporting(0);

?>
       

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
               
                <?php 

include './includes/topbar.php';



                    ?>
                    

                 
                   

                </nav>
                

               
                <div class="container-fluid">

               

                <div class="row">
                <?php


require './connection.php';
require './includes/scripts.php';


?>
              

<div class="form-outline mb-4">
  <input type="search"  class="form-control mt-4" onkeyup="searchfunction()   "placeholder="Search By Name" id="datatable-search-input" >
  <script>
function searchfunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("datatable-search-input");
  filter = input.value.toUpperCase();
  table = document.getElementById("student-table");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
 
    td = tr[i].getElementsByTagName("td")[1];
 

    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
  
</div>
    <div class=" mt-4">
        <h2 class="black"><center>Students Detail</center></h2>
        
                   
       
      <?php
      require './connection.php';
      
      $query = "SELECT * FROM students";
      $data=mysqli_query($conn,$query);
      $total=mysqli_num_rows($data);
      
      if($total != 0){
        
      ?>

      <table class="table table-bordered  table-hover black " id="student-table">
        <thead >
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
    while($result=mysqli_fetch_assoc($data)){ 
        ?>
<tr>

    <td> <a style="text-decoration:none;" href="./search.php?search=<?php  echo $result['registration'];                         ?> "><?php  echo $result['registration'];                         ?> </a></td>
    <td><?php  echo $result['name'];                         ?> </td>
    <td><?php  echo $result['email'];                         ?> </td>
    <td><?php  echo $result['phone'];                         ?> </td>
    
    <td><?php  echo $result['course'];                         ?> </td>
    <td><?php  echo $result['address'];                         ?> </td>
    <td><?php  echo $result['dob'];                         ?> </td>
    <td><?php  echo $result['enrollyear'];                         ?> </td>
    <td><?php  echo $result['gender'];                         ?> </td>
    <td >

<a  class="btn btn-warning" <?php echo "href='./update.php?reg=$result[registration]';"?>>Edit</a>
<br> <hr>
<a  class="btn btn-danger" onclick="return confirm('Are you sure you want to delete ?')"<?php echo " href='./delete.php?reg=$result[registration]';"?>>Delete</a>


    </td>
    

</tr>



        <?php 
    }
}
        ?>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           



    <?php 
include './includes/scripts.php';
include './includes/footer.php';


?>
       



   

