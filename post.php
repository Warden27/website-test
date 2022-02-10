<!DOCTYPE html>
<html>
  <head>
    <title>My blog</title>
    <?php include "blocks/head.php";?>
   
  </head>

  <body>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    <?php include "blocks/nav.php";?>
    <!-- <div class="header">
      <h2>The Blog Spot</h2>
    </div> -->
    <?php include "blocks/header.php";?>
    

    <div class="row padding">
      <div class="leftcolumn">
      <?php 
        // connection to database 
        include "blocks/db.php"; 

        $postID = $_GET["id"];
        
        $sql = "SELECT * FROM posts WHERE id = " . $postID;
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
          
          // output data of each row
          while($row = $result->fetch_assoc()) {
            include 'blocks/single-post.php';
          }
        } else {
          echo "0 results";
        }
        $conn->close();
        
      ?> 
        
      </div>
      <div class="rightcolumn">
        <div class="card">
          <h2>About Me</h2>
          <img src="images/donovan.jpg" alt="Donovan Image" />
          <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
        </div>
        <div class="card">
          <h3>Popular Post</h3>
          <div class="fakeimg">Image</div>
          <br />
          <div class="fakeimg">Image</div>
          <br />
          <div class="fakeimg">Image</div>
        </div>
        <div class="card">
          <h3>Follow Me</h3>
          <p>Some text..</p>
        </div>
      </div>
    </div>

    <footer>
     <p>Author: Donovan Murchie</p>
     <p><a href="mailto:donovanmurchie20@gmail.com">donovanmurchie20@gmail.com</a></p>
</footer>
      
    
  </body>
</html>
