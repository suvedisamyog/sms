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

<?php
$id=$_GET['id'];
$sql = "SELECT * FROM `notice` WHERE id=$id";
$data = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($data);
$title = $row['title'];
$description = $row['description'];

?>




                <div class="col-sm-12">
                     <div class="col-4-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Create A Notice</h3>
                                    </div>
                                   
                                </div>
                                <form class="container" action="./nprocess.php" method="POST">
                                    <div class="row">
                                        <input class="d-none" type="text" name="iid" id="" value="<?=$row['id'];?>" ?>
                                        <div class="mt-2 col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Title</label>
                                            <input type="text" placeholder="title" name="mtitle" class="form-control"value="<?=$title; ?>">
                                        </div>

                                        
                                        </div>
                                        <div class="mt-5 mb-5 col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Detail</label>
                                            <input type="text" placeholder="Description" name="mdesc" class="form-control "value="<?=$description; ?>">
                                          
                                        </div>
                                        
                                        <div class="col-12 form-group mg-t-8">
                                            <button type="submit" name="publish" class="btn btn-success mt-5">Modify</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                   
</div>
</div>    
    </div>
</div>



<?php include '../includes/footer.php'; ?>