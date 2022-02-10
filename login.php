<!doctype html>
<html lang="en">

<head>
  <title>Login</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.0.2 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    .navbar {
      width: 100%;
      background-color: #555;
      overflow: auto;
    }

    .navbar a {
      float: left;
      padding: 12px;
      color: white;
      text-decoration: none;
      font-size: 17px;
    }

    .navbar a:hover {
      /* background-color: #000; */
    }

    .active {
      background-color: #04aa6d;
    }

    @media screen and (max-width: 500px) {
      .navbar a {
        float: none;
        display: block;
      }
    }
  </style>
  <style>
   * {
      box-sizing: border-box;
    }

    /* Add a gray background color with some padding */
    body {
      font-family: Arial;
      /* padding: 20px; */
      background: #f1f1f1;
    }

  /* Header/Blog Title */
    .header {
      padding-bottom: 200px;
      padding-top: 200px;
      font-size: 40px;
      text-align: center;
      width: 100%;
      background: white;
      /* background-image: url(images/background.jpg); */
      background-image: url(images/background2.jpg);
      /* background-image: url(images/background3.jpg); */
      background-size: cover;
      color: #f1f1f1;
    }

    .pad {
      padding:30px;
    }
  </style>
</head>

<body>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>

  <?php include 'blocks/nav.php';?>
  <div class="header">
    <h2>The Blog Spot</h2>
  </div>
  

  <section class="vh-100">
    <div class="container-fluid h-custom pad">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <!-- <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="images/login.jpg" class="img-fluid"
            alt="Sample image">
        </div> -->
        <!-- <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1"> -->
          <div>
            <form>
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
              <p class="lead fw-normal mb-0 me-3">Sign in with</p>
              <button type="button" class="btn btn-primary btn-floating mx-1">
                <i class="fa fa-facebook-f"></i>
              </button>
  
              <button type="button" class="btn btn-primary btn-floating mx-1">
                <i class="fa fa-twitter"></i>
              </button>
  
              <button type="button" class="btn btn-primary btn-floating mx-1">
                <i class="fa fa-linkedin"></i>
              </button>
            </div>
  
            <div class="divider d-flex align-items-center my-4">
              <p class="text-center fw-bold mx-3 mb-0">Or</p>
            </div>
  
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form3Example3" class="form-control form-control-lg"
                placeholder="Enter a valid email address" />
              <label class="form-label" for="form3Example3">Email address</label>
            </div>
  
            <!-- Password input -->
            <div class="form-outline mb-3">
              <input type="password" id="form3Example4" class="form-control form-control-lg"
                placeholder="Enter password" />
              <label class="form-label" for="form3Example4">Password</label>
            </div>
  
            <div class="d-flex justify-content-between align-items-center">
              <!-- Checkbox -->
              <div class="form-check mb-0">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                <label class="form-check-label" for="form2Example3">
                  Remember me
                </label>
              </div>
              <a href="#!" class="text-body">Forgot password?</a>
            </div>
  
            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="button" class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
              <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href=""
                  class="link-danger">Register</a></p>
            </div>
  
          </form>
        </div>
      </div>
    </div>
    <!-- <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
      <div class="text-white mb-3 mb-md-0">
        Copyright © 2020. All rights reserved.
      </div>
  
      <div>
        <a href="#!" class="text-white me-4">
          <i class="fa fa-facebook-f"></i>
        </a>
        <a href="#!" class="text-white me-4">
          <i class="fa fa-twitter"></i>
        </a>
        <a href="#!" class="text-white me-4">
          <i class="fa fa-google"></i>
        </a>
        <a href="#!" class="text-white">
          <i class="fa fa-linkedin"></i>
        </a>
      </div>
    </div> -->
  </section>
</body>

</html>