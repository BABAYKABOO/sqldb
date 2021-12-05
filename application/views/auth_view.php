<?php

if (isset($_POST['Register']))
{
    $ErrorArrays = array ();

    $Input_Username = $_POST['Username'];
    $Input_Password = $_POST['Password'];

    if (empty($Input_Username))
    {
        $ErrorArrays[] = "Username Is Empty";
    }
    if (empty($Input_Password))
    {
        $ErrorArrays[] = "Password Is Empty";
    }

    if (count($ErrorArrays) == 0)
    {
        $mysqli = new mysqli("pattern-hmvc.com", "root", "", "shop");

        $result = $mysqli->query("SELECT MAX(`user_id`) FROM users");
        $_SESSION["user_id"] = $result->fetch_assoc();
        $_SESSION["user_id"] = $_SESSION["user_id"]['MAX(`user_id`)']+1;
        $mysqli->query("INSERT into users(user_id, user_name) values ('".$_SESSION["user_id"]."', '".$Input_Username."')");


        $result = $mysqli->query("SELECT MAX(`order_id`) FROM orders");
        $_SESSION["order_id"] = $result->fetch_assoc();
        $_SESSION["order_id"] = $_SESSION["order_id"]['MAX(`order_id`)']+1;
        $mysqli->query("INSERT into orders(order_id,`user_id`) values ('".$_SESSION["order_id"]."','".$_SESSION["user_id"]."')");

        header("Location: http://pattern-hmvc.com/shop/".$data['id']);
    }
    else
    {
        foreach ($ErrorArrays AS $Errors)
        {
            echo '<a href="http://pattern-hmvc.com/shop/'.$data['id'].'">
                    <button type="button" class="btn btn-success">Back to shop</button>
                  </a>';
        }
    }
}

?>
<h1>Authorization</h1>
<h2>Please to buy something you need to enter</h2>
<form method="POST">
    Username: <input type='text' name='Username'> <br/>
    Password: <input type='password' name='Password'><br/>

    <input type='submit' name='Register' value='Register'>


</form>