<?php
require './bootstrap.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pentum College Of TEch</title>
    <style>


     
    
@media only screen and (max-width: 600px) {
  .bg img {
  height:200px;
  }
 

}
.contact{
      background-image: url(./images/lib.jpg);
      color:black;
      background-repeat: no-repeat;
      overflow: hidden;
      background-size: cover;
  }
  .map{
    
      border-radius:20px;
     
  }
</style>
</head>
<body>
    <div>
<?php 

require_once './head.php'
?>
</div>
<div class="bg">
    <img src="../images/bg.jpg" alt=""width="100%" height="300">
</div>
<div class="course">
<?php require_once './courses.php';

?>
</div>

<div class="aboutus" id="about">
<?php 
require_once './aboutus.php';
?>
</div>
<div  class="contact" id="contactus">
    <center>  <button class="btn  btn-dark" disabled> <h4 class="text-center text-uppercase m-4"><u >CONtact US</u></h4></button></center>
    <div class="row">
        <div class="col-lg-8">
        <?php 
require_once './contactus.php';
?>
        </div>
        <div class="col-lg-4">
            <?php 
require_once './contactus.php';
?><iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2400.5463406709487!2d85.34539851449985!3d27.676343135509214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1644381821272!5m2!1sen!2snp" width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>

</div>
<hr>
<div class="fot">
<?php 
require_once './foot.php';
?>
 </div>
</body>
</html>

