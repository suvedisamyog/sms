<?php
session_start();
require '../connection.php';
if(isset($_POST['add'])){
    $org=$_SESSION['mail'];
   
    $regi=$_POST['reg_num'];
    $regcheck="SELECT * FROM students WHERE registration='$regi' ";  
    $data = mysqli_query($conn,$regcheck) ;
    $regcount = mysqli_num_rows($data);
    if($regcount >=1){
       echo'
       <script>
       window.alert("registration Number ALready In Use");
       </script>
      
       ';
       header('Location:./addStudents.php?error=Registration Number Already In Use');
       exit();
       

    }
    else{   
        $reg=$regi;
    





$sname=$_POST['sname'];
$email=$_POST['email'];
$phone=$_POST['Phonenumber'];

$course=$_POST['course'];
$address=$_POST['address'];
$dob=$_POST['dob'];
$eroll=$_POST['eyear'];
$gender=$_POST['gender'];

$files = $_FILES['file'];
$filename=$files['name'];
$fileerror=$files['error'];

$filetemp=$files['tmp_name'];
$fileext=explode('.',$filename);
$filecheck=strtolower(end($fileext));
$fileextstored=array('png','jpeg','jpg');
if(in_array($filecheck,$fileextstored)){
    // $destinationfile='img/'.$filename;
    $destinationfile='../img/'.$filename;

    move_uploaded_file($filetemp,$destinationfile);

}





$sql="INSERT INTO `students`(`registration`, `name`, `email`, `phone`,  `course`, `address`, `dob`, `enrollyear`, `gender`, `image`,`org`) VALUES ('$reg','$sname','$email','$phone','$course','$address','$dob','$eroll','$gender', '$destinationfile','$org')";


if(mysqli_query($conn, $sql)){
   
 header("location:./studentsDetail.php");
    
}
else{
    header("Location:./addStudents.php?error=Error while inserting");
    exit();
    

}
  }
}



?>