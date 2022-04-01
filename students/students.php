<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>students</title>
</head>
<style>
    html {
        overflow-x: hidden;
    }

    body {
        overflow-x: hidden;
    }

    .bdr {
        box-shadow: 1px 1px 0px #999,
            2px 2px 0px #999,
            3px 3px 0px #999,
            4px 4px 0px #999,
            5px 5px 0px #999,
            6px 6px 0px #999;
    }

    .scrollable {
        max-width: 25rem;
        overflow-x: hidden;
        overflow-y: auto;
        text-align: justify;
        height: 12rem;
    }

    @media only screen and (max-width: 990px) {
        .scrollable {
            max-width: 100%;
            text-align: justify;
            height: max-content;
        }
    }




    .navbar {
        position: relative;
    }

    .dropdown-menu {
        box-shadow: 0 0 10px rgba(0, 0, 0, .4);
        border-radius: 5px;
        margin: 0px;
        transform: translate3d(-60px, 3px, 100px);
    }
</style>

<body>
    <?php
    session_start();
    require '../connection.php';
    if (!isset($_SESSION['id'])) {
        header('Location:./stdlogin.php');
    } else {
        $id = $_SESSION['id'];
    }

  

    ?>
  



    <?php
     $sql = "select * from students where registration='$id'";
     $data = mysqli_query($conn, $sql);
     if (mysqli_num_rows($data) != 0) {
         while ($row = mysqli_fetch_assoc($data)) {
     ?>
    <div class="">
        <nav class="navbar navbar-expand-sm fixed-top navbar-dark bg-secondary" style="position: fixed;">
            <div class="container-fluid">
                <a class="navbar-brand ms-md-3 " href="./students.php">Home</a>

                <div>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    </ul>
                    <div class="d-flex">
                        <div class="flex-shrink-0 dropdown  me-5 mt-sm-3">
                            <a href="#" class="d-block link-dark text-decoration-none" id="notice-drop-down" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-bell text-white    fa-lg"></i> </a>
                            <ul class="dropdown-menu" aria-labelledby="notice-drop-down">
                                <li class="text-center"><h5>Notifications</h5></li>
                            <li class="d-flex justify-content-around">
                                            <div class="btn btn-info btn-sm">Notices</div>
                                            <div><a href="#notice-board">See aLl</a></div>
                                        </li>
                                        <hr class="dropdown-divider"></li>
                            <?php   
                                $query="select * from notice ";
                                $qfire=mysqli_query($conn, $query);
                                 if(mysqli_num_rows($qfire)!=0){
                                     while($notice=mysqli_fetch_array($qfire)){
                                        echo'
                                       
                                        <li><a class="dropdown-item" href="#books-holding">'.$notice['title'].'</a></li>
                                        
                                        <hr class="dropdown-divider"></li>

                                      
                                       
                                        ';
                                     }
                                 }
                                ?>
                                        
                            </ul>
                        </div>
                        <div class="flex-shrink-0 dropdown  me-5 mt-sm-3">
                            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="../<?php echo $row['image']   ?>" alt="mdo" width="32" height="32" class="rounded-circle">
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownUser2">
                                <li><a class="dropdown-item" href="#books-holding">Books Holding</a></li>
                                <li><a class="dropdown-item" href="#notice-board">Notice Board</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="./sinout.php">Sign out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
      
       
                <div class="card bdr mb-4">
                    <h4 class="card-header text-center mt-5 p-4">
                        Personal Details
                    </h4>
                    <div class="container-fluid  m-5">
                        <div class="row ">
                            <div class="col-md-6 col-lg-4">
                                <div class="card bdr" style="width: 18rem;">
                                    <img class="card-img-top " src="../<?php echo $row['image']   ?>" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">college name</h5>
                                        <p class="card-text">
                                            <?php echo $row['name']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-8">
                                <div class="row ">
                                    <div class="col-md-4 col-10 me-5 mt-4  ">
                                        <div class="mb-5 mt-4">
                                            <div class="form-group">
                                                <label>Registration Number</label>
                                                <input type="text" class="form-control" value="<?php echo $row['registration']; ?>" disabled>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control" value="<?php echo $row['email']; ?>" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-10 mt-4">
                                        <div class=" mt-4 mb-5">
                                            <div class="form-group">
                                                <label>Phone Nuber</label>
                                                <input type="text" class="form-control" value="<?php echo $row['phone']; ?>" disabled>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" value="<?php echo $row['address']; ?>" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-10 col-md-3   mb-5">
                                <div class="form-group">
                                    <label>Course</label>
                                    <input type="text" class="form-control" value="<?php echo $row['course']; ?>" disabled>
                                </div>
                            </div>
                            <div class="col-10 col-md-3  mb-5 ">
                                <div class="form-group">
                                    <label>DOB</label>
                                    <input type="text" class="form-control" value="<?php echo $row['dob']; ?>" disabled>
                                </div>
                            </div>
                            <div class="col-10 col-md-3  mb-5 ">
                                <div class="form-group">
                                    <label>Enrolled Year</label>
                                    <input type="text" class="form-control" value="<?php echo $row['enrollyear']; ?>" disabled>
                                </div>
                            </div>
                            <div class="col-10 col-md-2   ">
                                <div class="form-group">
                                    <label>Gender</label>
                                    <input type="text" class="form-control" value="<?php echo $row['gender']; ?>" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    </h4>
                </div>
        <?php
            }
        }
        ?>
        <div>


            <div class="card bdr  mb-4    " id="books-holding">
                <div class="card-header text-center">
                    <h4>Books Holdings</h4>
                </div>
                <table class="table table-responsive table-bordered  table-hover text-center ">
                    <thead class="thead-dark">
                        <tr>
                            <th>Book Name</th>
                            <th>ISBN Number</th>
                            <th>Issued Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql1 = "SELECT * FROM library WHERE regi='$id'";
                        $result = mysqli_query($conn, $sql1);
                        if (mysqli_num_rows($result) != 0) {
                            while ($col = mysqli_fetch_assoc($result)) {
                                foreach ($col as $list) {
                                }
                        ?>
                                <tr>
                                    <td>
                                        <?php echo $col['bookname']; ?>
                                    </td>
                                    <td>
                                        <?php echo $col['isbn']; ?>
                                    </td>
                                    <td>
                                        <?php echo $col['issue']; ?>
                                    </td>
                                </tr>
                        <?php
                            }
                        }
                        else{
                            echo '
                            <tr>
                            <td>
                            NUll
                            </td>
                            <td>
                               Null
                            </td>
                            <td>
                               Null
                            </td>
                        </tr>
                            ';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container-fluid card bdr mb-4" id="notice-board">
            <h4 class="text-center p-4  card-header">Notice Board </h4>
            <div class="row ">
                <?php
                $sql = "select * from notice order by time desc limit 12";
                $notice = mysqli_query($conn, $sql);
                if (mysqli_num_rows($notice) != 0) {
                    while ($info = mysqli_fetch_assoc($notice)) {
                ?>
                        <div class="col-xxl-4 col-lg-6 col-md-12   mobile-responsive-notice-board">
                            <div class="card border-success mb-3 scrollable">
                                <h6 class="card-header  border-success">
                                    <?php echo $info['title']; ?>
                                </h6>
                                <div class="card-body text-success">
                                    <p class="card-text">
                                        <?php echo $info['description']; ?>
                                    </p>
                                </div>
                                <h6<span class="badge bg-secondary text-info">
                                    <?php echo $info['time']; ?></span>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  
</body>

</html>