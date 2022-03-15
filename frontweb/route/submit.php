<?php
require './connection.php';

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $question=$_POST['query'];
    $course=$_POST['course'];

    $query="INSERT INTO `public`( `name`, `email`, `phone`, `course`, `question`) VALUES ('$name', '$email', '$phone', '$course','$question')";
    if(mysqli_query($conn, $query)){
        
       header('location:./index.php');
       
    }
    else{
       
        echo "error";
       
    }

}


?>