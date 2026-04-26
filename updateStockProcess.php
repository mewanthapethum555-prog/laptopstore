<?php

include "connection.php";

$productId = $_POST["p"];
$qty = $_POST["q"];
$price = $_POST["up"];

// echo($productId);

 if (empty($qty)) {
    echo ("Please Enter the Quantity");
} else if (!is_numeric($qty)) {
    echo ("Enter Only Numbers");
} else if (strlen($qty) > 10) {
    echo ("Your Qty Should be less than 10 Characters");
} else if (empty($price)) {
    echo ("Please Enter the Price");
} else if (!is_numeric($price)) {
    echo ("Enter Only Numbers");
} else {
    //echo ("Sucess");
    $rs = Database::search("SELECT * FROM `stock` WHERE `product_id` = '".$productId."' AND `price` = '".$price."' ");
    $num = $rs->num_rows;
    $d = $rs->fetch_assoc();

    if ($num == 1) {
        //update query
        $newQty = $d["qty"] + $qty;
        Database::iud("UPDATE `stock` SET `qty` = '".$newQty."' WHERE `stock_id` = '".$d["id"]."'");
        echo("Stock Updated Successfully");

    }else{
        //Insert query
        Database::iud("INSERT INTO `stock` (`price`, `qty`, `product_id`)
        VALUES ('".$price."', '".$qty."', '".$productId."')");
        echo("New Stock Added Successfully");
    }
}

?>
