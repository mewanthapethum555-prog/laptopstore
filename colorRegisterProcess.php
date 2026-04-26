<?php

include "connection.php";

$colName = $_POST["col"];

if (empty($colName)) {
    echo("Please Enter the Color");
} else if(strlen($colName) > 20){
    echo("Color Should be less than 20 Characters");
}else{
    $rs = Database::search("SELECT * FROM `color` WHERE `color_name` = '" . $colName . "'");
    $num = $rs->num_rows;

    if ($num > 0) {
        echo "Color Already Exists";
    } else {
        Database::iud("INSERT INTO `color` (`color_name`) VALUES ('" . $colName . "')");
        echo "Success";
    }
}

?>