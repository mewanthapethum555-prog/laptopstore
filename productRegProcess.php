<?php

include "connection.php";

$pname = $_POST["pname"];
$brand = $_POST["brand"];
$cat = $_POST["cat"];
$color = $_POST["color"];
$size = $_POST["size"];
$desc = $_POST["desc"];

if (empty($pname)) {
    echo ("Please Enter the Product Name");
} else if (strlen($pname) > 30) {
    echo ("Your Product Should be less than 30 Characters");
} else if ($brand == "0") {
    echo ("Please Enter the Brand Name");
} else if ($cat == "0") {
    echo ("Please Enter the Category");
} else if ($color == "0") {
    echo ("Please Enter the Color Name");
} else if ($size == "0") {
    echo ("Please Enter the Processor");
} else if (empty($desc)) {
    echo ("Please Enter the Description");
} else if (strlen($desc) > 200) {
    echo ("Your Description Should be less than 100 Characters");
} else if (empty($_FILES)) {
    echo ("Please Select the Files");
} else {
    if (isset($_FILES["image"])) {
        $image = $_FILES["image"];


        $path = "resources/ProductImg/" . uniqid() . ".png";
        move_uploaded_file($image["tmp_name"], $path);

        $rs = Database::search("SELECT * FROM `product` WHERE `name` = 'name'");
        $num = $rs->num_rows;

        if ($num > 0) {
            echo ("Product has been already registered !");
        } else {
            Database::iud("INSERT INTO `product` (`name`, `description`, `path`, `category_id`, `brand_id`, `color_id`, `processor_id`) 
            VALUES ('$pname','$desc', '$path', '$cat', '$brand', '$color', '$size')");

            echo ("Success");
        }
    } else {
        echo ("Please Select a Product Image");
    }
}
