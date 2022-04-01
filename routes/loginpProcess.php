<?php 
session_start();
require '../connection.php' ;
if(isset($_POST["adminlogin"])){  
 
    $user=$_POST['loginemail'];  
    $pass=$_POST['loginpassword'];  
  
    
  
    $sql="SELECT * FROM admin WHERE email='$user' ";  
    $data = mysqli_query($conn,$sql) ;
    $emailcount = mysqli_num_rows($data);
    if($emailcount){
       
      $email_pass=mysqli_fetch_assoc($data);

     $dbpass= $email_pass['password'];
     $_SESSION['mail']= $email_pass['email'];
     $pass_dec=password_verify( $pass,$dbpass);
     if($pass_dec){
        header('location:./dashboard.php');

       
     }
     else{ 
        header('location:../adminLogin.php?error=incorrect password');
exit();
      
     }
     
    }
    else {
        header('location:../adminLogin.php?error=email id not registered');
             
                exit();
            }
}

?> 