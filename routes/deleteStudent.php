<?php 
error_reporting(0);
require '../connection.php';
$registration=$_GET['reg'];
$query="DELETE FROM `students` WHERE registration='$registration'";
$result=mysqli_query($conn,$query);
echo "
<script>alert('Deleted successfully')</script>
";
header('location:./studentsDetail.php');

?>