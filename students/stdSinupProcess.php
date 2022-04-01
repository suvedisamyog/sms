<?php
require '../connection.php';

if (isset($_POST['register'])) {
   
    $registration= mysqli_real_escape_string($conn,$_POST['regi']);
    $email =  mysqli_real_escape_string($conn,$_POST['email']);
    $password =  mysqli_real_escape_string($conn,$_POST['password']);
    $cpassword =  mysqli_real_escape_string($conn,$_POST['cpassword']);
  
    $passlenth = strlen($password);




    if (empty($registration) || empty($email) || empty($password) || empty($cpassword)) {

        header('location:./stdSinUp.php?sinup=empty');
        exit();
    } else {

        $sql = "select * from students where registration='$registration' ";
        $data = mysqli_query($conn, $sql);
        if (mysqli_num_rows($data) != 0) {
            while ($row = mysqli_fetch_array($data)) {
                $dbregistration =  $row['registration'];
                $dbemail = $row['email'];
                $dbpass = $row['password'];
            }
        } else {


            header('location:./stdSinUp.php?sinup=notregister');
            exit();
        }
        if (!empty($dbpass)) {
            header('location:./stdSinUp.php?sinup=alreadyregister');
            exit();
        }




        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {


            header('location:./stdSinUp.php?sinup=mailerror');
            exit();
        } else {
            if (!($dbemail == $email)) {


                header('location:./stdSinUp.php?sinup=mailnotmatch');
                exit();
            } else {
                $verifiedmail = $email;
            }
        }
        if($passlenth<5){
            header('location:./stdSinUp.php?sinup=passchar');
            exit();
        }
      else if($passlenth>15){
        header('location:./stdSinUp.php?sinup=passchar');
        exit();
      }
      else{
        $pass=password_hash($password,PASSWORD_BCRYPT);
        $cpass=password_hash($cpassword,PASSWORD_BCRYPT);
      }


        if (!($password == $cpassword)) {



            header('location:./stdSinUp.php?sinup=passnotmatch');
            exit();
        }
    }

    $sql1 = "UPDATE `students` SET `password` = '$pass' WHERE `students`.`registration` = '$registration'";
    $fire = mysqli_query($conn, $sql1);
    if($fire){
        header('location:./stdlogin.php');
    }
}
else{
    header('location:./stdSinUp.php');

}
