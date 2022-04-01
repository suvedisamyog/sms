

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Registration/Student MAnagement System</title>
    <link rel="stylesheet" href="../css/index.css"/>
    <script src="../scripts/sinup.js"></script>

</head>

<body onload=load()>
   
    <section class="vh-100 " >
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

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Crate an account</h5>
                  <form action="./sinupProcess.php" method="post" name="register" enctype="multipart/form-data" onsubmit="return sinupValidate();">
                  <small class="text-danger text-center" id="matcherror"></small>
                                <small class="text-danger text-center"><?php error_reporting(0); echo $_GET['error']; ?></small>
                                         
                                      
                                <div class="form-outline mb-4 ">
                                    <input type="text" name="name"  placeholder="Orginazation Name" class="form-control form-control-lg " id="sname" >
                                    <small class="text-danger" id="nameerror"></small>
                                 
                                  </div>

                                

                                <div class="form-outline mb-4 ">
                                    <input type="email" name="email" placeholder="Email" id="email" class="form-control form-control-lg " >
                                    <small class="text-danger" id="mailerror"></small>

                               

                                </div>

                                <div class="form-outline mb-4 ">
                                    <input type="password" name="password" placeholder="Password" id="password" class="form-control form-control-lg " >
                                    <small class="text-danger" id="passerror"></small>


                                </div>

                                <div class="form-outline mb-4 ">
                                    <input type="password" name="cpassword" id="cpassword" placeholder="Confirm_Password" class="form-control form-control-lg " >
                                    <small class="text-danger" id="cpasserror"></small>


                                </div>
                                <div class="col-sm-12 pb-3"> <label for="" class="form-label">Upload your Organization logo </label>
<input type="file" name="file" class="form-control" placeholder="file" required>

</div>



                                <div class="d-flex justify-content-center ">
                                    <button type="submit " name="register" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body ">Register</button>
                                </div>

                                <p class="text-center text-muted mt-5 mb-0 ">Already have an account? <a href="../adminLogin.php" class="fw-bold text-body "><u>Login here?</u></a></p>

                            </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>

</html>
