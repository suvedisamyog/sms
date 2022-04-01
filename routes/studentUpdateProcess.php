<?php 

require '../connection.php';
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
 header('location:./studentsDetail.php');
}
else{
    echo "error";
}









}
?>