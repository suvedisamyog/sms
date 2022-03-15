<?php
require './includes/session.php';

include './includes/header.php';
include './includes/navbar.php';
include './includes/scripts.php';
include './includes/bootstrap.php';
error_reporting(0);
$name = $_SESSION['username'];
?>



<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->

        <?php

        include './includes/topbar.php';




        ?>


        <!-- Topbar company name  -->


        <!-- Topbar Navbar -->


        </nav>



        <div class="container-fluid">



            <div class="row">
                <?php


                require './connection.php';
                require './includes/scripts.php';


                ?>
                <?php

                if (isset($_SESSION)) {
                    $sql = "SELECT * FROM `admin` WHERE email='$name'";
                    $data = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($data) != 0) {
                        while ($row = mysqli_fetch_assoc($data)) {
                ?>
                            <!-- start         -->

                            <div class="info m-3">
                                <hr>
                                <table class="table table-hover table-borderless table-light ">

                                    <tbody>
                                        <!-- change name -->
                                        <tr>
                                            <th>Organization Name</th>
                                            <td><?php echo $row['name']; ?></td>
                                            <td> <a href="#" onclick="nameChanged()">nChange</a></td>

                                        </tr>
                                        

                                        <!-- change email  -->
                                        <tr>
                                            <th>Email</th>
                                            <td><?php echo $row['email']; ?></td>
                                          <td>   <a href="#" onclick="email()">eChange</a></td>
                                        </tr>
                                        <!-- change password   -->
                                        <tr>
                                            <th>password</th>
                                            <td>*******</td>
                                            <td><a href="">Change</a></td>
                                        </tr>
                                        <!-- change logo  -->
                                        <tr>
                                            <th>Logo</th>
                                            <td> <img class="img-profile    rounded  " src='<?php echo $row['image']; ?>' alt="Image Not available">
                                            </td>
                                           
                                            <td><button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Simple collapsible</button></td>
  <div id="demo" class="collapse">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  </div>

                                        </tr>

                                    </tbody>
                        <?php
                        }
                    }
                }
                        ?>

                                </table>
                                <hr>
                            </div>
            </div>
            <div id="nameChange" style="display: none;">
                                            <form>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group p-4">

                                                            <input type="email" class="form-control" placeholder="Enter New Orginazation Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group p-4">
                                                            <input type="password" class="form-control" placeholder="Enter Password">
                                                        </div>
                                                    </div>

                                                    <button type="submit" class="btn btn-primary btn-block">Change</button>
                                            </form>
                                        </div>

            <div id="emailChange " style="display: none; z-index:-1;">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group p-4">

                                <input type="email" class="form-control" placeholder="Enter New Email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group p-4">
                                <input type="password" class="form-control" placeholder="Enter Password">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Change</button>
                </form>
            </div>




            <!-- end  -->
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->



    <script>
        function nameChanged() {
            var x = document.getElementById("nameChange");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

       
    </script>



    <?php
    include './includes/scripts.php';
    include './includes/footer.php';


    ?>