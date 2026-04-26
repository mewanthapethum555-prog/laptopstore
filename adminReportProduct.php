<?php

session_start();
include "connection.php";

if (isset($_SESSION["a"])) {

    $rs = Database::search("SELECT * FROM `product`	INNER JOIN `brand` ON `product`.`brand_id` = `brand`.`brand_id`
    INNER JOIN `category` ON `product`.`category_id` = `category`.`category_id`
    INNER JOIN `color` ON `product`.`color_id` = `color`.`color_id`
    INNER JOIN `processor` ON `product`.`processor_id` = `processor`.`processor_id` ORDER BY `product`.`id` ASC;");

    $num = $rs->num_rows;
?>

    <!DOCTYPE html>
    <html lang="en" data-bs-theme="dark">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="bootstrap.css">
        <link rel="icon" href="resources/img/logo.jpg" />
        <title>Product Report</title>
    </head>

    <body>

        <div class="container mt-3">
            <a href="adminReport.php"><img src="resources/img/back.png" height="50"></a>
        </div>

        <div class="container mt-3">
            <h2 class="text-center">Product Report</h2>
            <table class="table table-hover mt-5">
                <thead>
                    <tr>
                        <th>Product Id</th>
                        <th>Product Name</th>
                        <th>Brand Name</th>
                        <th>category</th>
                        <th>Color</th>
                        <th>Processor</th>
                        <th>Description</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 0; $i < $num; $i++) {
                        $d = $rs->fetch_assoc();
                    ?>
                        <tr>
                            <td><?php echo $d["id"] ?></td>
                            <td><?php echo $d["name"] ?></td>
                            <td><?php echo $d["brand_name"] ?></td>
                            <td><?php echo $d["category_name"] ?></td>
                            <td><?php echo $d["color_name"] ?></td>
                            <td><?php echo $d["processor_name"] ?></td>
                            <td><?php echo $d["description"] ?></td>
                            <td><img src="<?php echo $d["path"] ?>" height="75"></td>
                        </tr>

                    <?php
                    }
                    ?>

                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-end container mt-5 mb-5">
            <button class="btn btn-outline-success col-2" onclick="window.print()">Print</button>
        </div>


        <script src="script.js"></script>
        <script src="bootstrap.bundle.min.js"></script>
    </body>

    </html>

<?php

} else {
    echo ("You are not a Valid admin");
}
?>