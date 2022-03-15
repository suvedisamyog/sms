
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice</title>
  
</head>
<body>


<?php 
require './bootstrap.php';
?>

    <div class="container">
    <?php
$conn=mysqli_connect('localhost','root','','project');
// Check connection
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

 $query="SELECT * FROM notice order by time desc";
 $data=mysqli_query($conn,$query);
 $total=mysqli_num_rows($data);
 if ($total !=0){

      while($result=mysqli_fetch_assoc($data)){ ?>
         
         <div class="card text-white bg-primary m-3" style="max-width: 100%; height:200px;">
  <div class="card-header"><?php echo $result['title']; ?></div>
  <div class="card-body">
  <h6 class="card-title"><?php
  $timestamp = time();
 

 
?></h6>
    <p class="card-text"><?php echo $result['description'] ;?></p>
  </div>
</div>
          <?php 
            }
           
            }
           
            ?>
            
            
    </div>
</body>
</html>