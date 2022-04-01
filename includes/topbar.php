<?php 
 session_start();
 include './head.php'; 


 if(isset($_SESSION)){
    $sql="SELECT * FROM `admin` WHERE email='$org'";
   
    $data = mysqli_query($conn,$sql);
   
   
    if(mysqli_num_rows($data) !=0){
       while($row = mysqli_fetch_assoc($data)){  ?>
       <div class="d-flex">
       <div class="nav-toogle fa-lg mt-4 ">
          <button onclick="toogle()">
          <i class="fa fa-bars"></i>
          </button>
       </div>
       <div class="container-fluid mb-3">
<nav class="bg-info   text-dark p-3 " 
    <div> <b class="text-center" >admin panel for   &nbsp;<?php echo $row['name'] ?></b>
   </div>
</nav>
</div>
</div>
 
 <?php
   }
}
}

?>


 
   

