<?php
session_start();
if(!isset($_SESSION['mail'])){
 header('location:../adminLogin.php');
}
 include '../connection.php';
 $org=$_SESSION['mail'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

 
          <!-- .......................bootstrap css and js...................... -->
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js" integrity="sha512-RdSPYh1WA6BF0RhpisYJVYkOyTzK4HwofJ3Q7ivt/jkpW6Vc8AurL1R+4AUcvn9IwEKAPm/fk7qFZW3OuiUDeg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://kit.fontawesome.com/f2d7c9ef63.js" crossorigin="anonymous"></script>

 

<!-- ........................................................................... -->







 <!-- ...................................google api......................... -->
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<!-- ........................................ -->

<script type="text/javascript" src="../scripts/index.js"></script>
<script type="text/javascript" src="../scripts/tableSearch.js"></script>
<script type="text/javascript" src="../scripts/graphs.js"></script>
<script type="text/javascript" src="../scripts/libraryValidate.js"></script>



<link rel="stylesheet" href="../css/sidBar.css">
<link rel="stylesheet" href="../css/main.css">

  <title>Document</title>
</head>

<body>

    
  <div class="d-flex ">