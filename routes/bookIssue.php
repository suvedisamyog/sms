<?php 
error_reporting(0);
require '../connection.php';
include '../includes/head.php';

include '../includes/sidNav.php';

?>
<div class="container">
<div class="row bg-info">

<div class="col-sm-12">
    <?php include '../includes/topbar.php'; ?>
</div>




<?php

if ($SERVER["REQUEST_METHOD"] == "POST") {
   
    $registration = $_POST["reg"];
    $isbn = $_POST["isbn"];
    $bookName = $_POST["bookName"];
    $date = $_POST["date"];
    $stdName=$_POST["stdName"];

    $sql="select * from students where registration=$registration";
    $data=mysqli_query($conn,$sql);
    if(mysqli_num_rows($data)){
      while($row=mysqli_fetch_assoc($data)){
          $dbregistration=$row['registration'];
          if($dbregistration == $registration){
             

$sql1="INSERT INTO `library`(`regi`, `stdname`, `bookname`, `isbn`, `issue`) VALUES ('$registration','$stdName','$bookName','$isbn','$date')";
if(mysqli_query($conn,$sql1)){
    header('Location:./bookReturn.php');
}
else{
    $error="**Unknown Error ! Please try again";
}
          }
          else{
            $error="**Invalid registration Number";
          
        }
      }
    }

    }
    







?>












<div class="col-sm-12">
<div class="m-4">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" >
        <div class="row mb-3">
            <span id="error" class="text-center text-danger mb-3"><?php echo $error  ?></span>
            <label  class="col-sm-2 col-form-label">Registration Num</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="library_registration_num" name="reg" placeholder="Registration Number" required>
            </div>
        </div>
        <div class="row mb-3">
            <label  class="col-sm-2 col-form-label">Student Name</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="" name="stdName" placeholder="Student Name" required>
            </div>
        </div>
        <div class="row mb-3">
            <label  class="col-sm-2 col-form-label">ISBN Number</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id=""name="isbn" placeholder="ISBN Number" required>
            </div>
        </div>
        <div class="row mb-3">
            <label  class="col-sm-2 col-form-label">Book Name</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id=""name="bookName" placeholder="Book Name" required>
            </div>
        </div>
        <div class="row mb-3">
            <label  class="col-sm-2 col-form-label">Issue Date</label>
            <div class="col-sm-8">
                <input type="date" class="form-control" id=""name="date" placeholder="" required>
            </div>
        </div>
        
       
        <div class="rowt mt-4">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" name="issue" class="btn btn-primary btn-lg">Issue </button>
                <button type="reset" class="btn btn-warning btn-lg m-3 ">Reset </button>

            </div>
        </div>
    </form>
</div>
</div>    
    </div>
</div>

<?php include '../includes/footer.php'; ?>