<?php

require '../connection.php';
if (isset($_POST['register'])){
    // taking data from field
    $name = mysqli_real_escape_string ($conn,$_POST['name']);
    $email= mysqli_real_escape_string ($conn,$_POST['email']);
		$password= mysqli_real_escape_string ($conn, $_POST['password']) ;
		$cpassword=mysqli_real_escape_string ($conn,$_POST['cpassword']);
// hashinh password
        $pass=password_hash($password,PASSWORD_BCRYPT);
        $cpass=password_hash($cpassword,PASSWORD_BCRYPT);
        // checking if email already exist or not
        $email_check="SELECT * FROM `admin` WHERE email='$email'";
        $data=mysqli_query ($conn,$email_check);
        $emailcount=mysqli_num_rows ($data);
        if ($emailcount >0){
            header('location:./sinup.php?error=email already exist');	
            exit();
        }
        else{
            $files = $_FILES['file'];
            $filename=$files['name'];
            $fileerror=$files['error'];     
            $filetemp=$files['tmp_name'];
            $fileext=explode('.',$filename);
            $filecheck=strtolower(end($fileext));
            $fileextstored=array('png','jpeg','jpg');
            if(in_array($filecheck,$fileextstored)){
                $destinationfile='../img/'.$filename;
                move_uploaded_file($filetemp,$destinationfile);
            }
                $sql="INSERT INTO `admin`(`name`,`email`,`password`,`cpassword`,`image`) VALUES ('$name', '$email','$pass', '$cpass','$destinationfile')";
                if(mysqli_query($conn, $sql)){
                    header('location:../adminLogin.php');
                    }
                    else{
                    header('location:./sinup.php?error=Registration failed');
                    exit();	
                    }
            }
        }
        else{
            header('location:./sinup.php?error=Registration failed');	
            }
  // Close connection
  mysqli_close($conn);
