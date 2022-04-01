<?php 
require '../connection.php';
if(isset($_POST['publish'])){
    $mtitle = $_POST['mtitle'];
    $mdesc = $_POST['mdesc'];
    $id=$_POST['iid'];
    $sql="update `notice` set `title`=$mtitle, `description`=$mdesc, where id='$id'  ";
    $sql="UPDATE `notice` SET `title`='$mtitle',`description`='$mdesc' WHERE `id`='$id'";

    $data =mysqli_query($conn,$sql);
    if($data){
      header('location:./noticeBoard.php');
    }
    else{
        echo "error";
    }
}
?>