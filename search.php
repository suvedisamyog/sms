<?php
error_reporting(0);
require './includes/session.php';

include './includes/header.php';
include './includes/navbar.php';
include './includes/scripts.php';
include './includes/bootstrap.php';
?>
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
        <!-- Topbar -->
        <!-- Topbar company name  -->
        <?php
        include './includes/topbar.php';
        ?>
        <!-- Topbar Navbar -->
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="row">
                <?php
                require './connection.php';
                require './includes/scripts.php';
                ?>
                <div class="container black">
                    <div class="row card">
                        <div class="col-md-12  card-header">
                            <form class="d-flex m-5" action="" method="post">
                                <input class="form-control me-2" type="search" name="reg" value="<?php echo $_GET['search']; ?>" placeholder="Enter Registration Number Here" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit" name="search" id="search">Search</button>
                            </form>
                            <?php
                            if (isset($_POST['search'])) {
                                $id = $_POST['reg'];
                                $sql = "SELECT * FROM `students` WHERE registration=$id";
                                $data = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($data) != 0) {
                                    while ($row = mysqli_fetch_assoc($data)) {   ?>
                                        <h4 class="card-title m-3 text-capitalize"> <?php echo "Personal Information Of $row[name] "; ?></h4>
                                        <div class="row card-body">
                                            <div class="col-md-6 m-3 card-contain">
                                                <h6 class="d-flex">Name: <p class="text-capitalize">&ensp; <?php echo $row['name']; ?> </p>
                                                </h6>
                                                <h6 class="d-flex">DOB: <p class="text-capitalize">&ensp;<?php echo $row['dob']; ?> </p>
                                                </h6>
                                                <h6 class="d-flex">Address: <p class="text-capitalize">&ensp;<?php echo $row['address']; ?> </p>
                                                </h6>
                                                <h6 class="d-flex">Course: <p class="text-capitalize">&ensp;<?php echo $row['course']; ?> </p>
                                                </h6>
                                                <h6 class="d-flex">Phone NO: <p class="text-capitalize">&ensp;<?php echo $row['phone']; ?> </p>
                                                </h6>
                                                <h6 class="d-flex">Email: <p class="text-capitalize">&ensp; <?php echo $row['email']; ?></p>
                                                </h6>
                                                <h6 class="d-flex">Gender: <p class="text-capitalize">&ensp;<?php echo $row['gender']; ?> </p>
                                                </h6>
                                                <h6 class="d-flex">Enrolled Year: <p class="text-capitalize">&ensp;<?php echo $row['enrollyear']; ?> </p>
                                                </h6>
                                                <h6 class="d-flex">Registration NO: <p class="text-capitalize">&ensp; <?php echo $row['registration']; ?></p>
                                                </h6>
                                                <form action='./delete.php?reg=<?php echo $row['registration'] ?>' onsubmit="return confirm('Are You sure you want to delete this')" method='post'>
                                                    <button class='btn btn-danger' type='submit' name='delete'>Delete</button>
                                                    <?php echo "
  <a  class='btn btn-warning' href='./update.php?reg=$row[registration]'>Edit</a>
";
                                                    ?>
                                                </form>
                                            </div>
                                            <div class="col-md-5 m-3 card-contain">
                                                <h5 class="">Image</h5>
                                                <a href="<?php echo $row['image']; ?>" target="_blank">
                                                    <img src='<?php echo $row['image']; ?>' alt="Image Not available" width="300" height="300" style=" position: relative;
            border-radius: 10px;
  box-shadow: 20px 20px rgba(0,0,0,.15);">
                                                </a>
                                            </div>
                                        <?php
                                    }
                                        ?>
                                <?php
                                } else {
                                    echo "
<div>
<center><h2 class='text-uppercase p-5 m-5 text-danger bg-dark '>DATA Not FOUND TRY AGAIN WITH VALID REGISTRATION NUMBER</h2></center>
</div>
";
                                }
                            } ?>
                                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Main Content -->
        <?php
        include './includes/footer.php';
        ?>