
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login/Student MAnagement System</title>
  <link rel="stylesheet" href="./css/index.css"/>
    <script src="./scripts//index.js"></script>


   </script>
  </head>
  <body onload=load()>


  <!-- .............................<form validation>................................... -->

  <?php
  session_start();
  require './connection.php' ;
$email=$password="";
$emailerror=$passerror=$emptyerror="";


if(isset($_SERVER['REQUEST_METHOD'])=="POST"){

  if(empty($_POST['loginemail']) || empty($_POST['loginpassword'])){
         $emptyerror="**PLease Fill All Field**";
  }
  else{
       $email=test_input($_POST['loginemail']);
       $password=test_input($_POST['loginpassword']);
          

       $sql="SELECT * FROM admin WHERE email='$email' ";  
       $data = mysqli_query($conn,$sql) ;
       if(mysqli_num_rows($data)!=0){
            $row=mysqli_fetch_assoc($data);
            $dbpass=$row['password'];
            $pass_dec=password_verify( $password,$dbpass);
            if($pass_dec){
              $_SESSION['mail']= $email;

              header('location:./routes/dashboard.php');
                
            }
            else{
              $passerror="**Incorrect Passsword**";
            }

  }
  else{
    $emailerror="**Email Not Registered Yet**";
  }





  

}
}

function test_input($data){
  $data=trim($data);
  $data=stripslashes($data);
  $data=htmlspecialchars($data);
  return $data;
}








?>





























 
<section class="vh-100 indexCss" >
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img
                src="./img/photo-1448932223592-d1fc686e76ea.jpg" 
                alt="login form"
                class="img-fluid" style="border-radius: 1rem 0 0 1rem;"
              />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

              <form action="<?php ($_SERVER["PHP_SELF"]);?>" method="post"  name="login"  onsubmit="return loginValidate()">

                  

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
                  <small class="text-danger"><?=$emptyerror;  ?></small>
                  <div class="form-outline mb-4">
            <label class="form-label">Email</label>
            <input type="email" name="loginemail" id="loginemail" value="<?=$email; ?>" class="form-control form-control-lg">
            <small id="emailerror" class="text-danger"><?=$emailerror; ?></small>
              
            </div>

            <div class="form-outline mb-4">
            <label class="form-label" >Password</label>
            
            <input type="password" name="loginpassword" id="loginpassword" class="form-control form-control-lg">
            <small class="text-danger"><?=$passerror; ?></small>
            </div>

                  <div class="pt-1 mb-4">
                  <button class="btn btn-primary btn-lg btn-block" type="submit" value="login" name="adminlogin" >Login</button>
                  </div>

                  <!-- <a class="small text-muted" href="#!">Forgot password?</a> -->
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="./routes/sinup.php" style="color: #393f81;">Register here</a></p>
                  
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
  function load(){
    document.getElementById("loginemail").focus();
 }

</script>
 
  </body>
</html>