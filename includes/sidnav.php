<?php include '../includes/head.php';
require_once '../connection.php';
?>

<div class="sidenavtoogle show-sidebar" >
<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-info  " style="width: 280px;">
    <div class="container-fluid" id="sidBarCss">
        <ul class="navbar-nav  sidebar   accordion" id="accordionSidebar">
            <?php
            if (isset($_SESSION)) {
                $sql = "SELECT * FROM `admin` WHERE email='$org'";
                $data = mysqli_query($conn, $sql);
                if (mysqli_num_rows($data) != 0) {
                    while ($row = mysqli_fetch_assoc($data)) {  ?>
                        <img class="img-responsive  mt-4 mb-4 "
                        style="
                                               box-shadow: 0px 0px 3px 10px rgba(200,200,200,.2);
                                               border-radius:40%;
                        "
                        height=150 width=150 src="../<?php echo $row['image']; ?>" <?php }
                                                        }
                                                    }
                                                                ?> <!-- Sidebar -->
                        <ul class="navbar-nav sidebar  sidebar-dark accordion" id="accordionSidebar">
                            <li class="nav-item ">
                                <a class="nav-link" href="./dashboard.php">
                                    <i class="fas fa-fw fa-tachometer-alt"></i>
                                    <span>Dashboard</span></a>
                            </li>
<hr>
                            <li class="nav-item mb-4 ">
                                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed">
                                     <i class="fa-solid fa-users"></i> Students</a>
                                <ul class="list-unstyled collapse" id="pageSubmenu">
                                    <li class="nav-item ">
                                        <a class="nav-link mt-3" href="./addStudents.php">
                                            <i class="fas fa-plus-circle"></i>
                                            <span>Add </span></a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="./studentsDetail.php">
                                            <i class="fas fa-info-circle"></i>
                                            <span> Details</span></a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="./searchStudent.php">
                                            <i class="fa fa-fw fa-search"></i>
                                            <span>Search </span></a>
                                    </li>
                                </ul>
                            </li>
                            <hr>
                            <li class="nav-item mb-4" >
                                <a href="#pageLibrary" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed"> 
                                <i class="fa-solid fa-book-open-reader"></i> Library</a>
                                <ul class="list-unstyled collapse" id="pageLibrary">
                                    <li class="nav-item mt-3">
                                        <a class="nav-link" href="./bookIssue.php">
                                            <i class="fas fa-edit"></i>
                                            <span>Issue book</span></a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="./bookReturn.php">
                                            <i class="fas fa-edit"></i>
                                            <span>Return Book</span></a>
                                    </li>
                                </ul>
                            </li>
                            <hr>
                            <li class="nav-item mb-4">
                                <a href="#pageNotice" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed"> 
                                <i class="fa-solid fa-message"></i> Notice</a>
                                <ul class="list-unstyled collapse" id="pageNotice">
                                    <li class="nav-item mt-3">
                                        <a class="nav-link" href="./notice.php">
                                            <i class="fas fa-flag"></i>
                                            <span>publish notice</span></a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="./noticeBoard.php">
                                            <i class="fas fa-question-circle"></i>
                                            <span>Notice Board</span></a>
                                    </li>
                                </ul>
                            </li>
                            <hr>
                            <li class="nav-item mb-4">
                                <a href="#pageExtra" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed">
                                <i class="fa-solid fa-gears"></i> Others</a>
                                <ul class="list-unstyled collapse" id="pageExtra">
                                    <li class="nav-item ">
                                        <a class="nav-link mt-3" href="./editProfile.php">
                                            <i class="fas fa-edit"></i>
                                            <span>Edit Profile</span></a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="logout.php " onclick="window.confirm">
                                            <i class="fas fa-edit"></i>
                                            <span>logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <hr>
                        </ul>
    </div>
</div>
<script src="../scripts/index.js"></script>
</div>
<?php
include '../includes/footer.php';
?>