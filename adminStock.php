<?php

session_start();
include "connection.php";

if (isset($_SESSION["a"])) {

?>

<?php

} else {
    echo ("You are not an admin");
}

?>


<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="icon" href="resources/img/logo.jpg" />
    <title>Admin Stock</title>
</head>

<body>
    <?php
    include "adminNavbar.php";
    ?>

    <div class="container-fluid" style="margin-top: 100px;">

        <div class="row">
            <div class="col-5 offset-1">

                <h2 class="text-center">Product Registration</h2>

                <div class="mb-3">
                    <label class="form-label">Product Name :</label>
                    <input id="pname" type="text" class="form-control">
                </div>

                <div class="row">

                    <div class="mb-3 col-6">
                        <label class="form-label">Brand :</label>
                        <select id="brand" class="form-select">
                            <option value="0">Select</option>

                            <?php

                            $rs = Database::search("SELECT * FROM `brand`");
                            $num = $rs->num_rows;

                            for ($x = 0; $x < $num; $x++) {
                                $data = $rs->fetch_assoc();
                            ?>

                                <option value="<?php echo ($data["brand_id"]); ?>"><?php echo ($data["brand_name"]); ?></option>

                            <?php
                            }

                            ?>

                        </select>
                    </div>

                    <div class="mb-3 col-6">
                        <label class="form-label">Category :</label>
                        <select id="cat" class="form-select">
                            <option value="0">Select</option>

                            <?php

                            $rs = Database::search("SELECT * FROM `category`");
                            $num = $rs->num_rows;

                            for ($x = 0; $x < $num; $x++) {
                                $data = $rs->fetch_assoc();
                            ?>

                                <option value="<?php echo ($data["category_id"]); ?>"><?php echo ($data["category_name"]); ?></option>

                            <?php
                            }

                            ?>

                        </select>
                    </div>


                    <div class="mb-3 col-6">
                        <label class="form-label">Color :</label>
                        <select id="color" class="form-select">
                            <option value="0">Select</option>

                            <?php

                            $rs = Database::search("SELECT * FROM `color`");
                            $num = $rs->num_rows;

                            for ($i = 0; $i < $num; $i++) {
                                $data = $rs->fetch_assoc();

                            ?>

                                <option value="<?php echo ($data["color_id"]); ?>"><?php echo ($data["color_name"]); ?></option>

                            <?php
                            }

                            ?>

                        </select>
                    </div>

                    <div class="mb-3 col-6">
                        <label class="form-label">Processor :</label>
                        <select id="size" class="form-select">
                            <option value="0">Select</option>

                            <?php

                            $rs = Database::search("SELECT * FROM `processor`");
                            $num = $rs->num_rows;

                            for ($x = 0; $x < $num; $x++) {
                                $data = $rs->fetch_assoc();
                            ?>

                                <option value="<?php echo ($data["processor_id"]); ?>"><?php echo ($data["processor_name"]); ?></option>

                            <?php
                            }

                            ?>

                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Description :</label>
                    <!-- <input type="text" class="form-control"> -->
                    <textarea id="desc" class="form-control" rows="5"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Product Image :</label>
                    <input id="file" class="form-control" type="file" />
                </div>

                <div class="d-grid">
                    <button class="btn btn-info" onclick="regProduct();">Register Product</button>
                </div>

            </div>

            <!-- stock update -->
            <div class="col-5">
                <h2 class="text-center">Stock Update</h2>

                <div class="mb-3 col-10 offset-1">
                    <label class="form-label">Product name :</label>
                    <select class="form-select" id="selectProduct">

                        <?php
                        $rs = Database::search("SELECT * FROM `product`");
                        $num = $rs->num_rows;

                        for ($i = 0; $i < $num; $i++) {
                            $d = $rs->fetch_assoc();
                        ?>
                            <option value="<?php echo $d["id"] ?>"><?php echo $d["name"] ?></option>
                        <?php
                        }


                        ?>
                    </select>
                </div>

                <div class="mb-3 col-10 offset-1">
                    <label class="form-label">Qty :</label>
                    <input type="text" class="form-control" id="qty" required>
                </div>

                <div class="mb-3 col-10 offset-1">
                    <label class="form-label">Unit Price :</label>
                    <input type="text" class="form-control" id="uprice">
                </div>

                <div class="d-grid col-10 offset-1">
                    <button class="btn btn-primary" onclick="updateStock();">Update</button>
                </div>

            </div>

        </div>

    </div>




    <!-- footer -->
    <div class=" mt-3 col-12">
        <p class="text-center">&copy; 2024 Laptop Store.lk || All Rights Reserved</p>
    </div>
    <!-- footer -->

    <script src="script.js"></script>
    <script src="bootstrap.bundle.min.js"></script>
</body>

</html>