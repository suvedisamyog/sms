<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>

    <?php
    require './bootstrap.php';
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="../css/head.css">
        <style>
            a {
                text-transform: capitalize;
                font-weight: bold;
                text-decoration: none;

            }
        </style>

        <title>name</title>
    </head>

    <body>
        <nav class="navbar mainnavbar navbar-expand-sm navbar-dark bg-dark" id="js-navbar-toggle">
            <div class="container-fluid">
                <a class="navbar-brand " href="../images/logo.png">
                    <img src="../images/logo.png" alt="PCT" width="150" height="auto" class="img-responsive">
                </a>

                <div class="collapse navbar-collapse" id="mynavbar">
                    <div class="navbar me-auto nav " id="js-menu">

                    <li class="nav-item">
            <a class="nav-link " href="./index.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">about us</a>
          <li class="nav-item dropdown  ">
            <a class="nav-link dropdown-toggle " href="" role="button" data-bs-toggle="dropdown">courses</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#bca">bca</a></li>
              <li><a class="dropdown-item" href="#csit">Bsc.csit</a></li>
              <li><a class="dropdown-item" href="#bit">bit</a></li>
              <li><a class="dropdown-item" href="#bim">bim</a></li>
            </ul>
          </li>
        
         
          <li class="nav-item">
            <a class="nav-link" href="#contactus">contact us</a>
          </li>
                        <li class="nav-item">
                        <?php require './connection.php'; 
                                          $query="SELECT   * FROM notice
                                          ORDER BY `time` DESC; ";
                                          $data=mysqli_query($conn,$query);
                                          $total=mysqli_num_rows($data);
                                          if ($total !=0){
                                         
                                               while($row=mysqli_fetch_assoc($data)){ ?>
                            <a href="#" data-toggle="modal" data-target="#changename" class="text-primary">Notice</a>
                            <div class="modal fade" id="changename" tabindex="-1" role="dialog" aria-labelledby="changename" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                                             
      <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $row['title'] ; ?></h5>

                                        </div>
                                        
                                            
                                            <div class="modal-body">
                                               <?php echo $row['description']  ; ?>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary m-2 " data-dismiss="modal">Close</button>
                                                <a  href="./shownotice.php" >Show All...</a>
                                            </div>
                                       <?php } 
                                      } ?>

                                    </div>
                                </div>
                            </div>
                        </li>
</div>
<form id="frmSearch" class="d-flex" method="get" action="">
          <input class="form-control me-2" type="text" placeholder="Search">
          <button class="btn btn-primary" type="submit">Search</button>
        </form>

                    </div>

                    </ul>
                </div>
        </nav>









        <!-- Modal -->

        <div class="modal fade" id="changename" tabindex="-1" role="dialog" aria-labelledby="changename" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Change Organization name</h5>

                    </div>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" name="editName" enctype="multipart/form">
                        <span class="error"><?php echo $nameerror; ?></span>
                        <div class="modal-body">
                            <input type="text" name="newName" id="" placeholder="Enter Organization New Name" class="form-control mb-2">
                            <input type="text" name="" id="" placeholder="Enter  password" class="form-control mb-2">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="changeName" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </body>

    </html>