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
        // get the page number 
        if (!isset ($_GET['page']) ) {  
          $page = 1;  
        } else {  
            $page = $_GET['page'];  
        }
        $posts_per_page = 5;  
        $page_first_result = ($page-1) * $posts_per_page; 
        
        $query = "select id from posts";  
        $result = mysqli_query($conn, $query);  
        $total_posts = mysqli_num_rows($result);  
          
        //determine the total number of pages available  
        $total_pages = ceil ($total_posts / $posts_per_page);  
        
        $sql = "SELECT * FROM posts ORDER BY id DESC LIMIT " . $page_first_result . ", " . $posts_per_page;

        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
          
          // pagination
          include 'blocks/pagination.php';
          
          // output data of each row
          while($row = $result->fetch_assoc()) {
            include 'blocks/blog-post.php';
          }
        } else {
          echo "0 results";
        }
        $conn->close();
        
        // pagination
        include 'blocks/pagination.php';
      ?> 
        
      </div>
      <div class="rightcolumn">
        <div class="card">
          
        <div class="card">
          
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
