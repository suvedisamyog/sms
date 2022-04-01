
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login/Student MAnagement System</title>
  <link rel="stylesheet" href="../css/index.css"/>
   <!-- <scripts src="../scripts/index.js"></scripts> -->

   </script>
  </head>
  <body onload="load()">
  <?php
  $logincheck = "";
  if (isset($_GET['error'])) {
    $logincheck = $_GET['error'];
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
                src="../img/photo-1448932223592-d1fc686e76ea.jpg" 
                alt="login form"
                class="img-fluid" style="border-radius: 1rem 0 0 1rem;"
              />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

              <form action="./stdLoginProcess.php" method="post"  name="login">

                  

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
                  <small class="text-danger">
                      <?php
                      if ($logincheck == "empty") {
                        echo '<p class="error">**Please Fill All The Fiields**</p>';
                      }
                      ?>
                    </small>

                  <div class="form-outline mb-4">

                  

            <label class="form-label">Email <span><small>(Enter Email Registered To Your School/College)</small></span></label>
            <input type="email" name="email" id="loginemail" class="form-control form-control-lg">
           
            </div>
            <small class="text-danger">
                      <?php
                      if ($logincheck == "invalidmail") {
                        echo '<p class="error">**Please Enter A valid Email**</p>';
                      }
                      ?>
                    </small>

            <div class="form-outline mb-4">
            <label class="form-label" >Registration Number</label>
            
            <input type="text" name="regi" id="loginpassword" class="form-control form-control-lg">
            <small class="text-danger">
                      <?php
                      if ($logincheck == "notregistered") {
                        echo '<p class="error">**Incorrect Registration Number**</p>';
                      }
                      ?>
                    </small>
            </div>
            <div class="form-outline mb-4">
            <small class="text-danger">
                      <?php
                      if ($logincheck == "incorrectpass") {
                        echo '<p class="error">**Password Incorrect**</p>';
                      }
                      ?>
                    </small>
                <label class="form-label" >Password</label>
                
                <input type="password" name="pass"  class="form-control form-control-lg">
                </div>
    

                  <div class="pt-1 mb-4">
                  <button class="btn btn-primary btn-lg btn-block" type="submit" value="login" name="stdlogin" >Login</button>
                  </div>

                  <!-- <a class="small text-muted" href="#!">Forgot password?</a> -->
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="./stdSinUp.php" style="color: #393f81;">Register here</a></p>
                  
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
function load() {
  document.getElementById("loginemail").focus();
}
</script>
 
  </body>
</html>