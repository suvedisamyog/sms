<?php
error_reporting(0);
require_once '../connection.php';
include '../includes/head.php';

include '../includes/sidNav.php';

?>
<div class="container">
    <div class="row bg-info">

        <div class="col-sm-12">
            <?php include '../includes/topbar.php'; ?>
        </div>
        
        <div class="col-sm-12">
            <div class="col-md-12  card-header">
                <form class="d-flex m-5" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <input class="form-control me-2" type="search" name="reg" value="<?php echo $_GET['search']; ?>" placeholder="Enter Registration Number Here" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit" name="search" id="search">Search</button>
                </form>



                <?php

               {
                    $registration = $_POST["reg"];
                    $sql = "select * from library where regi=$registration order by time desc ";
                    $data = mysqli_query($conn, $sql);
                    $total = mysqli_num_rows($data);
                    if ($total != 0) {
                ?>

                        <table class="table table-bordered  table-hover black  " id="Book-table">
                            <h1><?php echo $stdname ;?></h1>
                            <thead>
                                <tr>
                                    <th>Books</th>
                                    <th>ISBN </th>
                                    <th> Issued Date </th>
                                    <th>Return </th>




                                </tr>
                            </thead>
                            <?php
                            while ($row = mysqli_fetch_assoc($data)) { ?>
                            <?php $stdname=$_row['stdname'];?>
                                <tbody>
                                    <tr>
                                    <td><?php echo $row['bookname']; ?></td>
                                    <td><?php echo $row['isbn']; ?></td>
                                    <td><?php echo $row['issue']; ?></td>
                                   <td><a href="" title="Return Book"><i class="fa-solid fa-rotate-left  fa-2x mb-4" title="Return Book"></i></a></td>
                                    </tr>
                                </tbody>



                    <?php
                            }
                        }
                        else{ 
                            echo"
                           No Records Found
                          
";
                        }
                    }

                    ?>

<!-- gfgdfgd -->

                   

            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>