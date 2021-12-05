<h1>Shop</h1>
<h3 style="width: 1000px">Our cool shop</h3>
    <?php
    foreach($data as $row)
    {
        echo '<div style="height: 300px; width: 150px; margin: 0px 50px 100px 0px">
                   <div class="my-5" style="height: 200px; width = 150px">
                        <hr class="tm-hr-primary">
                        <h2>'.$row['1'].'</h2>
                        <p>'.$row['2'].'</p>
                   </div>
                   <hr>
                   <div class="d-flex justify-content-between">
                            <span></span>
                            <span>'.$row['2'].'</span>
                            <a href="shop/'.$row['0'].'" style="color: #3c3c3c">
                            <button type="button" class="btn btn-warning">Buy</button>
                            </a>
                    </div>
              </div>';
    }
    ?>