
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="" href="style.css">
    <title>Login/Student MAnagement System</title>
    <style>
        .color{
          padding: 0px;
            margin: 0px;
            background-image: linear-gradient(to right bottom, #ecedf1 50%, #000000 50% );
height: 100vh;
            width: 100%;
            position: fixed;  
            /* background-image: url(./img/bgimg2.jpg); */
            background-repeat: no-repeat;
            position: relative;
      
  background-size: cover;
            
        }
       
    </style>
   <script type="text/javascript" >
     function validate()
{
    var email = document.login.loginemail.value;
    var password = document.login.loginpassword.value;
 
    if (email==null || email=="")
    {
      document.getElementById("one") .innerHTML ="Email is required";
      return false;
    }
    else if (password==null || password=="")
    {
      document.getElementById("two") .innerHTML ="password is required";
      return false;
    }
}

   </script>
  </head>
  <body>

 
<section class="vh-100 color" >
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

              <form action="./loginprocess.php" method="post"  name="login" onsubmit="return validate();">

                  

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
                  <small class="text-danger"><?php error_reporting(0); echo $_GET['error']; ?></small>

                  <div class="form-outline mb-4">
            <label class="form-label">Email</label>
            <input type="email" name="loginemail" id="loginemail" class="form-control form-control-lg">
            <small id="one"class="text-danger"></small>
              
            </div>

            <div class="form-outline mb-4">
            <label class="form-label" >Password</label>
            
            <input type="password" name="loginpassword" id="loginpassword" class="form-control form-control-lg">
            <small id="two" class="text-danger" ></small>
            </div>

                  <div class="pt-1 mb-4">
                  <button class="btn btn-primary btn-lg btn-block" type="submit" value="login" name="adminlogin" >Login</button>
                  </div>

                  <!-- <a class="small text-muted" href="#!">Forgot password?</a> -->
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="./sinup.php" style="color: #393f81;">Register here</a></p>
                  
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

 
  </body>
</html>