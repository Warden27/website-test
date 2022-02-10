<div class="d-flex justify-content-center mt-3">
    <nav aria-label="Pagination">
        <ul class="pagination mb-0">
            <li class="page-item">
            <?php if($page > 1): ?>
                <a class="page-link" href="index.php?page=<?=$page-1;?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            <?php endif; ?>
            </li>
            <?php
                for($i = 1; $i <= $total_pages; $i++) { 
                    $isActive = $i == $page; 
                    echo '<li class="page-item ';
                    if($isActive): echo "active"; endif;
                    echo '"><a class="page-link" href="index.php?page=' . $i . '">' . $i . ' </a></li>'; 
                }
            ?>  

            <?php if($page != $total_pages && $page <= $total_pages): ?>
            <li class="page-item">
                <a class="page-link" href="index.php?page=<?=$page+1;?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
            <?php endif; ?>
        </ul>
    </nav>
</div>