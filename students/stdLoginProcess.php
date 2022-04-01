<?php
session_start();

require '../connection.php';
if (isset($_POST['stdlogin'])) {


    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $registration = mysqli_real_escape_string($conn, $_POST['regi']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);
    $dbmail;
    $dbpass;
    $dbreg;



    if (empty($registration) || empty($password) || empty($email)) {
        header('location:./stdlogin.php?error=empty');
        exit();
    }


    $sql = "SELECT * from students where registration='$registration'";
    $data = mysqli_query($conn, $sql);
    if (mysqli_num_rows($data) != 0) {
        $row = mysqli_fetch_assoc($data);
$dbreg=$row['registration'];
        $dbmail = $row['email'];
        $dbpass = $row['password'];
    } else {
        header('location:./stdlogin.php?error=notregistered');
        exit();
    }


    if (!($dbmail == $email)) {
        header('location:./stdlogin.php?error=invalidmail');
        exit();
    }


    if (!(password_verify($password, $dbpass))) {
        header('location:./stdlogin.php?error=incorrectpass');
        exit();
    }

    header('location:./students.php?');
    $_SESSION['id']= $dbreg;

    
} else {
    header('location:./stdlogin.php');
    exit();
}
