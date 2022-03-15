<?php 
error_reporting(0);
session_start();
require './includes/session.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    .row{
        padding:10px;
    }
</style>
    <title>Edit Details</title>
    
</head>
<body>
    
   
  
    
    <div class="main container ">

    <div class="nav ">
  <h2 class="p-3">Edit Data</h2>
  <?php


require './connection.php';

$id=$_GET['reg'];
$sql = "SELECT * FROM `students` WHERE registration=$id";
$data = mysqli_query($conn,$sql);
if(mysqli_num_rows($data) !=0){
    while($result = mysqli_fetch_array($data)){  


?>
  </div>

        <form action="#" method="post" enctype="" class="form-group ">
        <div class="row">
                <div class="col-sm-4 ">
                    <label for="name" class="form-label">Full Name:</label>
                    <input class="form-control" placeholder="Full Name" type="text" name="sname" id="sname" required value="<?php echo $result['name']; ?>">
                </div>
                <div class="col-sm-4">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required value="<?php echo $result['email']; ?>">
                </div>
            </div>
  
 <?php 


if(isset($_POST['update'])){
$registration = $_POST['reg_num'];
$name=$_POST['sname'];
$email=$_POST['email'];
$Phone=$_POST['Phone'];

$course=$_POST['course'];
$address=$_POST['address'];
$dob=$_POST['dob'];
$eyear=$_POST['eyear'];
$gender=$_POST['gender'];

$query="UPDATE `students` SET `registration`='$registration',`name`='$name',`email`='$email',`phone`='$Phone',`course`='$course',`address`='$address',`dob`='$dob',`enrollyear`='$eyear',`gender`='$gender' WHERE registration='$id' ";
$result = mysqli_query($conn,$query) ;
if($result){
 header('location:./studentsdetail.php');
}
else{
    echo "error";
}









}
?>
<div class="row">
    <div class="col-sm-4">
        <label for="Reg_num" class="form-label">Registration Number:</label>
        <input type="text" class="form-control" id="reg_num" placeholder="Registration Number" required name="reg_num" value="<?php echo $result['registration']; ?>" >
    </div>
    <div class="col-sm-4">
        <label for="Phonenumber" class="form-label">Phone Number:</label>
        <input type="tel" class="form-control"name="Phone" id=" Phonenumber" placeholder="Phone Number" required value="<?php echo $result['phone']; ?>">

    </div>
</div>
<div class="row">
<div class="col-sm-4">
        <label for="address" class="form-label">Address:</label>
        <input type="text" name="address" id=" address" placeholder="Address"class="form-control" required value="<?php echo $result['address']; ?>">

    </div>

   
    <div class="col-sm-4 form-check p-1">
        <label for="course" class="form-label">Course:</label>
        <select class="form-select" name="course" value="<?php echo $result['course']; ?>">

         
            <option value="BCA" <?php if($result['course'] == 'BCA'){ echo 'selected';}?>>BCA</option>
            <option value="Bsc.CSIT"<?php if($result['course'] == 'Bsc.CSIT'){ echo 'selected';}?>>Bsc.CSIT</option>
            <option value="BIT"<?php if($result['course'] == 'BIT'){ echo 'selected';}?>>BIT</option>
            <option value="BIM"<?php if($result['course'] == 'BIM'){ echo 'selected';}?>>BIM</option>

           
          
          </select>
    </div>
</div>
<div class="row">
<div class="col-sm-4">
        <label for="eyear" class="form-label">Enroll Year:</label>
        <input type="date" name="eyear" id="eyear " class="form-control" required value="<?php echo $result['enrollyear']; ?>">

    </div>
    <div class="col-sm-4">
        <label for="dob" class="form-label">Date of Birth:</label>
        <input type="date" name="dob" id="dob " class="form-control" required value="<?php echo $result['dob']; ?>">

    </div>
</div>
<div class="row">
    
    <div class="col-sm-8 form-check p-1">
        <label for="gender" class="form-label">Gender:</label>
        <select class="form-select" name="gender" value="<?php echo $result['gender']; ?>">

         
            <option value="Male" <?php if($result['gender'] == 'Male'){ echo 'selected';}?>>Male</option>
            <option value="Female"  <?php if($result['gender'] == 'Female'){ echo 'selected';}?>>Female</option>
           
          
          </select>
    </div>
    
</div >
<button type="submit" name="update" class="btn-success btn-lg p-2 mt-4 " name="add"> update</button>

</form>
<?php }
}
?>

       
    </div>
</body>
</html>



















