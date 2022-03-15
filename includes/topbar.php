 <?php 
 session_start();
 $name=$_SESSION['mail'];
 include './bootstrap.php   ';
 require './includes/scripts.php';

require_once './connection.php';

?>
   <?php
if(isset($_SESSION)){
$sql="SELECT * FROM `admin` WHERE email='$name'";
$data = mysqli_query($conn,$sql);
if(mysqli_num_rows($data) !=0){
   while($row = mysqli_fetch_assoc($data)){ ?>
<nav class="navbar navbar-dark bg-primary ">
  <a class="navbar-brand px-5 mx-5  text-center text-capitalize "><?php echo $row['name']; ?></a>
  <span class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                             
    <img class="img-profile    rounded mx-auto d-block " src='<?php echo $row['image']; ?>' alt="Image Not available">
    <?php
   }
}
}
?>
 </a> 
                             <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" 
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="./logout.php"  >
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-white-400"></i>
                                    Logout
                                </a>
                            </div>
</span>
</nav>