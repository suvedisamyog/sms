<?php 
error_reporting(0);
require './includes/session.php';
require './connection.php';
$id=$_GET['id'];
$query="DELETE FROM `notice` WHERE id='$id'";
$result=mysqli_query($conn,$query);
echo "
<script>alert('Deleted successfully')</script>
";
header('location:./notice.php');

?>