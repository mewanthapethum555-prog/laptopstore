<?php

include "connection.php";

$catName = $_POST["c"];

if (empty($catName)) {
    echo("Please Enter the Category");
} else if(strlen($catName) > 20){
    echo("Category Should be less than 20 Characters");
}else{
    $rs = Database::search("SELECT * FROM `category` WHERE `category_name` = '" . $catName . "'");
    $num = $rs->num_rows;

    if ($num > 0) {
        echo "Category Already Exists";
    } else {
        Database::iud("INSERT INTO `category` (`category_name`) VALUES ('" . $catName . "')");
        echo "Success";
    }
}

?>