<?php 
error_reporting(0);
require_once '../connection.php';
include '../includes/head.php';

include '../includes/sidNav.php';

?>
<div class="container-fluid">
<div id="content-wrapper" class="d-flex flex-column">
   
       
        <div class="row bg-info ">
            <div class="col-sm-12">
                <?php include '../includes/topbar.php';

               ?>
            </div>
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="row">
               
               
                <div class="container  text-black">
                    <div class="nav  card">
                        <h2 class="p-3 text-center "><u>Add Students</u></h2>
                        <small class="text-danger text-center">
                            <?php 
                            error_reporting(0);
                            echo $_GET['error'];
                            ?>
                        </small>
                    </div>
                    <form action="./addStudentsProcess.php" method="post" enctype="multipart/form-data" class="form-group card">
                        <div class="row p-4">
                            <div class="col-sm-4 ">
                                <label for="name" class="form-label">Full Name:</label>
                                <input class="form-control" placeholder="Full Name" type="text" name="sname" id="sname">
                            </div>
                            <div class="col-sm-4 mx-5">
                                <label for="email" class="form-label ">Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                            </div>
                        </div>
                        <div class="row p-4">
                            <div class="col-sm-4">
                                <label for="Reg_num" class="form-label">Registration Number:</label>
                                <input type="text" class="form-control" id="reg_num" placeholder="Registration Number" name="reg_num" required>
                            </div>
                            <div class="col-sm-4 mx-5">
                                <label for="Phonenumber" class="form-label">Phone Number:</label>
                                <input type="tel" class="form-control" name="Phonenumber" id=" Phonenumber" placeholder="Phone Number" required>
                            </div>
                        </div>
                        <div class="row p-4">
                            <div class="col-sm-4">
                                <label for="address" class="form-label">Address:</label>
                                <input type="text" name="address" id=" address" placeholder="Address" class="form-control" required>
                            </div>
                            <div class="col-sm-4 form-check p-1 mx-5">
                                <label for="course" class="form-label">Courses:</label>
                                <select class="form-select form-control" name="course">
                                    <option value="BCA">BCA</option>
                                    <option value="Bsc.CSIT">Bsc.CSIT</option>
                                    <option value="BIT">BIT</option>
                                    <option value="BIM">BIM</option>
                                </select>
                            </div>
                        </div>
                        <div class="row p-4">
                            <div class="col-sm-4">
                                <label for="eyear" class="form-label">Enroll Year:</label>
                                <input type="date" name="eyear" id="eyear " class="form-control" required>
                            </div>
                            <div class="col-sm-4 mx-5">
                                <label for="dob" class="form-label">Date of Birth:</label>
                                <input type="date" name="dob" id="dob " class="form-control" required>
                            </div>
                        </div>
                        <div class="row p-4">
                            <div class="col-sm-4 form-check p-1">
                                <label for="gender" class="form-label">Gender:</label>
                                <select class="form-select form-control" name="gender">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="col-sm-4"> <label for="" class="form-label mx-5">Upload your image/photo </label>
                                <input type="file" name="file" class="form-control mx-5" placeholder="file" required>
                                <small class="text-warning">(Note:You can't change it later so be careful!! )</small>
                            </div>
                        </div>
                        <div>
                        <button type="submit" class="btn btn-success btn-lg p-2 m-4 " name="add"> Add Now</button>
                        <button type="reset" class="btn btn-warning btn-lg p-2 m-4 " > Reset</button>
                        </div>
                    </form>
                </div>
                </body>
            </div>
        </div>
   
</div>
</div>

<?php include '../includes/footer.php'; ?>