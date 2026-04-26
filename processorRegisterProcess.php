<?php

include "connection.php";

$sizeName = $_POST["s"];

if (empty($sizeName)) {
    echo("Please Enter the Processor");
} else if(strlen($sizeName) > 20){
    echo("Size Should be less than 20 Characters");
}else{
    $rs = Database::search("SELECT * FROM `processor` WHERE `processor_name` = '" . $sizeName . "'");
    $num = $rs->num_rows;

    if ($num > 0) {
        echo "Processor Already Exists";
    } else {
        Database::iud("INSERT INTO `processor` (`processor_name`) VALUES ('" . $sizeName . "')");
        echo "Success";
    }
}

?>