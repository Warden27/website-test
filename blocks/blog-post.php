<div class="card">
  <img class="card-img-top" src="images/<?php echo $row["image"]; ?>" />
  <div class="card-body">
    <h5 class="card-title">
      <?= $row["title"]; ?>
    </h5>
    <p class="card-text">
      <?php echo $row["short_description"]; ?>
    </p>
    <a href="post.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary"> Read more </a>
  </div>
</div>

