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

    .btnColor {
      color: white;
  background: #305485;
  border:0px;
    }
    .test {
    /* background-color:yellowgreen; */
    /* width: 80%; */
    margin-right:auto;
    margin-left:auto;
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
  

  <section class="vh-50 w-50 border border-light test">
    <div class="container-fluid h-custom pad">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <!-- <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="images/login.jpg" class="img-fluid"
            alt="Sample image">
        </div> -->
        <!-- <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1"> -->
          <div>
            <!-- Default form login -->
<form class="text-center border border-light p-5" action="#!">

<p class="h4 mb-4">Login</p>

<!-- Email -->
<input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">

<!-- Password -->
<input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">

<div class="d-flex justify-content-around">
    <div>
        <!-- Remember me -->
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
            <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
        </div>
    </div>
    <div>
        <!-- Forgot password -->
        <a href="">Forgot password?</a>
    </div>
</div>

<!-- Login button -->
<button class="btn btn-info btn-block my-4 btnColor" type="submit">Login</button>

<!-- Register -->
<p>Not a member?
    <a href="register.php">Register</a>
</p>

<!-- Social login -->
<p>or Login with:</p>

<a href="#" class="mx-3 fa-lg" role="button"><i class="fa fa-facebook-f light-blue-text"></i></a>
<a href="#" class="mx-3 fa-lg" role="button"><i class="fa fa-twitter light-blue-text"></i></a>
<a href="#" class="mx-3 fa-lg" role="button"><i class="fa fa-linkedin light-blue-text"></i></a>
<a href="#" class="mx-3 fa-lg" role="button"><i class="fa fa-github light-blue-text"></i></a>

</form>
<!-- Default form login -->
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