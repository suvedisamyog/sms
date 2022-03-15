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
               
                

                <!-- Begin Page Content -->
                <div class="container-fluid">

                   
                   
            


                

                <div class="row">
                <?php


require './connection.php';
require './includes/scripts.php';


?>
               
              
    <?php
    include './header.php';
    ?>
  
<div class="container-fluid black">
   
   <div class="row">
       <div class="col-md-6  bg-danger">
        <h3 class="text-center mt-3  ">Add Notice</h3>
       <form action="" method="post">
 
  <div class="form-outline m-5 p-3">
      <label class="form-label d-flex justify-content-center " ><strong>Title</strong></label>
   <textarea name="title" id=""   class="form-control"></textarea>
    
  </div>

  
  <div class="form-outline m-5 p-3 ">
  <label class="form-label d-flex justify-content-center " ><strong>Description</strong></label>
  <textarea name="description" id="" cols="4" rows="8" class="form-control"  ></textarea> 
  </div>

 

 
  <button  name="publish"type="submit" class="btn btn-primary  justify-content-center m-5">Publish</button>
</form>
       </div>
       <div class="col-md-6 noticeimg  bg-dark">
       <div class="container">
    <?php


 $query="SELECT * FROM notice order by time desc";
 $data=mysqli_query($conn,$query);
 $total=mysqli_num_rows($data);
 if ($total !=0){

      while($result=mysqli_fetch_assoc($data)){ ?>
         
         <div class="card  bg-info m-3" style="max-width: 40rem; height:max-contain;">
  <div class="card-header text-black "><?php echo $result['title']; ?></div>
 
  <div class="card-body">
  <h6 class="card-title ">
  <div><small ><?php echo $result['time']; ?></small></div>
</h6>
    <p class="card-text text-white"><?php echo $result['description'] ;?></p>
    <?php
    echo"
      <a  class='btn btn-danger' href='./noticeDelete.php?id=$result[id]'>Delete</a>
";
    ?>
  </div>
</div>
          <?php 
            }
           
            }
           
            ?>
            
            
    </div>

       </div>
   </div>
        
    </div>



<?php 
require './connection.php';

 if(isset($_POST['publish'])){
    $title=$_POST['title'];
    $description=$_POST['description'];
    $sql="INSERT INTO `notice`(`title`, `description`) VALUES ('$title','$description')";
   
    if(mysqli_query($conn,$sql)){
        echo "<meta http-equiv='refresh' content='0'>";
    }
      
  

 }

 mysqli_close($conn);

?>

                </div>
             

            </div>
            <!-- End of Main Content -->

           



    <?php 

include './includes/footer.php';


?>
       



   

