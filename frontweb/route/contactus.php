<?php
require './bootstrap.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact us</title>
</head>
<body >

<form action="./submit.php" method="post">
  <div class="container  ">
    <div class="row">
      <div class="col-sm-12 form-group m-4 col-lg-4">
       
    <input type="text" class="form-control" id="" name="name" placeholder="Enter Name here" required>
      </div>
      <div class="col-sm-12 m-4 col-lg-4">
        <input type="email" class="form-control" id="" name="email" placeholder="Email here" required>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 form-group m-4 col-lg-4">
       
    <input type="tel" class="form-control" id="" name="phone"placeholder="Phone Number" required>
      </div>
      <div class="col-sm-12 m-4 col-lg-4">
        <input class="form-control" placeholder="Interested Course" name="course" list="course" name="courses" id="courses" required>
    <datalist id="course">
      <option value="BCA">
      <option value="Bsc.CSIT">
      <option value="BIT">
      <option value="BIM">
     
    </datalist> 
   

    
      </div>
      <div  class="col-sm-12 m-4 col-lg-8">
    <textarea type="text"  name="query" class="   form-control"  rows="4"></textarea>
    </div>
    </div>
    <div>
   
    </div>
    <button type="submit" name="submit" id="" class="btn btn-primary m-4">Submit</button>
  </div>
  
  
 
</form>
    
</body>
</html>