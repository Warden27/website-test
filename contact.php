<!doctype html>
<html lang="en">

<head>
  <title>contact us</title>
  <?php include 'blocks/head.php';?>
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

    <!--Section: Contact v.2-->
    <section class="mb-4">

      <!--Section heading-->
      <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
      <!--Section description-->
      <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us
        directly. Our team will come back to you within
        a matter of hours to help you.</p>

      <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5 left">
          <form id="contact-form" name="contact-form" action="mail.php" method="POST">

            <!--Grid row-->
            <div class="row">

              <!--Grid column-->
              <div class="col-md-6">
                <div class="md-form mb-0">
                  <input type="text" id="name" name="name" class="form-control">
                  <label for="name" class="">Your name</label>
                </div>
              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-md-6">
                <div class="md-form mb-0">
                  <input type="text" id="email" name="email" class="form-control">
                  <label for="email" class="">Your email</label>
                </div>
              </div>
              <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">
              <div class="col-md-12">
                <div class="md-form mb-0">
                  <input type="text" id="subject" name="subject" class="form-control">
                  <label for="subject" class="">Subject</label>
                </div>
              </div>
            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">

              <!--Grid column-->
              <div class="col-md-12">

                <div class="md-form">
                  <textarea type="text" id="message" name="message" rows="2"
                    class="form-control md-textarea"></textarea>
                  <label for="message">Your message</label>
                </div>

              </div>
            </div>
            <!--Grid row-->

          </form>

          <div class="text-center text-md-left">
            <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
          </div>
          <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center right">
          <ul class="list-unstyled mb-0">
            <li><i class="fa fa-map-pin fa-2x"></i>
              <p>1215 Cedric Ave, Wilderness, 6560</p>
            </li>

            <li><i class="fa fa-phone mt-4 fa-2x"></i>
              <p>+27 62 411 0790</p>
            </li>

            <li><i class="fa fa-envelope mt-4 fa-2x"></i>
              <p>donovanmurchie20@gmail.com</p>
            </li>
          </ul>
        </div>
        <!--Grid column-->

      </div>

    </section>
    <!--Section: Contact v.2-->
</body>

</html>