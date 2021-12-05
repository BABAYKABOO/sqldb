<h1>Cart</h1>
<h3 style="width: 1000px">All your goods</h3>
<br/><br/>
<?php
foreach($data['products'] as $row)
{
    echo '<div style="height: 250px; width: 100%; margin: 0px 50px 100px 0px">';
        echo '<h2>Product: '.$row[0].'</h2><p>Count: '.$row[1].'</p>
               <p>Price: '.$row[2].'</p><br/>
               <form method="post">
                    <input type="submit" name="test" id="test" class="btn btn-danger" value="Remove from cart" /><br/>
                </form>';
    echo '</div>';
}
echo '<div style="height: 300px; width: 100%; margin: 0px 50px 100px 0px">';
echo '<h1>Sum: '.$data['sum'].'</h1>';
echo '</div>';

function testfun()
{
    header('Location: http://pattern-hmvc.com/cart');
    //SQL - DELETE

}

if (array_key_exists('test', $_POST)) {
    testfun();
}
?>
