<?php
header("Expires: Mon, 26 Jul 1990 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<h1>Comments</h1>

<div class="container mt-5" >
    <button class="btn btn-outline-secondary ml-auto">Add Comment</button>
    <?php
        foreach ($comments as $comment)
        {
            echo "<div class='container mt-4'>
                  <h3>".$comment['3']."</h3>
                  <span>".$comment['2']."</span>
                  </div>
                  <hr style='width: 85%'/>";
        }

    ?>
</div>