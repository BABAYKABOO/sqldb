<h1>Patterns</h1>
<h3>Design patterns are typical solutions to common problems
    in software design.</h3>
<table>
    <?php
    foreach($data as $row)
    {
        echo '<a href="'.$row['5'].'" style="color: #3c3c3c"><article class="col-12 col-md-6 tm-post">
               <div  style="height: 300px">
                    <hr class="tm-hr-primary">
                    <h2>'.$row['1'].'</h2>
                    <h3>Time : '.$row['6'].'</h3>
                    <p>'.$row['3'].'</p>
               </div>
               <hr>
               <div class="d-flex justify-content-between">
                        <span></span>
                        <span>'.$row['2'].'</span>
                    </div>
              </article>
              </a>';
    }
    ?>
</table>